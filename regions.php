<?php
ini_set('memory_limit', '320M');
$my_file=file("region-data.csv");
$allnum=count($my_file); 
for ($i=1;$i<$allnum;$i++){
    $myclass=explode(",",$myFile[$i]);
    $grade = trim($myclass[3]);
    if ($grade != 5) { # 生成4 级行政区域
#        $line = "('" . trim($myclass[0])."','".trim($myclass[1])."','".trim($myclass[2])."','".trim($myclass[3])."'),\n";
#        file_put_contents('regions.sql',$line,FILE_APPEND);
#        print_r($line);
    }
    if ($grade != 5 && $grade != 4) { # 生成3 级行政区域
        $json[trim($myclass[2])] = array(trim($myclass[0]),trim($myclass[1]),trim($myclass[3]));
#        file_put_contents('regions.sql',$line,FILE_APPEND);
#        print_r($line);
    }
}
#print_r($json);
$jsonData = json_encode($json,JSON_UNESCAPED_UNICODE);
var_dump($jsonData);
file_put_contents('regions.json',$jsonData);

