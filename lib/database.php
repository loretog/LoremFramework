<?php

if( ! defined( 'ACCESS' ) ) die( 'INVALID DIRECT ACCESS' );

	class Database extends Mysqli {
		public function __construct() {
			@parent::__construct( DBHOST, DBUSER, DBPASS, DBNAME );			
			if ($this->connect_errno) {
    		die('Connect Error: ' . $this->connect_errno . " - " . $this->connect_error );
			}			
		}
	}