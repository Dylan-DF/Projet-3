<?php

declare(strict_types = 1);

function dump(...$vars)
{
    $origin = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS)[0];
    $from = "from: ".$origin["file"].":".$origin["line"];
    array_unshift($vars, $from);
    foreach($vars as $var){
        echo '<pre style="background-color:black;color:white;padding:16px;margin-bottom:12px;">';
        var_dump($var);
        echo "</pre>";
    }
}

function dd(...$vars)
{
    dump(...$vars);
    die;
}

function isLogged(): bool
{
    return isset($_SESSION["user"]);
}