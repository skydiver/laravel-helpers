<?php

    /**
     * Print a PHP array with formated HTML
     *
     * @param array       $array The PHP array to print
     *
     * @return void
     *
     */
    if(!function_exists('pr')) {

        function pr($array=[]) {
            print '<pre>'.print_r($array, true).'</pre>';
        }

    }

    /**
     * Print a PHP array with formated HTML and stop execution
     *
     * @param array       $array The PHP array to print
     *
     * @return void
     *
     */
    if(!function_exists('prd')) {

        function prd($array=[]) {
            print '<pre>'.print_r($array, true).'</pre>';
            die();
        }

    }

?>
