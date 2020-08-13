<?php 
// defined('MOODLE_INTERNAL') || die();
require_once(__DIR__ . '/../../../config.php');
$url = new moodle_url('/admin/tool/paulmffrench/index.php');
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_pagelayout('report');
$PAGE->set_title('Hello to the paulmffrench plugin');
$PAGE->set_heading(get_string('pluginname', 'tool_paulmffrench'));
