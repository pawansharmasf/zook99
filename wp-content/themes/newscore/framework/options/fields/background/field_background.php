<?php

// Exit if accessed directly
    if ( ! defined( 'ABSPATH' ) ) {
        exit;
    }

// Don't duplicate me!
    if ( ! class_exists( 'Radium_Options_background' ) ) {

        /**
         * Main Radium_Options_background class
         *
         * @since       2.2.1
         */
        class Radium_Options_background {

            /**
             * Field Constructor.
             * Required - must call the parent constructor, then assign field and value to vars, and obviously call the render field function
             *
             * @since       3.1.5
             * @access      public
             * @return      void
             */
            function __construct( $field = array(), $value = '', $parent ) {

                $this->parent = $parent;
                $this->field  = $field;
                $this->value  = $value;
                
                $this->field['name'] = $this->parent->args['opt_name'].'['.$this->field['id'] . ']';
            }

            /**
             * Field Render Function.
             * Takes the vars and outputs the HTML for the field in the settings
             *
             * @since       1.0.0
             * @access      public
             * @return      void
             */
            public function render() {

                $defaults = array(
                	'name_suffix' 			=> '',
                	'class' 				=> '',
                    'background-color'      => true,
                    'background-repeat'     => true,
                    'background-attachment' => true,
                    'background-position'   => true,
                    'background-image'      => true,
                    'background-gradient'   => false,
                    'background-clip'       => false,
                    'background-origin'     => false,
                    'background-size'       => true,
                    'preview_media'         => false,
                    'preview'               => true,
                    'preview_height'        => '200px',
                    'transparent'           => true,
                );

                $this->field = wp_parse_args( $this->field, $defaults );

                // No errors please
                $defaults = array(
                    'background-color'      => '',
                    'background-repeat'     => '',
                    'background-attachment' => '',
                    'background-position'   => '',
                    'background-image'      => '',
                    'background-clip'       => '',
                    'background-origin'     => '',
                    'background-size'       => '',
                    'media'                 => array(),
                );

                $this->value = wp_parse_args( $this->value, $defaults );

                $defaults = array(
                    'id'        => '',
                    'width'     => '',
                    'height'    => '',
                    'thumbnail' => '',
                );

                $this->value['media'] = wp_parse_args( $this->value['media'], $defaults );

                // select2 args
                if ( isset( $this->field['select2'] ) ) { // if there are any let's pass them to js
                    $select2_params = json_encode( $this->field['select2'] );
                    $select2_params = htmlspecialchars( $select2_params, ENT_QUOTES );

                    echo '<input type="hidden" class="select2_params" value="' . $select2_params . '">';
                }


                if ( $this->field['background-color'] === true ) {

                    if ( isset( $this->value['color'] ) && empty( $this->value['background-color'] ) ) {
                        $this->value['background-color'] = $this->value['color'];
                    }

                    echo '<input data-id="' . $this->field['id'] . '" name="' . $this->field['name'] . '[background-color]' . $this->field['name_suffix'] . '" id="' . $this->field['id'] . '-color" class="radium-opts-color radium-opts-background-input radium-opts-color-init ' . $this->field['class'] . '"  type="text" value="' . $this->value['background-color'] . '"  data-default-color="' . ( isset( $this->field['default']['background-color'] ) ? $this->field['default']['background-color'] : "" ) . '" />';
                    echo '<input type="hidden" class="radium-opts-saved-color" id="' . $this->field['id'] . '-saved-color' . '" value="">';

                    if ( ! isset( $this->field['transparent'] ) || $this->field['transparent'] !== false ) {
                        $tChecked = "";
                        if ( $this->value['background-color'] == "transparent" ) {
                            $tChecked = ' checked="checked"';
                        }
                        echo '<label for="' . $this->field['id'] . '-transparency" class="color-transparency-check"><input type="checkbox" class="checkbox color-transparency radium-opts-background-input ' . $this->field['class'] . '" id="' . $this->field['id'] . '-transparency" data-id="' . $this->field['id'] . '-color" value="1"' . $tChecked . '> ' . __( 'Transparent', 'radium' ) . '</label>';
                    }

                    if ( $this->field['background-repeat'] === true || $this->field['background-position'] === true || $this->field['background-attachment'] === true ) {
                        echo '<br />';
                    }
                }


                if ( $this->field['background-repeat'] === true ) {
                    $array = array(
                        'no-repeat' => 'No Repeat',
                        'repeat'    => 'Repeat All',
                        'repeat-x'  => 'Repeat Horizontally',
                        'repeat-y'  => 'Repeat Vertically',
                        'inherit'   => 'Inherit',
                    );
                    echo '<select id="' . $this->field['id'] . '-repeat-select" data-placeholder="' . __( 'Background Repeat', 'radium' ) . '" name="' . $this->field['name'] . '[background-repeat]' . $this->field['name_suffix'] . '" class="radium-opts-select-item radium-opts-background-input radium-opts-background-repeat ' . $this->field['class'] . '">';
                    echo '<option></option>';

                    foreach ( $array as $k => $v ) {
                        echo '<option value="' . $k . '"' . selected( $this->value['background-repeat'], $k, false ) . '>' . $v . '</option>';
                    }
                    echo '</select>';
                }

                if ( $this->field['background-clip'] === true ) {
                    $array = array(
                        'inherit'     => 'Inherit',
                        'border-box'  => 'Border Box',
                        'content-box' => 'Content Box',
                        'padding-box' => 'Padding Box',
                    );
                    echo '<select id="' . $this->field['id'] . '-repeat-select" data-placeholder="' . __( 'Background Clip', 'radium' ) . '" name="' . $this->field['name'] . '[background-clip]' . $this->field['name_suffix'] . '" class="radium-opts-select-item radium-opts-background-input radium-opts-background-clip ' . $this->field['class'] . '">';
                    echo '<option></option>';

                    foreach ( $array as $k => $v ) {
                        echo '<option value="' . $k . '"' . selected( $this->value['background-clip'], $k, false ) . '>' . $v . '</option>';
                    }
                    echo '</select>';
                }

                if ( $this->field['background-origin'] === true ) {
                    $array = array(
                        'inherit'     => 'Inherit',
                        'border-box'  => 'Border Box',
                        'content-box' => 'Content Box',
                        'padding-box' => 'Padding Box',
                    );
                    echo '<select id="' . $this->field['id'] . '-repeat-select" data-placeholder="' . __( 'Background Origin', 'radium' ) . '" name="' . $this->field['name'] . '[background-origin]' . $this->field['name_suffix'] . '" class="radium-opts-select-item radium-opts-background-input radium-opts-background-origin ' . $this->field['class'] . '">';
                    echo '<option></option>';

                    foreach ( $array as $k => $v ) {
                        echo '<option value="' . $k . '"' . selected( $this->value['background-origin'], $k, false ) . '>' . $v . '</option>';
                    }
                    echo '</select>';
                }

                if ( $this->field['background-size'] === true ) {
                    $array = array(
                        'inherit' => 'Inherit',
                        'cover'   => 'Cover',
                        'contain' => 'Contain',
                    );
                    echo '<select id="' . $this->field['id'] . '-repeat-select" data-placeholder="' . __( 'Background Size', 'radium' ) . '" name="' . $this->field['name'] . '[background-size]' . $this->field['name_suffix'] . '" class="radium-opts-select-item radium-opts-background-input radium-opts-background-size ' . $this->field['class'] . '">';
                    echo '<option></option>';

                    foreach ( $array as $k => $v ) {
                        echo '<option value="' . $k . '"' . selected( $this->value['background-size'], $k, false ) . '>' . $v . '</option>';
                    }
                    echo '</select>';
                }

                if ( $this->field['background-attachment'] === true ) {
                    $array = array(
                        'fixed'   => 'Fixed',
                        'scroll'  => 'Scroll',
                        'inherit' => 'Inherit',
                    );
                    echo '<select id="' . $this->field['id'] . '-attachment-select" data-placeholder="' . __( 'Background Attachment', 'radium' ) . '" name="' . $this->field['name'] . '[background-attachment]' . $this->field['name_suffix'] . '" class="radium-opts-select-item radium-opts-background-input radium-opts-background-attachment ' . $this->field['class'] . '">';
                    echo '<option></option>';
                    foreach ( $array as $k => $v ) {
                        echo '<option value="' . $k . '"' . selected( $this->value['background-attachment'], $k, false ) . '>' . $v . '</option>';
                    }
                    echo '</select>';
                }

                if ( $this->field['background-position'] === true ) {
                    $array = array(
                        'left top'      => 'Left Top',
                        'left center'   => 'Left center',
                        'left bottom'   => 'Left Bottom',
                        'center top'    => 'Center Top',
                        'center center' => 'Center Center',
                        'center bottom' => 'Center Bottom',
                        'right top'     => 'Right Top',
                        'right center'  => 'Right center',
                        'right bottom'  => 'Right Bottom',
                    );
                    echo '<select id="' . $this->field['id'] . '-position-select" data-placeholder="' . __( 'Background Position', 'radium' ) . '" name="' . $this->field['name'] . '[background-position]' . $this->field['name_suffix'] . '" class="radium-opts-select-item radium-opts-background-input radium-opts-background-position ' . $this->field['class'] . '">';
                    echo '<option></option>';

                    foreach ( $array as $k => $v ) {
                        echo '<option value="' . $k . '"' . selected( $this->value['background-position'], $k, false ) . '>' . $v . '</option>';
                    }
                    echo '</select>';
                }

                if ( $this->field['background-image'] === true ) {
                    echo '<br />';

                    if ( empty( $this->value ) && ! empty( $this->field['default'] ) ) { // If there are standard values and value is empty
                        if ( is_array( $this->field['default'] ) ) {
                            if ( ! empty( $this->field['default']['media']['id'] ) ) {
                                $this->value['media']['id'] = $this->field['default']['media']['id'];
                            } else if ( ! empty( $this->field['default']['id'] ) ) {
                                $this->value['media']['id'] = $this->field['default']['id'];
                            }

                            if ( ! empty( $this->field['default']['url'] ) ) {
                                $this->value['background-image'] = $this->field['default']['url'];
                            } else if ( ! empty( $this->field['default']['media']['url'] ) ) {
                                $this->value['background-image'] = $this->field['default']['media']['url'];
                            } else if ( ! empty( $this->field['default']['background-image'] ) ) {
                                $this->value['background-image'] = $this->field['default']['background-image'];
                            }
                        } else {
                            if ( is_numeric( $this->field['default'] ) ) { // Check if it's an attachment ID
                                $this->value['media']['id'] = $this->field['default'];
                            } else { // Must be a URL
                                $this->value['background-image'] = $this->field['default'];
                            }
                        }
                    }


                    if ( empty( $this->value['background-image'] ) && ! empty( $this->value['media']['id'] ) ) {
                        $img                             = wp_get_attachment_image_src( $this->value['media']['id'], 'full' );
                        $this->value['background-image'] = $img[0];
                        $this->value['media']['width']   = $img[1];
                        $this->value['media']['height']  = $img[2];
                    }

                    $hide = 'hide ';

                    if ( ( isset( $this->field['preview_media'] ) && $this->field['preview_media'] === false ) ) {
                        $this->field['class'] .= " noPreview";
                    }

                    if ( ( ! empty( $this->field['background-image'] ) && $this->field['background-image'] === true ) || isset( $this->field['preview'] ) && $this->field['preview'] === false ) {
                        $hide = '';
                    }

                    $placeholder = isset( $this->field['placeholder'] ) ? $this->field['placeholder'] : __( 'No media selected', 'radium' );

                    echo '<input placeholder="' . $placeholder . '" type="text" class="radium-opts-background-input ' . $hide . 'upload ' . $this->field['class'] . '" name="' . $this->field['name'] . '[background-image]' . $this->field['name_suffix'] . '" id="' . $this->parent->args['opt_name'] . '[' . $this->field['id'] . '][background-image]" value="' . $this->value['background-image'] . '" />';
                    echo '<input type="hidden" class="upload-id ' . $this->field['class'] . '" name="' . $this->field['name'] . '[media][id]' . $this->field['name_suffix'] . '" id="' . $this->parent->args['opt_name'] . '[' . $this->field['id'] . '][media][id]" value="' . $this->value['media']['id'] . '" />';
                    echo '<input type="hidden" class="upload-height" name="' . $this->field['name'] . '[media][height]' . $this->field['name_suffix'] . '" id="' . $this->parent->args['opt_name'] . '[' . $this->field['id'] . '][media][height]" value="' . $this->value['media']['height'] . '" />';
                    echo '<input type="hidden" class="upload-width" name="' . $this->field['name'] . '[media][width]' . $this->field['name_suffix'] . '" id="' . $this->parent->args['opt_name'] . '[' . $this->field['id'] . '][media][width]" value="' . $this->value['media']['width'] . '" />';
                    echo '<input type="hidden" class="upload-thumbnail" name="' . $this->field['name'] . '[media][thumbnail]' . $this->field['name_suffix'] . '" id="' . $this->parent->args['opt_name'] . '[' . $this->field['id'] . '][media][thumbnail]" value="' . $this->value['media']['thumbnail'] . '" />';

                    //Preview
                    $hide = '';

                    if ( ( isset( $this->field['preview_media'] ) && $this->field['preview_media'] === false ) || empty( $this->value['background-image'] ) ) {
                        $hide = 'hide ';
                    }

                    if ( empty( $this->value['media']['thumbnail'] ) && ! empty( $this->value['background-image'] ) ) { // Just in case
                        if ( ! empty( $this->value['media']['id'] ) ) {
                            $image                             = wp_get_attachment_image_src( $this->value['media']['id'], array(
                                    150,
                                    150
                                ) );
                            $this->value['media']['thumbnail'] = $image[0];
                        } else {
                            $this->value['media']['thumbnail'] = $this->value['background-image'];
                        }
                    }

                    echo '<div class="' . $hide . 'screenshot">';
                    echo '<a class="of-uploaded-image" href="' . $this->value['background-image'] . '" target="_blank">';
                    echo '<img class="radium-opts-option-image" id="image_' . $this->value['media']['id'] . '" src="' . $this->value['media']['thumbnail'] . '" alt="" target="_blank" rel="external" />';
                    echo '</a>';
                    echo '</div>';

                    //Upload controls DIV
                    echo '<div class="upload_button_div">';

                    //If the user has WP3.5+ show upload/remove button
                    echo '<span class="button radium-opts-background-upload" id="' . $this->field['id'] . '-media">' . __( 'Upload', 'radium' ) . '</span>';

                    $hide = '';
                    if ( empty( $this->value['background-image'] ) || $this->value['background-image'] == '' ) {
                        $hide = ' hide';
                    }

                    echo '<span class="button removeCSS radium-opts-remove-background' . $hide . '" id="reset_' . $this->field['id'] . '" rel="' . $this->field['id'] . '">' . __( 'Remove', 'radium' ) . '</span>';

                    echo '</div>';
                }


                /**
                 * Preview
                 * */
                if ( ! isset( $this->field['preview'] ) || $this->field['preview'] !== false ):

                    $css = $this->getCSS();
                    if ( empty( $css ) ) {
                        $css = "display:none;";
                    }
                    $css .= "height: " . $this->field['preview_height'] . ";";
                    echo '<p class="clear ' . $this->field['id'] . '_previewer background-preview" style="' . $css . '">&nbsp;</p>';

                endif;
            }

            /**
             * Enqueue Function.
             * If this field requires any scripts, or css define this function and register/enqueue the scripts/css
             *
             * @since       1.0.0
             * @access      public
             * @return      void
             */
            public function enqueue() {
                wp_enqueue_script(
                    'radium-opts-field-background-js',
                    $this->parent->url . 'fields/background/field_background.js',
                    array( 'jquery', 'wp-color-picker', 'select2-js', 'radium-opts-js' ),
                    time(),
                    true
                );

                wp_enqueue_style(
                    'radium-opts-field-background-css',
                    $this->parent->url . 'fields/background/field_background.css',
                    time(),
                    true
                );
            }

            public static function getCSS( $value = array() ) {

                $css = '';

                if ( ! empty( $value ) && is_array( $value ) ) {
                    foreach ( $value as $key => $value ) {
                        if ( ! empty( $value ) && $key != "media" ) {
                            if ( $key == "background-image" ) {
                                $css .= $key . ":url('" . $value . "');";
                            } else {
                                $css .= $key . ":" . $value . ";";
                            }
                        }
                    }
                }

                return $css;
            }

            public function output() {
                $style = $this->getCSS( $this->value );

                if ( ! empty( $style ) ) {

                    if ( ! empty( $this->field['output'] ) && is_array( $this->field['output'] ) ) {
                        $keys = implode( ",", $this->field['output'] );
                        $this->parent->outputCSS .= $keys . "{" . $style . '}';
                    }

                    if ( ! empty( $this->field['compiler'] ) && is_array( $this->field['compiler'] ) ) {
                        $keys = implode( ",", $this->field['compiler'] );
                        $this->parent->compilerCSS .= $keys . "{" . $style . '}';
                    }
                }
            }
        }
    }
