<?php

function filter_fulltranslate_before_footer() {
    global $PAGE;
    $PAGE->requires->js_call_amd('tool_translationmanager/translationmanager', 'init');
}