<?php

function dd($data)
{
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>'; 
}

function checkAge($age)
{
    
    if($age >= 21)
    {
        echo 'Get in ya old dog';
    }
    else
        echo 'Come back when you have some chest hair.';
}
