<?php

/*
 * @author Sajjad Saleem
 * @This is to get pagination data for datatables jquery plugin.
 */

class Dtable {

    private $index = 'id';
    private $database_columns = array();
    private $more_database_columns = array();
    private $additional_columns = array(); //Additional columns to be be selected.
    private $from = ""; //if selecting from single table name otherwise complete join query
    private $where = "";
    private $select = "";
    private $filter = "";
    private $order_by = "";
    private $group_by = "";
    private $limit = 10;
    private $offset = 0;

    public function __construct() {

        //constructor
        $this->CI = & get_instance();
    }

    public function get_table_data() {

        $this->set_data_vars();

        $query = $this->build_query();
        $count_query = $this->build_count_query();

        $total_records = $count_query->num_rows();
        $output = array(
            "sEcho" => intval($this->CI->input->get('sEcho')),
            "iTotalRecords" => $total_records,
            "iTotalDisplayRecords" => $total_records,
            "aaData" => $this->make_result($query->result())
        );

        echo json_encode($output);
    }

    public function get_select_data() {

        $this->set_data_vars();

        $query = $this->build_query();
        $count_query = $this->build_count_query();

        $total_records = $count_query->num_rows();
        $output = array(
            "sEcho" => intval($this->CI->input->get('sEcho')),
            "iTotalRecords" => $total_records,
            "iTotalDisplayRecords" => $total_records,
            "aaData" => $query->result()
        );

        return $output;
    }

    public function set_data_vars() {

        $this->set_select();
        $this->set_filter();
        $this->set_orderby();
        $this->set_limit();
        $this->set_offset();
    }

    public function build_query() {

        $this->CI->db->select($this->select, FALSE);
        $this->CI->db->from($this->from);

        if (!empty($this->where))
            $this->CI->db->where($this->where);

        if (!empty($this->filter) && $this->filter != 0)
            $this->CI->db->where($this->filter);

        if (!empty($this->group_by))
            $this->CI->db->group_by($this->group_by);

        $this->CI->db->order_by($this->order_by);

        $this->CI->db->limit($this->limit, $this->offset);
        return $this->CI->db->get();
    }

    // Count totla number of records

    public function build_count_query() {

        $this->CI->db->select($this->select, FALSE);
        $this->CI->db->from($this->from);

        if (!empty($this->where))
            $this->CI->db->where($this->where);

        if (!empty($this->filter) && $this->filter != 0)
            $this->CI->db->where($this->filter);

        if (!empty($this->group_by))
            $this->CI->db->group_by($this->group_by);

        return $this->CI->db->get();
    }

    public function make_result($result) {

        $data = array();

        foreach ($result as $row) {

            $row_values = array();

            //To add only selected columns in the results
            foreach ($row as $key => $value) {

                if ($this->is_selected($key)) {

                    array_push($row_values, $value);
                }
            }

            //To add additional columns with the result
            foreach ($this->additional_columns as $key => $value) {

                preg_match("/\{([a-zA-Z0-9]|\-|\_)*\}/", $value, $matches);

                foreach ($matches as $match) {
                    $match_column = trim($match, "{}");

                    if (isset($row->$match_column))
                        array_push($row_values, str_replace($match, $row->$match_column, $value));
                }
            }

            array_push($data, $row_values);
        }

        return $data;
    }

    public function is_selected($column) {

        foreach ($this->database_columns as $selected_column) {

            $_selected_column = explode(".", trim($selected_column));

            if (trim($_selected_column[count($_selected_column) - 1]) == trim($column)) {

                return TRUE;
            }
        }

        return FALSE;
    }

    public function set_select() {

        $this->select = $this->index . ", " . implode(", ", $this->database_columns);

        $this->select .= (!empty($this->more_database_columns)) ? ", " . implode(", ", $this->more_database_columns) : '';
    }

    /*
     * Set Filters
     */

    public function set_filter() {

        $filter = "";
        if ($this->CI->input->get('sSearch') && $this->CI->input->get('sSearch') != "") {
            $filter = "(";
            for ($i = 0; $i < count($this->database_columns); $i++) {
                if ($this->CI->input->get('bSearchable_' . $i) && $this->CI->input->get('bSearchable_' . $i) == "true") {
                    $filter .= $this->database_columns[$i] . " LIKE '%" . $this->CI->input->get('sSearch') . "%' OR ";
                }
            }
            $filter = substr_replace($filter, "", -3);
            $filter .= ')';
        }

        /* Individual column filtering */
        for ($i = 0; $i < count($this->database_columns); $i++) {
            if ($this->CI->input->get('bSearchable_' . $i) && $this->CI->input->get('bSearchable_' . $i) == "true" && $this->CI->input->get('sSearch_' . $i) != '') {
                if (!empty($filter)) {
                    $filter .= " AND ";
                }

                $filter .= $this->database_columns[$i] . " LIKE '%" . $this->CI->input->get('sSearch_' . $i) . "%' ";
            }
        }

        $this->filter = $filter;
    }

    /*
     * Set Orderby Clause
     */

    public function set_orderby() {

//        if ($this->CI->input->get('iSortCol_0')) {
//            $order_by = "";
//
//            for ($i = 0; $i < intval($this->CI->input->get('iSortingCols')); $i++) {
//                if ($this->CI->input->get('bSortable_' . intval($this->CI->input->get('iSortCol_' . $i))) == "true") {
//                    $order_by .= $this->database_columns[intval($this->CI->input->get('iSortCol_' . $i))] . " " . $this->CI->input->get('sSortDir_' . $i) . ", ";
//                }
//            }
//
//            $order_by = substr_replace($order_by, "", -2);
//        }
//        if (isset($order_by)) {
//            //$this->order_by = $order_by;
//        }
    }

    /*
     * Set Limit
     */

    public function set_limit() {

        if ($this->CI->input->get('iDisplayStart') !== false && $this->CI->input->get('iDisplayLength') != '-1') {
            $this->limit = $this->CI->input->get('iDisplayLength');
        }
    }

    /*
     * Set Offset
     */

    public function set_offset() {

        if ($this->CI->input->get('iDisplayStart') && $this->CI->input->get('iDisplayLength') != '-1') {
            $this->offset = $this->CI->input->get('iDisplayStart');
        }
    }

    public function set_index($index) {

        $this->index = $index;
    }

    public function config($option, $value) {

        $this->$option = $value;
    }

    /*
     * Fatal Error
     */

    function fatal_error($sErrorMessage = '') {
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error');
        die($sErrorMessage);
    }

}

?>
