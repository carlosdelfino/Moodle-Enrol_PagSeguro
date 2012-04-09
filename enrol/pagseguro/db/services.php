<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * PagSeguro plugin external functions and service definitions.
 *
 * @package    enrol
 * @subpackage pagseguro
 * @author 2011 Jerome Mouneyrac
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$functions = array(

    // === enrol related functions ===
    'fullservice_enrol_pagseguro_autorize_users' => array(
        'classname'   => 'fullservice_enrol_pagseguro_external',
        'methodname'  => 'autorize_enrol_users',
        'classpath'   => 'enrol/pagseguro/externallib.php',
        'description' => 'Autorize enrol users',
        'capabilities'=> 'enrol/pagseguro:enrol',
        'type'        => 'write',
    ),
    
	'fullservice_enrol_pagseguro_unautorize_users' => array(
        'classname'   => 'fullservice_enrol_pagseguro_external',
        'methodname'  => 'unautorize_enrol_users',
        'classpath'   => 'enrol/pagseguro/externallib.php',
        'description' => 'Unautorize enrol users',
        'capabilities'=> 'enrol/pagseguro:enrol',
        'type'        => 'write',
),

);
