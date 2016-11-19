$(function() {
  // constants
  var SHOW_CLASS = 'show',
      HIDE_CLASS = 'hide',
      ACTIVE_CLASS = 'active',
      NORMAL_CLASS = 'normal';
  
  $( '.tabs' ).on( 'click', 'li a', function(e){
    e.preventDefault();
    var $tab = $( this ),
         href = $tab.attr( 'href' );
  
     $( '.active' ).removeClass( ACTIVE_CLASS );
     $tab.removeClass( NORMAL_CLASS );
     $tab.addClass( ACTIVE_CLASS );
  
     $( '.show' )
        .removeClass( SHOW_CLASS )
        .addClass( HIDE_CLASS )
        .hide();
    
      $(href)
        .removeClass( HIDE_CLASS )
        .addClass( SHOW_CLASS )
        .hide()
        .fadeIn( 550 );
  });
});


$(document).ready(function() {

	$(".openhelp").click(function(){
	  $("#help").modal({backdrop: true});
	  $(".modal-backdrop").css("background-color", "transparent");
	});
	$('.opensession').on('click', function (e) {
	   $('.session').modal('show');
	});

	$("li.questionhelp").click(function() {
		$(this).find('i').toggleClass('fa-angle-down fa-angle-up');
		$(this).children('ul').toggle();
	});
});

// Get the modal
var modal = document.getElementById('modalhost');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



