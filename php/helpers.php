<?php

session_start();


function redirect(string $path)
{
    header(header:"Location:$path");
    die();
}

function clearValidation()
{
    $_SESSION['validation'] = [];
}

function hasValidationError(string $fieldName):bool
{
    return isset($_SESSION['validation'][$fieldName]);
}

function addValidationError(string $fieldName, string $message)
{
    $_SESSION['validation'][$fieldName] = $message;
}

function mayBeHasError(string $fieldName)
{
    echo isset($_SESSION['validation'][$fieldName]) ? 'class="error-red" ' : '';
}

function ErrorWarning(string $fieldName)
{
    echo $_SESSION['validation'][$fieldName] ?? '';
}

function addOldValues(string $key, mixed $value)
{
    $_SESSION['old'][$key] = $value;
}

function old(string $key)
{
    return $_SESSION['old'][$key] ?? '';
}

function clearOldValues(string $key)
{
    return $_SESSION['old'] = [];
}