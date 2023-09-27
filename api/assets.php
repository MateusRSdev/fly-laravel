<?php

/**
 * Built assets aren't currently routeable via vercel-php
 * Manually route assets to be found
 */
$file = $_GET['assets'];
if (str_ends_with($file, '.css')) {
    header("Content-type: text/css; charset: UTF-8; Access-Control-Allow-Origin: *");
    return require '/var/task/user/public/build/assets/' . basename($file);
    // echo require __DIR__ . '/../assets/' . basename($file);
} else if (str_ends_with($file, '.js')) {
    header('Content-Type: application/javascript; charset: UTF-8; Access-Control-Allow-Origin: *');
    return require '/var/task/user/public/build/assets/' . basename($file);
    // echo require __DIR__ . '/../assets/' . basename($file);
}