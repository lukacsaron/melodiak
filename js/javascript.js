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

function process() {
    var nemek = document.getElementById("nemek").value;
    var datum = document.getElementById("datum").value;
    var szam = document.getElementById("szam").value;
    var url="http://hostess:8888/arajanlatkeres/#nemek=" + nemek + "&datum=" + datum + "&letszam=" + szam;
    location.href=url;
    return false;
}

function uploadimg() {
    jQuery("input[type=file]").change(function(ev) {
        jQuery(this).prev().addClass("browsed");
    });
}

function catchform() {
    var hashParams = window.location.hash.substr(1).split('&'); // substr(1) to remove the `#`
    for(var i = 0; i < hashParams.length; i++){
        var p = hashParams[i].split('=');
        document.getElementById(p[0]).value = decodeURIComponent(p[1]);;
    }
}

jQuery(function(e) {
    jQuery( "#cmf-check-5, #cmf-check-6, #cmf-check-7" ).wrapAll( "<div class='nyelvvalaszto' />");
});

jQuery(function(e) {
    resize_overlay_box();
    center_name();
    datepick();
    uploadimg();
    catchform();
});

jQuery(window).on('resize', function(){
      resize_overlay_box();
      center_name();
});