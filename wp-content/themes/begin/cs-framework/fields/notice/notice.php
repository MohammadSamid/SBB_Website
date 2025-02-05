<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Field: Notice
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class CSFramework_Option_notice extends CSFramework_Options {

  public function __construct( $field, $value = '', $unique = '' ) {
    parent::__construct( $field, $value, $unique );
  }

  public function output() {

    echo apply_filters( 'cs_element_before', $this->element_before() );
    echo '<div class="cs-notice cs-'. esc_attr( $this->field['class'] ) .'">'. $this->field['content'] .'</div>';
    echo apply_filters( 'cs_element_after', $this->element_after() );
  }

}
