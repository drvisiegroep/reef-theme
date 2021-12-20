<?php

//
// Geupdate als shortcode met opties voor link en plaatje
// Voorbeeld (alleen svg):  [wa_svg_icon icon=logo] 
// Voorbeeld (svg en link): [wa_svg_icon icon=logo link=https://www.websiteaanbieder.nl]
// Voorbeeld inline:  do_shortcode('[wa_svg_icon icon=shirt link=https://www.websiteaanbieder.nl]'); 
//
// !!! Vergeet niet het pad te controleren als de shortcode niet lijkt te werken !!!
//
// TODO: url check regex  
// TODO: pad als argument

// Throw this in your theme and include it in your functions.php file 

/* Helper function for fetching SVG icons
 *
 * @param  string $icon  Name of the SVG file in the icons directory
 * @return string        Inline SVG markup
 */

function wa_svg_icon ($atts) {

// No atts, no party
 if ( !$atts ) {
      return $atts;
  }

  if ( is_array($atts) ) {
    extract(shortcode_atts(array(
    'icon' => '',
    'link' => '',
     ), $atts));
  }

  // Error geven als we geen plaatje hebben.
  if(!isset($atts['icon'])) {
    return 'Icon error - Check Path or filename';
  }

  $path = get_stylesheet_directory() . '/assets/svg/' . $atts['icon'] . '.svg'; 

  // Checken of er een link aanwezig is, anders alleen het plaatje doorgeven.
  // Zonder check geeft  $atts['value'] een undefined array key error.
  if(isset($atts['link'])) {
    $args = [
      'css_class' => 'icon icon-' . $atts['icon'],
      'link' => $atts['link'],
    ];
  } else {
    $args = [
      'css_class' => 'icon icon-' . $atts['icon'],
    ];
  }

  return wp_get_svg( $path, $args );
  
}
add_shortcode('wa_svg_icon', 'wa_svg_icon');


/* Generic helper to modify the markup for a given path to an SVG
 *
 * @param  string $path  Absolute path to the SVG file
 * @param  array  $args  Args to modify attributes of the SVG
 * @return string        Inline SVG markup
 */
function wp_get_svg( $path = '', $args = [] ) {
    if ( ! $path ) {
        return ;
    }

    $defaults = [
        'role' => 'image',
        'css_class' => '',
        'link' => '',
    ];

    $args = wp_parse_args( $args, $defaults );

    $role_attr = $args['role'];
    $css_class = $args['css_class'];
    $url = $args['link'];
 
    if ( is_array( $css_class ) ) {
        $css_class = implode( ' ', $css_class );
    } 
    
    if ( file_exists( $path ) ) {
        $svg = file_get_contents( $path );
        $svg = preg_replace( '/(width|height)="[\d\.]+"/i', '', $svg );
        $svg = str_replace( '<svg ', '<svg class="' . esc_attr( $css_class ) . '" role="' . esc_attr( $role_attr ) . '" ', $svg );
    }

    // Als we een SVG en een link hebben moet er een link tag omheen, dat doen we hier. Zo niet, dan geven we alleen de svg door.
    if($url && $svg) {
        return '<a href="' . $url . '">' . $svg . '</a>';
    }

    return $svg;
}