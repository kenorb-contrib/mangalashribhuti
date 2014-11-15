(function ($) {
/*	
$(window).load(function() {
	 // Create the dropdown base
$("<select />").appendTo("#block-superfish-1 .block-inner .content");

// Create default option "Go to..."
$("<option />", {
   "selected": "selected",
   "value"   : "",
   "text"    : "Ir a..."
}).appendTo("#block-superfish-1 .block-inner  select");

// Populate dropdown with menu items
$("#block-superfish-1 .block-inner .content ul li a").each(function() {
 var el = $(this);
 $("<option />", {
     "value"   : el.attr("href"),
     "text"    : el.text()
 }).appendTo("#block-superfish-1 .block-inner .content select");
});	

$("#block-superfish-1 .block-inner .content select").change(function() {
  window.location = $(this).find("option:selected").val();
});

});*/



$(document).ready(function() {

      $('.field-name-field-faq-file a[href]').attr({
          target: "_blank", 
        });
	
    $(".field-slideshow").cycle({
      fx: 'scrollDown',
      speed: 2000,
      timeout: 20000
    });
    
});

}(jQuery)); 