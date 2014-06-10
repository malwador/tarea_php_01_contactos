<?php
/**
 * Created by PhpStorm.
 * User: salvador
 * Date: 6/10/14
 * Time: 10:25 AM
 */

function escape($string) {
    return HTML_ENTITIES(trim($string), ENT_QUOTES, 'UTF-8');
}