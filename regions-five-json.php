<?php
# 生成 5 级行政区域的 json
ini_set('memory_limit', '320M');
$data_file = file("region-data.csv");
$target_file = __DIR__ . '/json/json-five-' . date('YmdHis') . '.json';
$allnum = count($data_file);
for ($i = 1; $i < $allnum; $i++) {
    $new_array = explode(",", $data_file[$i]);
    $grade = trim($new_array[3]);

    # 生成 5 级行政区域
    $json[trim($new_array[2])] = array(trim($new_array[0]),trim($new_array[1]),trim($new_array[3]));
}

$json_data = json_encode($json,JSON_UNESCAPED_UNICODE);
var_dump($json_data);
file_put_contents($target_file, $json_data);
