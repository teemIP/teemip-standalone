<?php
/*
 * @copyright   Copyright (C) 2010-2026 teemIP
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

SetupWebPage::AddModule(
	__FILE__,
	'teemip-profiles-itil-adaptor/3.2.1',
	array(
		// Identification
		//
		'label' => 'teemIP adaptor for iTop ITIL Profiles',
		'category' => 'create_profiles',

		// Setup
		//
		'dependencies' => array(
			'itop-profiles-itil/3.2.0',
			'teemip-ip-mgmt/3.2.0',
		),
		'mandatory' => true,
		'visible' => false,

		// Components
		//
		'datamodel' => array(
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
