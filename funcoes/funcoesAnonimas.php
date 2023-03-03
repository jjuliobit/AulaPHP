<?php

function teste($callback)
{
    // processo lento
    $callback();
}

teste(function() {
    echo "Terminou!<br>";
});



$fn = function($a)
{
    var_dump($a);
};

$fn("Oi");

?>