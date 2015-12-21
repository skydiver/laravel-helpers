<?php

    if(!function_exists('pr')) {
        function pr($array=array()) {
            $text = '<pre>'.print_r($array, true).'</pre>';
            return $text;
        }
    }

?>