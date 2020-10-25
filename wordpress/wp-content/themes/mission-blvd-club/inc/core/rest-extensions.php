<?php // Extend rest routes to for custom functionality

add_action( 'rest_api_init', function() {
    register_rest_field(['business'], 'meta', [
        'get_callback'    => 'get_acf_fields_for_api',
        'update_callback' => null,
        'schema'          => null,
    ]);
});

function get_acf_fields_for_api( $object ) {
    $data = get_fields( get_the_ID() );
    return $data ?: false;
}
