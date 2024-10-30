<?php
defined( 'ABSPATH' ) || exit;

class blockExtrasSettings {
	private $options;
	private $elementConfig = array();

	public function __construct( $blockExtras ) {
		$this->blockExtras = $blockExtras;
		$this->prefix          = $prefix = $blockExtras->prefix;
		$this->editableTypes   = $blockExtras->editableTypes;
		$this->blockConfig     = $blockExtras->blockConfig;
		$this->blockTypes     = $blockExtras->blockTypes;
		$this->page            = $this->blockExtras->prefix . '-admin-settings';
		add_action( 'admin_menu', array( $this, 'addPluginPage' ) );
		add_action( 'admin_init', array( $this, 'pageInit' ) );
		add_filter( 'plugin_action_links_' . $this->prefix . '/' . $this->prefix . '.php', function ( $links ) use ( $prefix ) {
			$links[] = '<a href="' . admin_url( 'options-general.php?page=' . $prefix . '-admin-settings' ) . '">' . $this->translate( 'Settings') . '</a>';

			return $links;
		} );
	}

    public function translate($string, $tmp = '') {
	    return $this->blockExtras->translate($string, $tmp);
    }

	public function addPluginPage() {
		add_options_page(
			$this->blockExtras->pluginName . ' ' . $this->translate('settings'),
			$this->blockExtras->pluginName,
			'manage_options',
			$this->page,
			array( $this, 'showAdminPage' )
		);
	}

	public function getChecked( $block, $group = '', $type = '' ) {
		if ( isset( $this->blockConfig[ $block ] ) ) {
			if ( isset( $this->blockConfig[ $block ][ $group ] ) && isset( $this->blockConfig[ $block ][ $group ][ $type ] ) ) {
				return $this->blockConfig[ $block ][ $group ][ $type ]['enabled'];
			}
		}

		return false;
	}

	public function getSelected( $block ) {
		$selected = 0;
		if ( isset( $this->blockConfig[ $block ] ) ) {
			foreach ( $this->blockConfig[ $block ] as $group => $elements ) {
				foreach ( $elements as $elementType => $element ) {
					if ( isset( $element['enabled'] ) && $element['enabled'] ) {
						$selected ++;
					}
				}
			}
		}

		return $selected;
	}

	public function showAdminPage() {
		$this->options = get_option( $this->prefix );
		$html          = '<div class="wrap">';
		$html          .= '<h1>' . $this->translate( $this->blockExtras->pluginName . ' settings' ) . '</h1>';
		$html          .= '<form method="post" action="options.php" class="' . $this->prefix . '-form">';
		echo $html;
		settings_errors( $this->page );
		settings_fields( $this->prefix . '-option-group' );

		echo $this->getAllSettings();
		submit_button();
		echo '<div class="' . $this->prefix . '-help hidden"></div>';

		$html = '</form>';
		$html .= '</div>';
		echo $html;
	}

	public function helpIcon( $type ) {
		return '<a class="' . $this->prefix . '-help-icon dashicons dashicons-editor-help" data-type="' . $type . '"></a>';
	}

	public function getAllSettings() {
		$this->elementConfig = $this->blockExtras->elementConfig;

		$html      = '<div class="' . $this->prefix . '-tabs-wrapper">';
		$html      .= '<ul class="' . $this->prefix . '-tabs">';
		$html      .= '<li class="all"><a href="#all" data-group="all" class="selected"><svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" focusable="false"><path d="M6 9h-5c-0.553 0-1 0.447-1 1v5c0 0.553 0.447 1 1 1h5c0.553 0 1-0.447 1-1v-5c0-0.553-0.447-1-1-1zM5 14h-3v-3h3v3zM6 0h-5c-0.553 0-1 0.447-1 1v5c0 0.553 0.447 1 1 1h5c0.553 0 1-0.447 1-1v-5c0-0.553-0.447-1-1-1zM5 5h-3v-3h3v3zM15 9h-5c-0.553 0-1 0.447-1 1v5c0 0.553 0.447 1 1 1h5c0.553 0 1-0.447 1-1v-5c0-0.553-0.447-1-1-1zM14 14h-3v-3h3v3zM15 0h-5c-0.553 0-1 0.447-1 1v5c0 0.553 0.447 1 1 1h5c0.553 0 1-0.447 1-1v-5c0-0.553-0.447-1-1-1zM14 5h-3v-3h3v3z"></path></svg>';
		$html .= $this->translate('All blocks') . '</a></li>';
		$htmlPanes = '<div class="' . $this->prefix . '-tab-panes">';

		$htmlPanes .= '<div class="' . $this->prefix . '-group" data-group="all"><h3>' . $this->translate('All block settings') . '</h3>';
		$htmlPanes .= '<p>' . $this->translate('These are global settings that control the minimum and maximum amounts for each attribute across all block types.') . '</p>';
		foreach ( $this->blockExtras->getGroupedTypes( array_keys( $this->editableTypes ) ) as $group => $types ) {
			$htmlPanes .= '<h4><span>' . $this->translate($group) . '</span>';
            $htmlPanes .= '<label>' . $this->translate('Minimum') . $this->helpIcon( 'global-min' ) . '</label>';
            $htmlPanes .= '<label>' . $this->translate('Maximum') . $this->helpIcon( 'global-max' ) . '</label></h4>';
			$htmlPanes .= '<div class="' . $this->prefix . '-group-type" data-group="all-' . $group . '"">';
			foreach ( $types as $type ) {
				$min       = $this->editableTypes[ $type ]['absoluteMin'];
				$max       = $this->editableTypes[ $type ]['absoluteMax'];
				$htmlPanes .= '<div class="' . $this->prefix . '-group-element all" data-element-type="' . $type . '"><label>' . $this->getTypeTitle( $type ) . $this->helpIcon( $type ) . '</label>';

				$htmlPanes .= '<label><span>' . $this->translate('Minimum') . '</span>';
                $htmlPanes .= '<input name="elementConfig[' . $type . '][min]" class="min" type="number" name="min" min="' . $min . '" max="' . ($max - 1) . '" value="' . $this->elementConfig[ $type ]['min'] . '">';
                $htmlPanes .= '<span class="step-amount min">' . ($this->elementConfig[ $type ]['min'] != 0 ? round($this->elementConfig[ $type ]['min'] * $this->editableTypes[ $type ]['step'] , 2) . ($this->editableTypes[ $type ]['stepUnit'] ? 'px' : '') : '0') . '</span></label>';
                //( $number != 0 ? round( $number * $this->editableTypes[ $type ]['step'] , 2) . ($this->editableTypes[ $type ]['stepUnit'] ? 'px' : '')
				$htmlPanes .= '<label><span>' . $this->translate('Maximum') . '</span>';
                $htmlPanes .= '<input name="elementConfig[' . $type . '][max]" class="max" type="number" name="max" min="' . ($min + 1) . '" max="' . $max . '" value="' . $this->elementConfig[ $type ]['max'] . '">';
                $htmlPanes .= '<span class="step-amount max">' . ($this->elementConfig[ $type ]['max'] != 0 ? round($this->elementConfig[ $type ]['max'] * $this->editableTypes[ $type ]['step'] , 2) . ($this->editableTypes[ $type ]['stepUnit'] ? 'px' : '') : '0') . '</span></label>';

				$htmlPanes .= '</div>';
			}
			$htmlPanes .= '</div>';
		}
		$htmlPanes .= '</div>';

		foreach ( $this->blockTypes as $block => $blockType ) {
            $html      .= '<li><a href="#' . $this->getBlockTitle( $block ) . '" data-group="' . $block . '">' . $this->getBlockIcon( $block ) . $this->translate($this->getBlockTitle( $block )) . ' (<span>' . $this->getSelected( $block ) . '</span>)</a></li>';
            $htmlPanes .= '<div class="' . $this->prefix . '-group hidden" data-group="' . $block . '"><h3>' . $this->translate($this->getBlockTitle( $block )) . ' ' . $this->translate('block settings') . '</h3>';
            $htmlPanes .= '<p>' . $this->translate('Tick attributes to enable use for this block. Minimum and maximums are defined under all blocks.') . '</p>';
            $htmlPanes .= '<p>' . $this->translate('Default settings should match your theme\'s CSS defaults for each attribute.') . '</p>';
            foreach ( $this->blockExtras->getGroupedTypes( $blockType['allowedTypes'] ) as $group => $types ) {
                $htmlPanes .= '<h4><span>' . $group . '</span><label>' . $this->translate('Minimum') . $this->helpIcon( 'min' ) . '</label><label>' . $this->translate('Maximum') . $this->helpIcon( 'max' ) . '</label><label>Default' . $this->helpIcon( 'default' ) . '</label></h4>';
                $htmlPanes .= '<div class="' . $this->prefix . '-group-type" data-group="' . $block . '-' . $group . '"">';
                foreach ( $types as $type ) {
                    $enabled   = $this->getChecked( $block, $group, $type );
                    $htmlPanes .= '<div class="' . $this->prefix . '-group-element ' . ( $enabled ? ' selected' : '' ) . '" data-element-type="' . $type . '"><label><input name="blockType[' . $block . '][' . $type . '][enabled]" type="checkbox"' . ( $enabled ? ' checked' : '' ) . ' value="1">' . $this->getTypeTitle( $type ) . $this->helpIcon( $type ) . '</label>';
                    $htmlPanes .= '<label><span>' . $this->translate('Minimum') . '</span>' . $this->getSizeSelect( $block, $group, $type, 'min', $enabled ) . '</label>';
                    $htmlPanes .= '<label><span>' . $this->translate('Maximum') . '</span>'. $this->getSizeSelect( $block, $group, $type, 'max', $enabled ) . '</label>';
                    $htmlPanes .= '<label><span>' . $this->translate('Default') . '</span>' . $this->getSizeSelect( $block, $group, $type, 'default', $enabled ) . '</label>';
                    $htmlPanes .= '</div>';
                }
                $htmlPanes .= '</div>';
            }
            $htmlPanes .= '<p>' . $this->translate('Other attributes not shown are not available for this block type.') . '</p>';
            $htmlPanes .= '</div>';
		}
		$html      .= '</ul>';
		$htmlPanes .= '</div>';
		$htmlPanes .= '</div>';

		return $html . $htmlPanes;
	}

	public function getSizeSelect( $block, $group, $type, $var, $enabled = true ) {
		$html = '<select class="' . $var . '" name="blockType[' . $block . '][' . $type . '][' . $var . ']"' . (!$enabled ? ' disabled="disabled"' : '') . '>';
		$steps = array();
		if ($var == 'default') {
            $min = $this->blockConfig[ $block ][ $group ][ $type ]['min'];
            $max = $this->blockConfig[ $block ][ $group ][ $type ]['max'];
        } else {
            $min = $this->elementConfig[$type]['min'];
            $max = $this->elementConfig[$type]['max'];
        }
        if ($var == 'min') $max --;
        if ($var == 'max') $min ++;
		foreach ( range( $min, $max ) as $number ) {
			$steps[ $number ] = ( $number != 0 ? number_format($number * $this->editableTypes[ $type ]['step'] , ($this->editableTypes[ $type ]['stepUnit'] ? 0 : 2))  . ($this->editableTypes[ $type ]['stepUnit'] ? 'px' : '') : '0' );
		}
		foreach ( $steps as $step => $stepTitle ) {
			$html .= '<option value="' . $step . '"' . ( isset($this->blockConfig[ $block ][ $group ][ $type ][ $var ]) && $this->blockConfig[ $block ][ $group ][ $type ][ $var ] == $step ? ' selected="selected"' : '' ) . '>' . $stepTitle . '</option>';
		}
		$html .= '</select>';
        if (!$enabled) {
            $html .= '<input type="hidden" name="blockType[' . $block . '][' . $type . '][' . $var . ']" value="' . $this->blockConfig[ $block ][ $group ][ $type ][ $var ] . '">';
        }
		return $html;
	}

	public function getBlockIcon( $block ) {
		return '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" focusable="false">' . $this->blockTypes[ $block ]['icon'] . '</svg>';
	}

	public function getBlockTitle( $block ) {
		$title = explode( '/', $block );

		return ucfirst( $title[1] );
	}

	public function getTypeTitle( $type ) {
		return '<span class="' . $this->prefix . '-icon ' . $this->prefix . '-icon-' . $type . '"></span>' . $this->translate($this->camelToTitle( ucfirst( $type ) ));
	}

	public function camelToTitle( $camelStr ) {
		$intermediate = preg_replace( '/(?!^)([[:upper:]][[:lower:]]+)/',
			' $0',
			$camelStr );
		$titleStr     = preg_replace( '/(?!^)([[:lower:]])([[:upper:]])/',
			'$1 $2',
			$intermediate );

		return $titleStr;
	}

	public function pageInit() {
		register_setting(
			$this->prefix . '-option-group', // Option group
			$this->prefix, // Option name
			array( $this, 'sanitize' ) // Sanitize
		);
		add_settings_section(
			$this->prefix,
			$this->translate( $this->blockExtras->pluginName . ' settings' ), // Title
			array( $this, 'getSectionInfo' ), // Callback
			$this->page // Page
		);
		add_settings_field(
			'settings',
            $this->translate('All settings'),
			array( $this, 'getAllSettings' ),
			$this->page,
			$this->prefix
		);
	}

	public function sanitize( $input ) {
		$blockConfig = $elementConfig = array();
		foreach ( $this->blockTypes as $block => $blockType ) {
			$blockConfig[ $block ] = array();
            foreach ( $this->blockExtras->getGroupedTypes( $blockType['allowedTypes'] ) as $group => $types ) {
                $blockConfig[ $block ][ $group ] = array();
                foreach ( $types as $type ) {
                    $blockConfig[ $block ][ $group ][ $type ]         = array(
                        'enabled' => ( isset( $_POST['blockType'][ $block ][ $type ]['enabled'] ) ),
                        'min' => (int) $_POST['blockType'][ $block ][ $type ]['min'],
                        'max' => (int) $_POST['blockType'][ $block ][ $type ]['max'],
                        'default' => (int) $_POST['blockType'][ $block ][ $type ]['default']
                    );
                }
            }
		}
		foreach ( $_POST['elementConfig'] as $elementType => $element ) {
			$element['min']     = (int) $element['min'];
			$element['max']     = (int) $element['max'];
			$elementConfig[ $elementType ] = $element;
		}
		if ( is_writable( BLOCK_EXTRAS_PATH . 'build/' . $this->prefix . '.css' ) ) {
			$css = $this->blockExtras->getCSS( $elementConfig, $blockConfig );
			if ( strlen( $css ) > 0 ) {
				file_put_contents( BLOCK_EXTRAS_PATH . '/build/' . $this->prefix . '.css', $css );
			}
		}
		$new_input = array(
			'blockConfig'   => json_encode( $blockConfig ),
			'elementConfig' => json_encode( $elementConfig )
		);

		return $new_input;
	}
}