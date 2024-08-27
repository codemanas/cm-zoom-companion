<?php

namespace Codemanas\CmZoomCompanion;


defined( 'ABSPATH' ) || exit;


final class Bootstrap {
	private static ?Bootstrap $_instance = null;

	public static function get_instance(): ?Bootstrap {
		return ( self::$_instance == null ) ? self::$_instance = new self() : self::$_instance;
	}

	protected function __construct() {
		require_once CM_ZOOM_COMPANION_DIR_PATH . '/vendor/autoload.php';
		add_action ('plugins_loaded',[$this, 'load_modules']);
	}

	public function load_modules() {
		Speaker::get_instance();
	}


}

Bootstrap::get_instance();