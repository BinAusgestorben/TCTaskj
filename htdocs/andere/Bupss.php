<?php



$opts = [
    "http" => [
        "method" => "POST",
        "header" => "Content-Type: application/json",
        "content" =>
        '{"model": "qwen3:0.6b-q4_K_M", "prompt": "Summarize Nietzsche in 5 Words", "stream": false}',

    ],
];

$context = stream_context_create($opts);

$response = file_get_contents("http://localhost:11434/api/generate", false, $context);


$responseData = json_decode($response, true);

$responseText = $responseData['response'];

echo $responseText;