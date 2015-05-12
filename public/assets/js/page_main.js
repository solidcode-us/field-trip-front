$(document).ready(function() {      
   $('.carousel').carousel('pause');

/* For Goals */
	$('.open-exp-btn').click(function() {
		$(".list_exp, .add_exp, .edit_exp").hide();
		$(".sec-right .user-profile-navs").hide();
		$(".open_exp").show("slide", { direction: "right" }, 300);
	});
	$('.close-exp-btn').click(function() {
		$(".open_exp").hide();
		$(".list_exp").show("slide", { direction: "left" }, 300);
		$(".sec-right .user-profile-navs").show("slide", { direction: "left" }, 300);
	});

	$('.edit-exp-btn').click(function() {
		$(".open_exp, .add_exp").hide();
		$(".edit_exp").show("slide", { direction: "right" }, 300);
	});
	$('.close-edit-exp-btn').click(function() {
		$(".edit_exp").hide();
		$(".open_exp").show("slide", { direction: "left" }, 300);
	});


	$('.add-exp-btn').click(function() {
		$(".list_exp, .list_user").hide();
		$(".sec-right .user-profile-navs").hide();
		$(".add_exp").show("slide", { direction: "right" }, 300);
	});
	$('.close-add-exp-btn').click(function() {
		$(".add_exp").hide();
		$(".list_exp, .list_user").show("slide", { direction: "left" }, 300);
		$(".sec-right .user-profile-navs").show("slide", { direction: "left" }, 300);
	});

/* For INBOX */
	$('.open-inbox-f').click(function() {
		$(".inbox, .user-page-header").hide();
		$(".view-inbox-f").show("slide", { direction: "right" }, 300);
	});
	$('.open-inbox-m').click(function() {
		$(".inbox, .user-page-header").hide();
		$(".view-inbox-m").show("slide", { direction: "right" }, 300);
	});

	$('.close-inbox').click(function() {
		$(".media-modal").hide();
		$(".inbox, .user-page-header").show("slide", { direction: "left" }, 300);
	});
	$('.inbox-list li').click(function() {
		  $(this).removeClass('unread');
	});

/* For SETTINGS */
	$('.open-interests').click(function() {
		$(".inbox, .user-page-header").hide();
		$(".view-interests").show("slide", { direction: "right" }, 300);
	});
	$('.open-info').click(function() {
		$(".inbox, .user-page-header").hide();
		$(".view-info").show("slide", { direction: "right" }, 300);
	});
	$('.open-password').click(function() {
		$(".inbox, .user-page-header").hide();
		$(".view-password").show("slide", { direction: "right" }, 300);
	});
	$('.open-membership').click(function() {
		$(".inbox, .user-page-header").hide();
		$(".view-membership").show("slide", { direction: "right" }, 300);
	});
	$('.open-payment').click(function() {
		$(".inbox, .user-page-header").hide();
		$(".view-payment").show("slide", { direction: "right" }, 300);
	});
	/* Adding a new payment method */
	$('.add-new-payment').click(function() {
		$(".view-payment, .inbox, .user-page-header").hide();
		$(".view-new-payment").show("slide", { direction: "right" }, 300);
	});
	$('.close-new-payment').click(function() {
		$(".view-new-payment").hide();
		$(".view-payment").show("slide", { direction: "left" }, 300);
	});
	/* Adding a new payment method END */

	$('.open-history').click(function() {
		$(".inbox, .user-page-header").hide();
		$(".view-history").show("slide", { direction: "right" }, 300);
	});

	$('.close-setting').click(function() {
		$(".media-modal").hide();
		$(".inbox, .user-page-header").show("slide", { direction: "left" }, 300);
	});



/* For CONNECTIONS */
    $('.connection').on('change', function() {
      if ( this.value == 'Friend'){
        $(".partner").hide();
        $(".fam").hide();
        $(".anniv").hide();
      }
      if ( this.value == 'Colleague'){
        $(".partner").hide();
        $(".fam").hide();
        $(".anniv").hide();
      }

      if ( this.value == 'Partner'){
        $(".fam").hide();
        $(".partner").show();
        $(".anniv").show();
      }
      if ( this.value == 'Family'){
        $(".partner").hide();
        $(".fam").show();
        $(".anniv").hide();
      }
    });
/* For CONNECTIONS END */

});