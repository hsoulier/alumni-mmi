<?php 

namespace App\Helpers;

class Text {
    /**
     * Trasnform Object to Array
     *
     * @param array $d
     * @return void
     */
    public static function objectToArray($d)
    {
        if (is_object($d)) {
            $d = get_object_vars($d);
        }

        if (is_array($d)) {
            return array_map(null, $d);
        } else {
            // Return array
            return $d;
        }
    }

    /**
     * Encode entiere array with UTF-8 encoding
     *
     * @param array $array
     * @return array
     */
    public static function utf8_string_array_encode(&$array)
    {
        $func = function (&$value, &$key) {
            if (is_string($value)) {
                $value = utf8_encode($value);
            }
            if (is_string($key)) {
                $key = utf8_encode($key);
            }
            if (is_array($value)) {
                Text::utf8_string_array_encode($value);
            }
        };
        array_walk($array, $func);
        return $array;
    }
}