<?php

/**
 * Version metadata for the tool_dfr.
 *
 * @package   tool_dfr
 * @copyright 2024, Wian du Toit <dutoit.w@tuks.co.za>
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version = 2024042000;
$plugin->requires = 2023100400;
$plugin->component = 'tool_dfr';

$plugin->dependencies = [
    'mod_forum' => 2022042100,
    'mod_data' => 2022042100
];