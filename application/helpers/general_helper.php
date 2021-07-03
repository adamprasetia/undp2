<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function dd($s = '')
{
    echo "<pre>";
    var_dump($s);
    exit;
}