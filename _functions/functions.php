<?php

/**
 * @param $string
 * @return string
 */
function str_secur($string)
{
    return trim(htmlspecialchars($string));
}

function getUserLanguage()
{
    if (isset($_GET['lang']) && !empty($_GET['lang'])) {

        $lang = str_secur(strtolower($_GET['lang']));
        $availableLanguage = ['en', 'fr'];

        return (in_array($lang, $availableLanguage)) ? $lang : DEFAULT_LANGUAGE;

    } else {

        if (isset($_SESSION['lang']) && !empty($_SESSION['lang'])) {
            return $_SESSION['lang'];
        } else {
            return DEFAULT_LANGUAGE;
        }
    }
}

function getPageLanguage($lang, $pages)
{
    foreach ($pages as $p) {
        $jsonString = file_get_contents('_lang/'.$lang.'/'.$p.'.json');
        $json = json_decode($jsonString);
        $dataPage[$p] = $json;
    }
    return (object)$dataPage;
}

