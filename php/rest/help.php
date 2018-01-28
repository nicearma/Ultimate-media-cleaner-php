<?php
namespace UMC\rest;

function get_json(): array {
    $input = file_get_contents('php://input');
    return json_decode($input, true);
}
