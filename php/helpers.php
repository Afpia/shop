<?php

session_start();

function rederict(string $path)
{
    header(header:"Location: $path");
    die();
}