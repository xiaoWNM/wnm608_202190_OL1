<?php


function print_p($v) {
    echo "<pre>",print_r($v),"</pre>";
}

function file_get_json($filename) {
   $file = file_get_contents($filename);
   return json_decode($file);
}

function file_save_json($filename, $data) {
    $file = file_put_contents($filename, json_encode($data));
}