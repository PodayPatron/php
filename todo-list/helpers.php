<?php
/**
 * Esc html.
 *
 * @param  mixed $data
 * renders data
 */
function esc_html( $data ) {
	return htmlspecialchars( trim( $data ) );
}

/**
 * Ar
 * array output.
 */
function ar( $data ) {
	echo '<pre>';
	print_r( $data );
	echo '</pre>';
}
