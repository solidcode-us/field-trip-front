$(document).ready(function() {      
   $('.carousel').carousel('pause');

/* For Photos */
	$('.open-exp-btn').click(function() {
		$(".list_exp").hide();
		$(".sec-right .user-profile-navs").hide();
		$(".open_exp").show("slide", { direction: "right" }, 500);
	});
	$('.close-exp-btn').live('click', function() {
		$(".open_exp, .open_user").hide();
		$(".list_exp, .list_user").show("slide", { direction: "left" }, 500);
		$(".sec-right .user-profile-navs").show("slide", { direction: "left" }, 500);
	});

	$('.edit-exp-btn').click(function() {
		$(".open_exp").hide();
		$(".edit_exp").show("slide", { direction: "right" }, 500);
	});
	$('.close-edit-exp-btn').click(function() {
		$(".edit_exp").hide();
		$(".open_exp").show("slide", { direction: "left" }, 500);
	});


	$('.add-exp-btn').click(function() {
		$(".list_exp, .list_user").hide();
		$(".sec-right .user-profile-navs").hide();
		$(".add_exp").show("slide", { direction: "right" }, 500);
	});
	$('.close-add-exp-btn').live('click', function() {
		$(".add_exp").hide();
		$(".list_exp, .list_user").show("slide", { direction: "left" }, 500);
		$(".sec-right .user-profile-navs").show("slide", { direction: "left" }, 500);
	});

/* For CONNECTIONS */
    $('.connection').on('change', function() {

    	 
      if ($(this).find(":selected").text() == 'Friend'){
        $(".partner").hide();
        $(".fam").hide();
        $(".anniv").hide();
      }
      if ($(this).find(":selected").text() == 'Colleague'){
        $(".partner").hide();
        $(".fam").hide();
        $(".anniv").hide();
      }

      if ($(this).find(":selected").text() == 'Partner'){
        $(".fam").hide();
        $(".partner").show();
        $(".anniv").show();
      }
      if ($(this).find(":selected").text() == 'Family'){
        $(".partner").hide();
        $(".fam").show();
        $(".anniv").hide();
      }
    });
/* For CONNECTIONS END */



	$('.addthisPerson').click(function(){

		var name = $('#name').val();
	 
		var age_rang = $('#age_range').val();
		var email = $('#email').val();
		var phone= $('#phone').val();
		var connection_type= $('#connection_type').val();
		var sub_connection_type= $('.subconnection_type:visible').val();
 
	name = name.trim();
	var err =false;
	if(name=="" || name==null ) {
		$('#name').addClass("redborder");
		$('#error_name').show();
		err=true;
	}  else {
		$('#name').removeClass("redborder");
		$('#error_name').hide();
	}
	 
	if(email=="" || email==null ) {
	
		$('#email').addClass("redborder");
		$('#error_email').show();
		err=true;
	} else if(!checkemail(email)) {
	
		$('#email').addClass("redborder");
		$('#error_email').text('Please enter valid email address.').show();
		err=true;
	} else {
		
		$('#email').removeClass("redborder");
		$('#error_email').hide();
	}
	 
	if(err==false) {
		
		$.ajax({
			type: "post",
			url: '/user/send_invitation',
			data: {'name': name, 'age_rang': age_rang,   'email': email,'phone': phone, 'connection_type': connection_type,'sub_connection_type':sub_connection_type},
			dataType: 'json',
			success: function(response) {
				
				if (response.status == '1')
				{
					

					$('#msg').html('This person has been invited successfuly.').show().addClass('messageboxok').fadeTo(900, 1, function() {
					$('.left-nav').fadeOut("slow");
					$('.right-nav').fadeOut();
				});
				}
				if (response.status=="0")
				{
					$("#member_contact").find("#member_id").val(response.member_id);
					$("#welcomeUser").text('Welcome, '+response.name+'!');
					
				}
			},
			complete: function() {

				$('#name').val('');
	 
				$('#age_range').val('');
				$('#email').val('');
				$('#phone').val('');
				$('#connection_type').val('');
				$('.subconnection_type:visible').val('');
					$('#msg').html('').hide();

				$(".steps-block").hide();
				$(".step-2").fadeIn();
			}
		});
	}
	return false;
	})


	 $("#email").live('select blur', function() {             
           // $("#error_email").removeClass('errUser').addClass('messagebox').text('Checking...').fadeIn("slow"); 
            var email = $(this).val().trim();
			
			if(email=="" || email==null) {
				$("#error_email").fadeTo(200, 0.1, function() {
					$(this).removeClass('alert-success').addClass('errUser').html('Please enter email address.').addClass('messageboxerror').fadeTo(900, 1);
				});
				return false;
			}
			if(!checkemail(email)) {
				 
				$("#error_email").fadeTo(200, 0.1, function() {//start fading the messagebox
					$(this).removeClass('alert-success').addClass('errUser').html('Please enter valid email address.').addClass('messageboxerror').fadeTo(900, 1);
				});
				return false;
			}else{
				 $.ajax({
	                url: "/user/check_email_availability",
	                data: {'email': email},
	                type: 'POST',
	                success: function(response) {				
	                    if (response == '0') {
	                        $("#error_email").fadeTo(200, 0.1, function() { 
	                            $(this).removeClass('alert-success').addClass('errUser').html('This person is already in your connection.').addClass('messageboxerror').fadeTo(900, 1);
	                        });
	                    }else{
	                    	  $("#error_email").fadeOut(200);
	                    }
	                }
	            });
			}
	           
        });





});
 