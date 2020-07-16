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
 * Customfield multiselect Type
 *
 * @package   customfield_multiselect
 * @copyright  2020 CALL Learning 2020 - Laurent David <laurent@call-learning.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();

$string['errordefaultvaluenotinlist'] = 'The default value "{$a}" must be one of the options from the list above.';
$string['errornotenoughoptions'] = 'Please provide at least two options, with each on a new line.';
$string['invalidoption'] = 'Invalid option selected';
$string['menuoptions'] = 'Menu options (one per line)';
$string['defaultvalue'] = 'Default value';
$string['defaultvalue_help'] = 'Default value as comma separated values';
$string['clear'] = 'Clear';
$string['pluginname'] = 'Multiselect menu';
$string['privacy:metadata'] = 'The Multiselect menu field type plugin doesn\'t store any personal data; it uses tables defined in core.';
$string['specificsettings'] = 'Multiselect menu field settings';
