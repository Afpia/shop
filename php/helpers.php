<?php

session_start();


function redirect(string $path)
{
    header(header:"Location:$path");
    die();
}

function mayBeHasError(string $fieldName)
{
    echo isset($_SESSION['validation']['$fieldName']) ? 'aria-invalid="true"' : '';
}
