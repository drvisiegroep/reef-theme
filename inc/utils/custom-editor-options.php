<?php
//
// Custom | Editor Options 
//
// @package      reef-theme
// @author       Daniël R.
// @since        1.0.0
//
// Opties voor de Gütenberg editor
// https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/
//
// TODO: font sizes toevoegen aan de css.

    
    // Font size uitzetten
    add_theme_support( 'disable-custom-font-sizes' );

    // Kleuren uitzetten
    add_theme_support( 'disable-custom-colors' );
    
    // Voeg hier je eigen font-sizes toe
    add_theme_support( 'editor-font-sizes', array(
        array(
            'name'      => __( 'Small', 'reef-theme' ),
            'shortName' => __( 'S', 'reef-theme' ),
            'size'      => 14,
            'slug'      => 'small'
        ),
        array(
            'name'      => __( 'Normal', 'reef-theme' ),
            'shortName' => __( 'M', 'reef-theme' ),
            'size'      => 20,
            'slug'      => 'normal'
        ),
        array(
            'name'      => __( 'Large', 'reef-theme' ),
            'shortName' => __( 'L', 'reef-theme' ),
            'size'      => 24,
            'slug'      => 'large'
        ),
    ) );

    // Voeg hier je eigen kleuren toe
    add_theme_support( 'editor-color-palette', array(
            array(
                'name'  => __( 'Primary', 'reef-theme' ),
                'slug'  => 'primary',
                'color'	=> '#94C35A',
            ),
            array(
                'name'  => __( 'Primary-variation', 'reef-theme' ),
                'slug'  => 'primary-variation',
                'color'	=> '#5c911b',
            ),
            array(
                'name'  => __( 'Secondary', 'reef-theme' ),
                'slug'  => 'secondary',
                'color' => '#0073aa',
            ),
            array(
                'name'  => __( 'Secondary-variation', 'reef-theme' ),
                'slug'  => 'secondary-variation',
                'color' => '#0d3452',
            ),
            array(
                'name'  => __( 'Black', 'reef-theme' ),
                'slug'  => 'black-custom',
                'color'	=> '#000000',
            ),
            array(
                'name'  => __( 'White', 'reef-theme' ),
                'slug'  => 'white-custom',
                'color' => '#FFFFFF',
            ),
            array(
                'name'  => __( 'Grey', 'reef-theme' ),
                'slug'  => 'grey-custom',
                'color' => '#d5d2cd',
            ),
        ) );

?>
