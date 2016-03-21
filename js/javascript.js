function resize_overlay_box() {
    var $width = jQuery('.hostess').width();
    jQuery(".overlay").css("width", $width);
    jQuery(".fixed-overlay").css("width", $width);
    jQuery(".hostess").css("height", $width);
}


function center_name() {
    var $height = jQuery('.hostess').height();
    jQuery(".hostess .nev").css("top", $height/2-20);
}

function datepick() {
    jQuery('[field_class="datepicker"]').datepicker({
        format: 'yyyy/mm/dd',
        startDate: '-50y',
        autoclose: true,
        startView: 'decade'
});
jQuery('[field_class="datepicker_quote"]').datepicker({
        format: 'yyyy/mm/dd',
        startDate: '-50y',
        autoclose: true,
        startView: 'year'
});
}

jQuery(function(e) {
    resize_overlay_box();
    center_name();
    datepick();
});

jQuery(window).on('resize', function(){
      resize_overlay_box();
      center_name();
});