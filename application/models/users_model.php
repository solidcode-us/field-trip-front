<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Users_model extends CI_Model 
	{
		/**
 		 * @name		get
 		 * 
		 * @desc		Get a single account row, from whatever criteria.
		 *
		*/
		public function get( $options = array() ) 
		{
			return $this->db->select('*')->from('users')->where($options)->get()->row();
		} 
		/**
 		 * @name		add
 		 * 
		 * @desc		Add an account. Create a random salt & hash the password.
		 *
		*/
		public function add( $user ) 
		{
			$this->load->helper('string');
			# Load the string helper
			$user['salt'] = random_string('sha1', 20);
			$user['password'] = sha1( $user['salt'] . $user['password'] );
			# Generate a salt and convert the password to encoded.
			
			$this->db->insert('users', $user);
			return $this->db->insert_id();
			# Insert into the db and return the insert id for confirmation.
		}
		/**
 		 * @name		update
 		 * 
		 * @desc		Update account info. If 'password' key is passed, create the hashed version.
		 *
		*/
		public function update( $user, $data ) 
		{
			if ( isset( $data['password'] ) ) 
			{
				$data['password'] = sha1( $user->salt . $data['password'] );
				# Convert the inputted password into the stored format
			}
			$this->db->where('id', $user->id)->update('users', $data);
			return true;
		}
		/**
 		 * @name		verify
 		 * 
		 * @desc		Verify a user account via the salt.
		 *
		*/
		public function verify( $salt ) 
		{
			$query = $this->db->select('id')->from('users')->where('salt', $salt)->get()->row();
			
			if ($query) 
			{
				# Verify
				$new = array('verified' => 1);
				$this->db->where('id', $query->id)->update('users', $new);
				return true;
			}
			
			return false;
		}
		/**
 		 * @name		close
 		 * 
		 * @desc		Close an account, by deleting the record.
		 *
		*/
		public function close( $user ) 
		{
			$this->db->where('id', $user->id)->delete('users');
			return $this->db->affected_rows();
		}
		/**
 		 * @name		authenticate
 		 * 
		 * @desc		Return TRUE/FALSE on whether an email/password (unhashed) pair exist.
		 *
		*/
		public function authenticate( $email, $password ) 
		{
			$auth = $this->db->select('email, password, salt')->from('users')->where('email', $email)->get();
			# Look in the database for a user with this email, and retrieve the email, password and salt.
			
			if ( $auth->num_rows ) 
			{
				# If we found a user with this email
				$user = $auth->row();
				# Grab the user details
				
				$password = sha1( $user->salt . $password );
				# Convert the inputted password into the stored format
				
				return ( $password === $user->password ? $user : false ); 
				# Check if the passwords match and return the result.
			}
			
			return false;
			# Didn't find the email in the db, return false.
		}
		/**
 		 * @name		new_password
 		 * 
		 * @desc		Create a random new password for an account, and return the value.
		 *
		*/
		public function new_password( $email ) 
		{
			$this->load->helper('string');
			# Load the string helper
			$password = random_string('alnum', 20);
			$user = $this->users->get(array('email' => $email));
			
			$new = array();
			$new['password'] = sha1( $user->salt . $password );
			
			$this->db->where('id', $user->id)->update('users', $new);
			
			return $password;
		}
		
		/* --------------------------------------------------------------------------
			Checker functions
		   -------------------------------------------------------------------------*/
		/**
 		 * @name		verified
 		 * 
		 * @desc		Returns TRUE/FALSE if the account with the specified email is verified.
		 *
		*/
		public function verified( $email ) 
		{
			return (bool)  $this->db->select('id')->from('users')->where('email', $email)->where('verified', 1)->get()->row();
		}
		/**
 		 * @name		check_unique
 		 * 
		 * @desc		Returns TRUE/FALSE on uniqueness. Specify the field, value, and id to exclude (not written yet)
		 *
		*/
		public function check_unique( $field, $value, $id = null ) 
		{
			return (bool) ! $this->db->select('id')->from('users')->where($field, $value)->get()->row();
		}
	}
	
	/* End of file users_model.php */
	/* Location: application/models/users_model.php */
	