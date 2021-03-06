<?php
// Copyright (C) 2020 TeemIp
//
//   This file is part of TeemIp.
//
//   TeemIp is free software; you can redistribute it and/or modify
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   TeemIp is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with TeemIp. If not, see <http://www.gnu.org/licenses/>

/**
 * @copyright   Copyright (C) 2020 TeemIp
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

/** @noinspection PhpUnhandledExceptionInspection */
SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'teemip-ipv6-mgmt/2.6.0',
	array(
		// Identification
		//
		'label' => 'IPv6 Management',
		'category' => 'business',
		
		// Setup
		//
		'dependencies' => array(
			'teemip-ip-mgmt/2.6.0',
		),
		'mandatory' => false,
		'visible' => true,
		
		// Components
		//
		'datamodel' => array(
			'model.teemip-ipv6-mgmt.php',
			'main.teemip-ipv6-mgmt.php',
		),
		'data.struct' => array(
			//'data.struct.IPAudit.xml',
		),
		'data.sample' => array(
			'data.sample.IPv6Block.xml',
			'data.sample.lnkIPv6BlockToLocation.xml',
			'data.sample.IPv6Subnet.xml',
			'data.sample.lnkIPv6SubnetToLocation.xml',
			'data.sample.IPv6Range.xml',
			'data.sample.IPv6Address.xml',
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
