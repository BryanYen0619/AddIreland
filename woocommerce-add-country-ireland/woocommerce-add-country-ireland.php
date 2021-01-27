<?php
/*
	Plugin Name: Woocommerce Add Country Republic of Ireland (IE)
	Plugin URI: http://www.livebricks.com
	Description: Plugin for Woocommerce Add a new country with Republic of Ireland (IE)
	Author: Bryan Yen
	Version: 1.0
	Author URI: http://www.livebricks.com
*/

add_filter( 'woocommerce_countries',  'handsome_bearded_guy_add_my_country' );
function handsome_bearded_guy_add_my_country( $countries ) {
  $new_countries = array(
	                    'IE'  => __( 'Republic of Ireland (IE)', 'woocommerce' ),
	                    );

	return array_merge( $countries, $new_countries );
}

add_filter( 'woocommerce_continents', 'handsome_bearded_guy_add_my_country_to_continents' );
function handsome_bearded_guy_add_my_country_to_continents( $continents ) {
	$continents['EU']['countries'][] = 'IE';
	return $continents;
}

?>

