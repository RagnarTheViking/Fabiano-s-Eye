<?php

/**
 * @param $time
 * @return string
 */
function set_time($time) {
    $newtime = explode(' ', $time);
    return $newtime[0] . 'T' . $newtime[1] . 'Z';
}