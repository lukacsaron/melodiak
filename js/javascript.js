function resize_overlay_box() {
    var $width = jQuery('.hostess').width();
    jQuery(".overlay").css("width", $width);
    jQuery(".fixed-overlay").css("width", $width);
    jQuery(".hostess").css("height", $width);
}

function resize_profile() {
    var $width = jQuery('.profile-img-container').width();
    jQuery(".profile-img-container").css("height", $width);
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
    var url="http://melodiak.flashbirdcreative.com/arajanlatkeres/#nemek=" + nemek + "&datum=" + datum + "&letszam=" + szam;
    location.href=url;
    return false;
}

function uploadimg() {
    jQuery("input[type=file]").change(function(ev) {
        jQuery(this).prev().addClass("browsed");
    });
}

jQuery(function(e) {
    jQuery( "#cmf-check-5, #cmf-check-6, #cmf-check-7" ).wrapAll( "<div class='nyelvvalaszto' />");
});

jQuery(function(e) {
    resize_profile();
});

jQuery(window).on('resize', function(){
      resize_overlay_box();
      center_name();
});

jQuery(window).on('resize', function(){
      resize_profile();
});

function catchform() {
    if (jQuery('body').hasClass('page-id-29')) {
        var hashParams = window.location.hash.substr(1).split('&'); // substr(1) to remove the `#`
        for(var i = 0; i < hashParams.length; i++){
            var p = hashParams[i].split('=');
            document.getElementById(p[0]).value = decodeURIComponent(p[1]);
        }
    }
}

// change form to dropdown
function nemvalaszto_ajanlatkeres() {
    // ajanlatkeres nemvalaszto
    if (jQuery('body').hasClass('page-id-29')) {    
        jQuery("#nemek").hide();
        var ertek = jQuery('#nemek').val();
        jQuery("<div class=input-group-btn><button type=button class=btn dropdown-toggle data-toggle=dropdown><span class=placehold>FIÚK ÉS LÁNYOK</span><span class=caret></span></button><ul class=dropdown-menu><li><a>FIÚK ÉS LÁNYOK</a></li><li><a>CSAK FIÚK</a></li><li><a>CSAK LÁNYOK</a></li></ul>").insertAfter("#nemek" );
        if (!ertek) {
        }
        else {
            jQuery('.placehold').text(ertek).addClass('white');
        }
        jQuery('.dropdown-menu li').click(function(e){
              e.preventDefault();
              var selected = jQuery(this).text();
              jQuery('#nemek').val(selected);
              jQuery('.placehold').text(selected).addClass('white');  
        });  
    }
    
    // ajanlatkeres home nemvalaszto
    if (jQuery('body').hasClass('page-id-41')) {    
        jQuery("#nemek").hide();
        jQuery('.dropdown-menu li').click(function(e){
              e.preventDefault();
              var selected = jQuery(this).text();
              jQuery('#nemek').val(selected);
              jQuery('.placehold').text(selected); 
        });  
    }
}
function iskolavalaszto() {
    // jelentkezes iskolavalaszto
    if (jQuery('body').hasClass('page-id-31')) {
        var ertek = jQuery('#vegzettseg').val();
        jQuery("#vegzettseg").hide();
        
        jQuery("<div class=input-group-btn><button type=button class=btn dropdown-toggle data-toggle=dropdown><span class=placehold>VÉGZETTSÉG</span><span class=caret></span></button><ul class=dropdown-menu><li><a>ÁLTALÁNOS</a></li><li><a>KÖZÉPISKOLA</a></li><li><a>EGYETEM</a></li></ul>").insertAfter("#vegzettseg" );
        
        if (!ertek) {
        }
        else {
            jQuery('.placehold').text(ertek).addClass('white');
        }
        
        jQuery('.dropdown-menu li').click(function(e){
            e.preventDefault();
            var selected = jQuery(this).text();
            jQuery('#vegzettseg').val(selected);
            jQuery('.placehold').text(selected).addClass('white');  
            }); 
    }
}

jQuery(function(e) {
    resize_overlay_box();
    center_name();
    datepick();
    uploadimg();
});

jQuery(function(e) {
    nemvalaszto_ajanlatkeres();
});

jQuery(function(e) {
    iskolavalaszto();
});


//

jQuery(function(e) {

jQuery("#testsuly").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        jQuery("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });

jQuery("#magassag").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        jQuery("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });

jQuery("#cipomeret").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        jQuery("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
    
    jQuery("#letszam").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        jQuery("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
    
});

jQuery(function(e) {
    catchform();
});


