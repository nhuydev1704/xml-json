<?php 
    $xmlString = file_get_contents('./sinhvien.xml');
    $xml = simplexml_load_string($xmlString);
    $json = json_encode($xml, JSON_UNESCAPED_UNICODE);
    echo ($json);
?>