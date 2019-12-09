<?php

/**
 * @param $string
 * @return string
 */
function str_secur($string)
{
    return trim(htmlspecialchars($string));
}

