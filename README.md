# china-regions
中国行政区域， 可生成 json 和 sql 方便开发使用

# 数据来源 - 中华人民共和国国家统计局
http://www.stats.gov.cn/tjsj/tjbz/tjyqhdmhcxhfdm/

# 目录和文件说明
json 文件夹： 存放生成的行政区域 json 文件 , 命名方式为 json-级别-时间.json
sql 文件夹： 存放生成的行政区域 sql 文件 , 命名方式为 sql-级别-时间.sql ， 注意： 生成后不能直接导入数据库，需将最后面的 "," 改为 ";" 号后才可以导入

# 使用方法
php -f 要生成行政级别的php文件
比如：生成三级行政区的sql
执行： php -f regions-three-sql.php 
