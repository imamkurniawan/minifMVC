<?php
$data = ["code"=>401, "message"=>'Invalid API Key'];
Header('Content-type: application/json');
echo $json = json_encode($data);
?>
