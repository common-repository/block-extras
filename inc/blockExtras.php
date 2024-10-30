<?php
defined( 'ABSPATH' ) || exit;

class blockExtras {
	public $version = 1.0;
	public $blockConfig = array(); // Configured block types and values from settings or default
	public $elementConfig = array(); // Configured block types and values from settings or default
	public $editableTypes = array(
		'margin'        => array(
			'type'         => 'RangeSlider',
			'attribute'    => 'margin',
			'vendorPrefix' => false,
			'className'    => 'm',
			'min'          => 0,
			'max'          => 10,
			'absoluteMin'  => 0,
			'absoluteMax'  => 100,
			'step'         => 10,
			'stepUnit'     => true,
			'allowUnit'    => true
		),
		'marginTop'     => array(
			'type'         => 'RangeSlider',
			'attribute'    => 'margin-top',
			'vendorPrefix' => false,
			'className'    => 'mt',
			'min'          => - 10,
			'max'          => 10,
			'absoluteMin'  => - 100,
			'absoluteMax'  => 100,
			'step'         => 10,
			'stepUnit'     => true,
			'allowUnit'    => true
		),
		'marginRight'   => array(
			'type'         => 'RangeSlider',
			'attribute'    => 'margin-right',
			'vendorPrefix' => false,
			'className'    => 'mr',
			'min'          => 0,
			'max'          => 10,
			'absoluteMin'  => - 100,
			'absoluteMax'  => 100,
			'step'         => 10,
			'stepUnit'     => true,
			'allowUnit'    => true
		),
		'marginBottom'  => array(
			'type'         => 'RangeSlider',
			'attribute'    => 'margin-bottom',
			'vendorPrefix' => false,
			'className'    => 'mb',
			'min'          => - 10,
			'max'          => 10,
			'absoluteMin'  => - 100,
			'absoluteMax'  => 100,
			'step'         => 10,
			'stepUnit'     => true,
			'allowUnit'    => true
		),
		'marginLeft'    => array(
			'type'         => 'RangeSlider',
			'attribute'    => 'margin-left',
			'vendorPrefix' => false,
			'className'    => 'ml',
			'min'          => 0,
			'max'          => 10,
			'absoluteMin'  => - 100,
			'absoluteMax'  => 100,
			'step'         => 10,
			'stepUnit'     => true,
			'allowUnit'    => true
		),
		'padding'       => array(
			'type'         => 'RangeSlider',
			'attribute'    => 'padding',
			'vendorPrefix' => false,
			'className'    => 'p',
			'min'          => 0,
			'max'          => 10,
			'absoluteMin'  => 0,
			'absoluteMax'  => 100,
			'step'         => 10,
			'stepUnit'     => true,
			'allowUnit'    => true
		),
		'paddingTop'    => array(
			'type'         => 'RangeSlider',
			'attribute'    => 'padding-top',
			'vendorPrefix' => false,
			'className'    => 'pt',
			'min'          => 0,
			'max'          => 10,
			'absoluteMin'  => 0,
			'absoluteMax'  => 100,
			'step'         => 10,
			'stepUnit'     => true,
			'allowUnit'    => true
		),
		'paddingRight'  => array(
			'type'         => 'RangeSlider',
			'attribute'    => 'padding-right',
			'vendorPrefix' => false,
			'className'    => 'pr',
			'min'          => 0,
			'max'          => 10,
			'absoluteMin'  => 0,
			'absoluteMax'  => 100,
			'step'         => 10,
			'stepUnit'     => true,
			'allowUnit'    => true
		),
		'paddingBottom' => array(
			'type'         => 'RangeSlider',
			'attribute'    => 'padding-bottom',
			'vendorPrefix' => false,
			'className'    => 'pb',
			'min'          => 0,
			'max'          => 10,
			'absoluteMin'  => 0,
			'absoluteMax'  => 100,
			'step'         => 10,
			'stepUnit'     => true,
			'allowUnit'    => true
		),
		'paddingLeft'   => array(
			'type'         => 'RangeSlider',
			'attribute'    => 'padding-left',
			'vendorPrefix' => false,
			'className'    => 'pl',
			'min'          => 0,
			'max'          => 10,
			'absoluteMin'  => 0,
			'absoluteMax'  => 100,
			'step'         => 10,
			'stepUnit'     => true,
			'allowUnit'    => true
		),
		'borderRadius'  => array(
			'type'         => 'RangeSlider',
			'attribute'    => 'border-radius',
			'vendorPrefix' => true,
			'className'    => 'br',
			'min'          => 0,
			'max'          => 20,
			'absoluteMin'  => 0,
			'absoluteMax'  => 100,
			'step'         => 5,
			'stepUnit'     => true,
			'allowUnit'    => true
		),
		'lineHeight'    => array(
			'type'         => 'RangeSlider',
			'attribute'    => 'line-height',
			'vendorPrefix' => false,
			'className'    => 'lh',
			'min'          => 10,
			'max'          => 40,
			'absoluteMin'  => 1,
			'absoluteMax'  => 100,
			'step'         => 0.05,
			'stepUnit'     => false,
			'allowUnit'    => false
		),
		'letterSpacing' => array(
			'type'         => 'RangeSlider',
			'attribute'    => 'letter-spacing',
			'vendorPrefix' => false,
			'className'    => 'ls',
			'min'          => - 10,
			'max'          => 10,
			'absoluteMin'  => - 50,
			'absoluteMax'  => 50,
			'step'         => 1,
			'stepUnit'     => true,
			'allowUnit'    => true
		)
	);
	public $help = array(
		'global-increment' => array(
			'Increment &amp; Unit',
			'An increment is the amount of the selected attribute applied at each level of the change made when editing the block. For example, an increment of 10 pixels, with a minimum of 0 and maximum of 10 means increments of 10px, 20px... all the way to 100px'
		),
		'global-min'       => array(
			'Minimum',
			'The lowest value this attribute can have across all blocks. This can be negative if the attribute is margin.'
		),
		'global-max'       => array( 'Maximum', 'The highest value this attribute can have across all blocks.' ),
		'min'              => array(
			'Minimum',
			'The lowest value this attribute can have across this blocks. This can be negative if the attribute is margin.'
		),
		'max'              => array( 'Maximum', 'The highest value this attribute can have across this blocks.' ),
		'default'          => array(
			'Default',
			'The default value for this attribute on this blocks. This should match your stylesheet\'s value'
		),
		'margin'           => array(
			'Margin',
			'The space outside of the block, can be negative to tighten spacing or create overlaps.'
		),
		'marginTop'        => array(
			'Margin Top',
			'The space outside the top of block, can be negative to tighten spacing or create overlaps.'
		),
		'marginRight'      => array(
			'Margin Top',
			'The space outside the right of block, can be negative to tighten spacing or create overlaps.'
		),
		'marginBottom'     => array(
			'Margin Bottom',
			'The space outside the bottom of block, can be negative to tighten spacing or create overlaps.'
		),
		'marginLeft'       => array(
			'Margin Left',
			'The space outside the left of block, can be negative to tighten spacing or create overlaps.'
		),
		'padding'          => array( 'Padding', 'The space inside of the block.' ),
		'paddingTop'       => array( 'Padding Top', 'The space inside the top of the block.' ),
		'paddingRight'     => array( 'Padding Right', 'The space inside the right the block.' ),
		'paddingBottom'    => array( 'Padding Bottom', 'The space inside the bottom of the block.' ),
		'paddingLeft'      => array( 'Padding Left', 'The space inside the left of the block.' ),
		'lineHeight'       => array(
			'Line height',
			'The height of individual lines. It\'s measured without units, where 1.0 is the default for a font and 2.0 is double line height.'
		),
		'letterSpacing'    => array(
			'Letter spacing',
			'The space between each letter.'
		),
		'borderRadius'     => array(
			'Border Radius',
			'The radius of the corners of the block. This will only be visible if the block has a defined background style.'
		),
	);
	public $pluginName = 'Block Extras';
	public $prefix = 'block-extras';

	public function __construct() {
		$this->pluginRoot = WP_PLUGIN_DIR . '/' . $this->prefix . '/';
		$this->pluginName = $this->translate( $this->pluginName );
		add_action( 'init', array( $this, 'init' ) );
	}

	public function init() {
		if ( is_admin() ) {
			global $pagenow;
			add_action( 'admin_notices', array( $this, 'checkPluginConfig' ) );
			if ( in_array( $pagenow, array(
					'post.php',
					'post-new.php'
				) ) || ( $pagenow == 'options-general.php' && isset( $_GET['page'] ) && $_GET['page'] == $this->prefix . '-admin-settings' ) ) {
				$this->setBlockConfig();
				$asset_file = include( $this->pluginRoot . 'build/index.asset.php' );
				if ( ! in_array( 'wp-editor', $asset_file['dependencies'] ) ) {
					$asset_file['dependencies'][] = 'wp-editor';
				}
				wp_enqueue_script( $this->prefix,
					BLOCK_EXTRAS_URI . 'build/index.js',
					$asset_file['dependencies'],
					$asset_file['version']
				);
				$this->setHelp();
				wp_localize_script( $this->prefix, 'blockExtras', array(
					'help'          => $this->help,
					'elementConfig' => $this->elementConfig,
					'blockConfig'   => $this->blockConfig,
				) );
				wp_enqueue_style( $this->prefix . '-style-admin',
					BLOCK_EXTRAS_URI . 'build/' . $this->prefix . '-admin.css', array(),
					filemtime( BLOCK_EXTRAS_PATH . 'build/' . $this->prefix . '-admin.css' ) );
				if ( ( $pagenow == 'options-general.php' && isset( $_GET['page'] ) && $_GET['page'] == $this->prefix . '-admin-settings' ) ) {
					wp_enqueue_script( $this->prefix . '-admin',
						BLOCK_EXTRAS_URI . 'build/' . $this->prefix . '-admin.js',
						array(),
						$this->version,
						true
					);
					wp_localize_script( $this->prefix . '-admin', 'blockExtrasSettings', array(
						'help'          => $this->help,
						'editableTypes' => $this->editableTypes
					) );
				}
			}
			new blockExtrasSettings( $this );
		}
		$showInlineStyles = true;
		if ( is_writable( BLOCK_EXTRAS_PATH . 'build/' . $this->prefix . '.css' ) || is_writable( BLOCK_EXTRAS_PATH . 'build/' ) ) {
			if ( ! is_readable( BLOCK_EXTRAS_PATH . 'build/' . $this->prefix . '.css' ) ) {
				$put = file_put_contents( BLOCK_EXTRAS_PATH . 'build/' . $this->prefix . '.css', $this->getCSS() );
				if ( $put ) {
					$showInlineStyles = false;
				}
			} else {
				$showInlineStyles = false;
			}
		}
		if ( $showInlineStyles ) {
			add_action( 'admin_head', array( $this, 'showStyles' ) );
		} else {
			wp_enqueue_style( $this->prefix . '-style', BLOCK_EXTRAS_URI . 'build/' . $this->prefix . '.css',
				array(), filemtime( BLOCK_EXTRAS_PATH . 'build/' . $this->prefix . '.css' ) );
		}
		wp_enqueue_style( $this->prefix . '-style', BLOCK_EXTRAS_URI . 'build/' . $this->prefix . '.css', array(),
			filemtime( BLOCK_EXTRAS_PATH . 'build/' . $this->prefix . '.css' ) );
	}

	public function checkPluginConfig() {
		global $pagenow;
		if ( $pagenow == 'plugins.php' || ( $pagenow == 'options-general.php' && isset( $_GET['page'] ) && $_GET['page'] == $this->prefix . '-admin-settings' ) ) {
			if ( ! is_writable( BLOCK_EXTRAS_PATH . 'build/' . $this->prefix . '.css' ) ) {
				add_settings_error(
					'icon_path',
					'error',
					$this->translate( 'CSS file not writable, inline styles will be used. Please change owner via' ) . ' <code>sudo chown ' . get_current_user() . ' ' . BLOCK_EXTRAS_PATH . 'build/' . $this->prefix . '.css</code>',
					'error'
				);
			}
		}
	}

	public function translate( $string, $tmp = '' ) {
		return __( $string, 'block-extras' );
	}

	public function setHelp() {
		foreach ( $this->help as $helpKey => $help ) {
			$help[0] = $this->translate( $help[0] );
			$help[1] = '<p>' . $this->translate( $help[1] ) . '</p>';
			if ( isset( $this->editableTypes[ $helpKey ] ) ) {
				$help[1] = '<code>' . $this->editableTypes[ $helpKey ]['attribute'] . ': $value !important;</code>' . $help[1];
			}
			$this->help[ $helpKey ] = $help;
		}
	}

	public function getElementConfig() {
		$options = get_option( $this->prefix );

		if ( is_array( $options ) && isset( $options['elementConfig'] ) && substr( $options['elementConfig'], 0,
				1 ) == '{' ) {
			$elementConfig = json_decode( $options['elementConfig'], true );
			foreach ( $elementConfig as $elementType => $element ) {
				$elementConfig[ $elementType ]['className'] = $this->editableTypes[ $elementType ]['className'];
			}
		} else {
			$elementConfig = $this->editableTypes;
		}

		return $elementConfig;
	}

	public function getDefaultBlockConfig() {
		$blockConfig = array();
		foreach ( $this->blockTypes as $block => $blockType ) {
			$blockConfig[ $block ] = array();
			foreach ( $this->getGroupedTypes( $blockType['allowedTypes'] ) as $group => $types ) {
				$blockConfig[ $block ][ $group ] = array();
				foreach ( $types as $type ) {
					$elementOptions = array( 'enabled' => true );
					if ( $type == 'lineHeight' ) {
						$elementOptions['default'] = 20;
					}
					$blockConfig[ $block ][ $group ][ $type ] = $this->getElement( $type, $elementOptions );
				}
			}
		}

		return $blockConfig;
	}

	public function getBlockConfig() {
		$options = get_option( $this->prefix );
		if ( is_array( $options ) && isset( $options['blockConfig'] ) && substr( $options['blockConfig'], 0,
				1 ) == '{' ) {
			$blockConfig = json_decode( $options['blockConfig'], true );
		} else {
			$blockConfig = $this->getDefaultBlockConfig();
		}

		return $blockConfig;
	}

	public function setBlockConfig() {
		$this->elementConfig = $this->getElementConfig();
		foreach ( $this->getBlockConfig() as $blockType => $groups ) {
			foreach ( $groups as $group => $elements ) {
				foreach ( $elements as $elementKey => $options ) {
					if ( ! is_array( $options ) ) {
						unset( $this->blockConfig[ $blockType ][ $group ][ $elementKey ] );
						$elementKey = $options;
						$options    = array();
					}
					$this->blockConfig[ $blockType ][ $group ][ $elementKey ] = $this->getElement( $elementKey,
						$options );
				}
			}
		}
		$tmp = '';
	}

	public function getGroupedTypes( $allowedTypes ) {
		$groupedTypes = array(
			'Margin'          => array(
				'margin',
				'marginTop',
				'marginRight',
				'marginBottom',
				'marginLeft',
			),
			'Padding'         => array(
				'padding',
				'paddingTop',
				'paddingRight',
				'paddingBottom',
				'paddingLeft',
			),
			'Font'            => array(
				'lineHeight',
				'letterSpacing'
			),
			'Rounded corners' => array(
				'borderRadius'
			)
		);
		foreach ( $groupedTypes as $group => $groupTypes ) {
			foreach ( $groupTypes as $typeKey => $type ) {
				if ( ! in_array( $type, $allowedTypes ) ) {
					unset( $groupTypes[ $typeKey ] );
				}
			}
			if ( count( $groupTypes ) == 0 ) {
				unset( $groupedTypes[ $group ] );
			} else {
				$groupedTypes[ $group ] = $groupTypes;
			}
		}

		return $groupedTypes;
	}

	public function getElement( $element, $options ) {
		if ( ! isset( $options['default'] ) ) {
			$options['default'] = 0;
		}
		if ( ! isset( $options['enabled'] ) ) {
			$options['enabled'] = true;
		}
		if ( ! isset( $options['min'] ) ) {
			$options['min'] = $this->elementConfig[ $element ]['min'];
		}
		if ( ! isset( $options['max'] ) ) {
			$options['max'] = $this->elementConfig[ $element ]['max'];
		}
		$options['step']     = $this->editableTypes[ $element ]['step'];
		$options['stepUnit'] = $this->editableTypes[ $element ]['stepUnit'];
		$options['type']     = $this->editableTypes[ $element ]['type'];

		return $options;
	}

	public function showStyles() {
		echo '<style>' . $this->getCSS() . '</style>';
	}

	public function getCSS( $elementConfig = array(), $blockConfig = array() ) {
		$css           = '';
		$elementsInUse = array();
		if ( count( $blockConfig ) == 0 ) {
			$blockConfig = $this->getBlockConfig();
		}
		if ( count( $elementConfig ) == 0 ) {
			$elementConfig = $this->getElementConfig();
		}

		foreach ( $blockConfig as $blockType => $groups ) {
			foreach ( $groups as $group => $elements ) {
				foreach ( $elements as $elementKey => $element ) {
					if ( $element['enabled'] ) {
						if ( ! isset( $elementsInUse[ $elementKey ] ) ) {
							$elementsInUse[ $elementKey ] = $element;
						} else {
							if ( $element['min'] < $elementsInUse[ $elementKey ]['min'] ) {
								$elementsInUse[ $elementKey ]['min'] = $element['min'];
							}
							if ( $element['max'] > $elementsInUse[ $elementKey ]['max'] ) {
								$elementsInUse[ $elementKey ]['max'] = $element['max'];
							}
						}
					}
				}
			}
		}

		foreach ( $elementsInUse as $elementKey => $element ) {
			$prefixes = array( 'webkit', 'ms', 'o', 'moz', 'webkit' );
			foreach ( range( $element['min'], $element['max'] ) as $number ) {
				$stepNumber = $this->editableTypes[ $elementKey ]['step'];
				$value      = $number * $stepNumber;
				$className  = $this->editableTypes[ $elementKey ]['className'] . '-' . ( $number < 0 ? 'n' : '' ) . abs( $number );
				$attribute  = $this->editableTypes[ $elementKey ]['attribute'];
				$value      .= ( $value != 0 && $this->editableTypes[ $elementKey ]['stepUnit'] ? 'px' : '' ) . '!important';
				$css        .= '.' . $className . '{';
				$css        .= $attribute . ':' . $value . ';';
				if ( $this->editableTypes[ $elementKey ]['vendorPrefix'] ) {
					foreach ( $prefixes as $prefix ) {
						$css .= '-' . $prefix . '-' . $attribute . ':' . $value . ';';
					}
				}
				$css .= '}';
			}
		}

		return $css;
	}

	public $blockTypes = array(
		// Common
		'core/paragraph' => array(
			'icon'         => '<path d="M11 5v7H9.5C7.6 12 6 10.4 6 8.5S7.6 5 9.5 5H11m8-2H9.5C6.5 3 4 5.5 4 8.5S6.5 14 9.5 14H11v7h2V5h2v16h2V5h2V3z"></path>',
			'allowedTypes' => array(
				'margin',
				'marginTop',
				'marginRight',
				'marginBottom',
				'marginLeft',
				'padding',
				'paddingTop',
				'paddingRight',
				'paddingBottom',
				'paddingLeft',
				'lineHeight',
				'letterSpacing'
			)
		),
		'core/image'     => array(
			'icon'         => '<path d="M0,0h24v24H0V0z" fill="none"></path><path d="m19 5v14h-14v-14h14m0-2h-14c-1.1 0-2 0.9-2 2v14c0 1.1 0.9 2 2 2h14c1.1 0 2-0.9 2-2v-14c0-1.1-0.9-2-2-2z"></path><path d="m14.14 11.86l-3 3.87-2.14-2.59-3 3.86h12l-3.86-5.14z"></path>',
			'allowedTypes' => array(
				'margin',
				'marginTop',
				'marginRight',
				'marginBottom',
				'marginLeft',
				'padding',
				'paddingTop',
				'paddingRight',
				'paddingBottom',
				'paddingLeft'
			)
		),
		'core/heading'   => array(
			'icon'         => '<path d="M12.5 4v5.2h-5V4H5v13h2.5v-5.2h5V17H15V4"></path>',
			'allowedTypes' => array(
				'margin',
				'marginTop',
				'marginRight',
				'marginBottom',
				'marginLeft',
				'padding',
				'paddingTop',
				'paddingRight',
				'paddingBottom',
				'paddingLeft',
				'lineHeight',
				'letterSpacing'
			)
		),
		'core/gallery'   => array(
			'icon'         => '<path fill="none" d="M0 0h24v24H0V0z"></path><g><path d="M20 4v12H8V4h12m0-2H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-8.5 9.67l1.69 2.26 2.48-3.1L19 15H9zM2 6v14c0 1.1.9 2 2 2h14v-2H4V6H2z"></path></g>',
			'allowedTypes' => array( 'marginTop', 'marginBottom' )
		),
		'core/list'      => array(
			'icon'         => '<g><path d="M9 19h12v-2H9v2zm0-6h12v-2H9v2zm0-8v2h12V5H9zm-4-.5c-.828 0-1.5.672-1.5 1.5S4.172 7.5 5 7.5 6.5 6.828 6.5 6 5.828 4.5 5 4.5zm0 6c-.828 0-1.5.672-1.5 1.5s.672 1.5 1.5 1.5 1.5-.672 1.5-1.5-.672-1.5-1.5-1.5zm0 6c-.828 0-1.5.672-1.5 1.5s.672 1.5 1.5 1.5 1.5-.672 1.5-1.5-.672-1.5-1.5-1.5z"></path></g>',
			'allowedTypes' => array(
				'margin',
				'marginTop',
				'marginRight',
				'marginBottom',
				'marginLeft',
				'padding',
				'paddingTop',
				'paddingRight',
				'paddingBottom',
				'paddingLeft'
			)
		),
		'core/quote'     => array(
			'icon'         => '<path fill="none" d="M0 0h24v24H0V0z"></path><path d="M18.62 18h-5.24l2-4H13V6h8v7.24L18.62 18zm-2-2h.76L19 12.76V8h-4v4h3.62l-2 4zm-8 2H3.38l2-4H3V6h8v7.24L8.62 18zm-2-2h.76L9 12.76V8H5v4h3.62l-2 4z"></path>',
			'allowedTypes' => array(
				'margin',
				'marginTop',
				'marginRight',
				'marginBottom',
				'marginLeft',
				'padding',
				'paddingTop',
				'paddingRight',
				'paddingBottom',
				'paddingLeft'
			)
		),
		// Formatting
		'core/table'     => array(
			'icon'         => '<path fill="none" d="M0 0h24v24H0V0z"></path><g><path d="M20 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 2v3H5V5h15zm-5 14h-5v-9h5v9zM5 10h3v9H5v-9zm12 9v-9h3v9h-3z"></path></g>',
			'allowedTypes' => array( 'marginTop', 'marginBottom' )
		),
		// Layout
		'core/group'     => array(
			'icon'         => '<path fill-rule="evenodd" clip-rule="evenodd" d="M9 8a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1h-1v3a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1v-4a1 1 0 0 1 1-1h1V8zm2 3h4V9h-4v2zm2 2H9v2h4v-2z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M2 4.732A2 2 0 1 1 4.732 2h14.536A2 2 0 1 1 22 4.732v14.536A2 2 0 1 1 19.268 22H4.732A2 2 0 1 1 2 19.268V4.732zM4.732 4h14.536c.175.304.428.557.732.732v14.536a2.01 2.01 0 0 0-.732.732H4.732A2.01 2.01 0 0 0 4 19.268V4.732A2.01 2.01 0 0 0 4.732 4z"></path>',
			'allowedTypes' => array(
				'margin',
				'marginTop',
				'marginRight',
				'marginBottom',
				'marginLeft',
				'padding',
				'paddingTop',
				'paddingRight',
				'paddingBottom',
				'paddingLeft',
				'borderRadius'
			)
		),
	);
}