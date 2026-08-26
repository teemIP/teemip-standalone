<?php
/*
 * @copyright   Copyright (C) 2010-2026 teemIP
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'teemip-welcome/3.4.0',
	array(
		// Identification
		//
		'label' => 'teemIP welcome menu',
		'category' => 'business',
		
		// Setup
		//
		'dependencies' => array(
			'itop-welcome-itil/3.2.0',
			'itop-config-mgmt/3.2.0',
		),
		'mandatory' => true,
		'visible' => false,

		// Components
		//
		'datamodel' => array(
			'model.teemip-welcome.php',
		),
		'webservice' => array(
		),
		'data.struct' => array(
		),
		'data.sample' => array(
		),
		
		// Documentation
		//
		'doc.manual_setup' => '',
		'doc.more_information' => '',
		
		// Default settings
		//
		'settings' => array(
		),
	)
);



