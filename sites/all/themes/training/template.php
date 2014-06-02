<?php

function training_preprocess_page(&$vars){
    //$vars['misc/jquery.js']['data'] = 'cccc.js';
//    global $javascript;
//    $arr = get_defined_vars();
//    print_r($arr);
//    drupal_exit();
}

//function hook_js_alter(&$javascript) {
//    print_r($javascript);
//    drupal_exit();
//  $javascript['misc/jquery.js']['data'] = drupal_get_path('module', 'jquery_update') . '/jqueryaaaaaa.js';
//}

function training_js_alter(&$javascript) {
    // Swap out jQuery to use an updated version of the library.
    $javascript['misc/jquery.js']['data'] = drupal_get_path('theme', 'training') . '/js/jquery-1.6.min.js';
}