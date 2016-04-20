<?php
/**
 * The template used for displaying custom header for homepage
 *
 * @package understrap
 */
?>

<div class="wrapper home-header">
   <img src="http://hostess:8888/wp-content/themes/melodiak/img/banner.jpg">
</div>
<div class="container preform-container">
        <div class="col-md-12">
            <div id="pre-form">
                <h5 class="preform-title">ÁRAJÁNLATKÉRÉS</h5>
                <form onSubmit="return process();">
                    <input type="text" placeholder="DÁTUM" field_class="datepicker_quote" name="datum" id="datum" onfocus="this.placeholder=''" onblur="this.placeholder='DÁTUM'">
                    <div class="custom-dropdown">
                        <input placeholder="FIÚK ÉS LÁNYOK" name="nemek" id="nemek">
                        <div class=input-group-btn>
                            <button type=button class=btn dropdown-toggle data-toggle=dropdown>
                                <span class=placehold>FIÚK ÉS LÁNYOK</span>
                                <span class=caret></span>
                            </button>
                            <ul class=dropdown-menu>
                                <li><a>FIÚK ÉS LÁNYOK</a></li>
                                <li><a>CSAK FIÚK</a></li>
                                <li><a>CSAK LÁNYOK</a></li>
                            </ul>
                        </div>
                    </div>
                    <input type="number" placeholder="FŐ" name="szam" id="szam" onfocus="this.placeholder=''" onblur="this.placeholder='FŐ'">
                    <input type="submit" id="submit" value="KÜLDÉS">
                </form>
            </div>
        </div>
    </div>