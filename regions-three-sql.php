<?php
# 生成 3 级行政区域的 sql
ini_set('memory_limit', '320M');
$data_file = file("region-data.csv");
$target_file = __DIR__ . '/sql/sql-three-' . date('YmdHis') . '.sql';
$allnum = count($data_file);
$sql_line = "INSERT INTO md_regions(name,p_code,code,grade) VALUES \n";
file_put_contents($target_file,$sql_line,FILE_APPEND);
for ($i = 1; $i < $allnum; $i++) {
    $new_array = explode(",", $data_file[$i]);
    $grade = trim($new_array[3]);

    if ($grade != 5 && $grade != 4) { # 生成 3 级行政区域
        $sql_line = "('" . trim($new_array[0])."','".trim($new_array[1])."','".trim($new_array[2])."','".trim($new_array[3])."'),\n";
        file_put_contents($target_file,$sql_line,FILE_APPEND);
        print_r($sql_line);
    }
}
