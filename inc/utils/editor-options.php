<?php
//
// Opties voor de Gütenberg editor
// https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/
//

function reef_editor_options() {
    
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
                'name'  => __( 'Blauw', 'reef-theme' ),
                'slug'  => 'blauw',
                'color'	=> '#0073aa',
            ),
            array(
                'name'  => __( 'Grijs', 'reef-theme' ),
                'slug'  => 'Grijs',
                'color' => '#23282d',
            ),
        ) );
}
?>
