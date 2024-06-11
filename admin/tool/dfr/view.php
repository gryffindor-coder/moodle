<?php

require_once('../../../config.php');
$cmid = required_param('id', PARAM_INT);
$cm = get_coursemodule_from_id('', $cmid, 0, false, MUST_EXIST);
$course = $DB->get_record('course', array('id' => $cm->course), '*', MUST_EXIST);

require_login(); //we dont want $course since the tool is admin and will be universal
$PAGE->set_url('/admin/tool/dfr/settings.php', array('id' => $cm->id));
$PAGE->set_title('Digital Forensic Readiness Tool');
$PAGE->set_heading(get_string('pluginname','local_dfr')); //check this
$PAGE->set_context(context_system::instance()); //not necessary since require login is called with a course or module
$PAGE->set_pagelayout('standard'); 
$OUTPUT->header;