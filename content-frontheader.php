<?php
/**
 * The template used for displaying custom header for homepage
 *
 * @package understrap
 */
?>

<div class="wrapper home-header">
   <img src="http://hostess:8888/wp-content/themes/melodiak/img/banner.jpg">
    <div class="container preform-container">
        <div class="col-md-12">
            <div id="pre-form">
                <h5 class="preform-title">ÁRAJÁNLATKÉRÉS</h5>
                <form onSubmit="return process();">
                    <input type="text" placeholder="DÁTUM" field_class="datepicker_quote" name="datum" id="datum">
                    <div class="custom-dropdown">
                        <select placeholder="FIÚK ÉS LÁNYOK" name="nemek" id="nemek">
                              <option value="Fiúk és Lányok">Fiúk és Lányok</option>
                              <option value="Csak fiúk">Csak fiúk</option>
                              <option value="Csak lányok">Csak lányok</option>
                        </select>
                    </div>
                    <input type="text" placeholder="FŐ" name="szam" id="szam">
                    <input type="submit" id="submit" value="KÜLDÉS">
                </form>
            </div>
        </div>
    </div>
</div>