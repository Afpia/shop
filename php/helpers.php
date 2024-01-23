<?php

session_start();


function redirect(string $path)
{
    header(header:"Location:$path");
    die();
}

function mayBeHasError(string $fieldName)
{
    echo isset($_SESSION['validation']['$fieldName']) ? 'aria-invalid="true required"' : '';
}
function ErrorWarning(string $fieldName)
{
    if(empty($fieldName)){
    echo ($_SESSION['validation']['$fieldName']); 
}else{
    echo "";
}
}