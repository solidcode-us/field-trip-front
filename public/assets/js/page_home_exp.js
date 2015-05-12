$(function() {

  // there's the gallery and the trash
  var $gallery = $( "#gallery" ),
	  $trash = $( "#trash" );

  // let the gallery items be draggable
  $( "li", $gallery ).draggable({
	cancel: "a.exp-icon", // clicking an icon won't initiate dragging
	revert: "invalid", // when not dropped, the item will revert back to its initial position
	containment: "document",
	helper: "clone",
	cursor: "move"
  });

  // let the trash be droppable, accepting the gallery items
  $trash.droppable({
	accept: "#gallery > li",
	activeClass: "dropbox-highlight",
	drop: function( event, ui ) {
	  deleteImage( ui.draggable );
	}
  });

  // let the gallery be droppable as well, accepting items from the trash
  $gallery.droppable({
	accept: "#trash li",
	activeClass: "well-box-in",
	drop: function( event, ui ) {
	  recycleImage( ui.draggable );
	}
  });

  // image deletion function
  var recycle_icon = "<a href='#' title='Remove this experience' class='btn btn-red exp-icon exp-btn-remove'>Remove</a>";
  function deleteImage( $item ) {
	$item.fadeOut(function() {
	  var $list = $( "ul", $trash ).length ?
		$( "ul", $trash ) :
		$( "<ul class='gallery exp-gallery'/>" ).appendTo( $trash );

	  $item.find( "a.exp-btn-add" ).remove();
	  $item.append( recycle_icon ).appendTo( $list ).fadeIn(function() { $item });
	});
  }

  // image recycle function
  var trash_icon = "<a href='#' title='Add this experience' class='btn btn-green exp-icon exp-btn-add'>Add This</a>";
  function recycleImage( $item ) {
	$item.fadeOut(function() {
	  $item
		.find( "a.exp-btn-remove" ).remove().end().css( "width", "25%").append( trash_icon )
		.find( "img" ).css( "height", "auto" ).end().appendTo( $gallery ).fadeIn();
	});
  }

  // resolve the icons behavior with event delegation
  $( "ul.gallery > li" ).click(function( event ) {
	var $item = $( this ),
	  $target = $( event.target );

	if ( $target.is( "a.exp-btn-add" ) ) {
	  deleteImage( $item );
	} else if ( $target.is( "a.exp-btn-remove" ) ) {
	  recycleImage( $item );
	}

	return false;
  });



/* Experience Details Slider */
	$('.todo-btn1').click(function() {
		$('#todo1').fadeIn();
	});
	$('.food-btn1').click(function() {
		$('#food1').fadeIn();
	});
	$('.food-btn2').click(function() {
		$('#food2').fadeIn();
	});
	
	$('.ride-btn1').click(function() {
		$('#ride1').fadeIn();
	});
	$('.ride-btn2').click(function() {
		$('#ride2').fadeIn();
	});
	$('.ride-btn3').click(function() {
		$('#ride3').fadeIn();
	});
/* Experience Details Slider END */

	$('#payexp-btn').click(function() {
		$('#payexp').fadeIn();
	});

	$('.exit').click(function() {
		$('.exp-detail-modal').fadeOut();
	});


	$('.exit').live('click',function() {
		$('.exp-detail-modal').fadeOut();
	});

	$('.exit').on('click',function() {
		$('.exp-detail-modal').fadeOut();
	});


});
