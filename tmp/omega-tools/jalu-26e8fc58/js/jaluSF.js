(function ($) {
    Drupal.behaviors.jaluSuperFish = {
        attach: function(context, settings) {
            $('.sf-menu ul', context).supersubs({
                minWidth:    12, // min sub-menu width, em
                maxWidth:    27, // max sub-menu width, em
                extraWidth:  1,
            }).superfish({
                hoverClass: 'sfHover',
                speed:       250,   // ms, cref jquery animate()
                delay:       0,   // mouseout delay, ms
                animation:   {opacity:'show',height:'show'},
                autoArrows:  true,
                dropShadows: false,
                disableHI:   true,
                dropShadows: false, /* Needed for IE */
            }).supposition();
        }
    };
		
		
		$(window).load(function() {
	 // Create the dropdown base
$("<select />").appendTo("#block-system-main-menu .block-inner .content");

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

$("#block-system-main-menu .block-inner .content select").change(function() {
  window.location = $(this).find("option:selected").val();  
});

});
		
})(jQuery);


