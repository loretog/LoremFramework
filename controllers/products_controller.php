<?php

	class Products_Controller extends Controller {

		public function _init() {}

		public function index() {
			$this->set( 'products', $this->query( "SELECT * FROM tbl_products" ) );
			$this->render( "typed/no-sidebar" );
		}
	}