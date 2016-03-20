function resize_overlay_box() {
    var $width = jQuery('.hostess').width();
    jQuery(".overlay").css("width", $width);
    jQuery(".hostess").css("height", $width);
}


function center_name() {
    var $height = jQuery('.hostess').height();
    jQuery(".hostess .nev").css("top", $height/2-20);
}

jQuery(function(e) {
    resize_overlay_box();
    center_name();
});

jQuery(window).on('resize', function(){
      resize_overlay_box();
      center_name();
});