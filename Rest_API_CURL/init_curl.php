<?php 
$headers=[
 "User-Agent: Example REST API Clint",
 "Authorization: token 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",
];

$ch=curl_init();
curl_setopt_array($ch,[
CURLOPT_HTTPHEADER=>$headers,
CURLOPT_RETURNTRANSFER=>true,//i want to get the server respon 
]);
return $ch;

?>