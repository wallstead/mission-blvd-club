<?php
/**
 * These functions are used to include partials into other templates.
 *
 * We can go the Salty Press way which uses WordPress functions like load_template
 * if everybody else hates this format.
 */

/**
 * Use to get a value given a key, mimick WP's `get_query_var`.
 *
 * @param array $args
 * @param string $key
 * @param [type] $default
 * @return value in args corresponding to key, or empty string if not set in args.
 */
function nsGetArg($args, $key, $default = '')
{
    if (isset($args[$key])) {
        return $args[$key];
    }

    return $default;
}

/**
 * Like WP's get_template_part but allows passing data in.
 *
 * Example usage: ns_get_template_part('partials/template', null, ['arg1' => 'test', 'arg2' => 'test2'])
 *
 * Access args using $args['arg1']
 *
 * @param string $slug The slug name for the generic template.
 * @param string $name The specialized template name.
 * @param array $args The arguments to be passed into the template.
 * @return void
 */
function nsGetTemplatePart($slug, $name = null, $args = array())
{
    if (isset($name) && $name !== 'none') $slug = "{$slug}-{$name}.php";
    else $slug = "{$slug}.php";
    $dir = get_template_directory();
    $file = "{$dir}/{$slug}";

    ob_start();
    $args = wp_parse_args($args);
    $slug = $dir = $name = null;
    require($file);
    echo ob_get_clean();
}

/**
 * Like WP's get_header, but allows passing data in.
 *
 * Mimicks:
 * https://developer.wordpress.org/reference/functions/get_header/
 *
 * @param string $name The specialized template name.
 * @param array $args The arguments to be passed into the header.
 * @return void
 */
function nsGetHeader($name = null, $args = array()) {
    do_action( 'get_header', $name );
    nsGetTemplatePart('header', $name, $args);
}
