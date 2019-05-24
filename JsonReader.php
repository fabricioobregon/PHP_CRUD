<?php

$json = <<< JSON
{
    "John": {
        "status":"Wait"
    },
    "Jennifer": {
        "status":"Active"
    },
    "James": {
        "status":"Active",
        "age":56,
        "count":10,
        "progress":0.0029857,
        "bad":0
    }
}
JSON;

$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($json, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);

foreach ($jsonIterator as $key => $val) {
    if(is_array($val)) {
        echo "$key:\n";
    } else {
        echo "$key => $val\n";
    }
}