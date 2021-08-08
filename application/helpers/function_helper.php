<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

    if (!function_exists('check_status')) {
        function check_status($status)
        {
            if ($status == 0) {
                return "Inactive";
            } else {
                return "Active";
            }
        }
    }

    if (!function_exists('check_type')) {
        function check_type($type)
        {
            if ($type == 0) {
                return "Normal";
            } else {
                return "Featured";
            }
        }
    }    

?>