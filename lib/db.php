<?php 

// 连接数据库并返回数据库连接句柄
// pdo 属性设置

$pdo = new PDO('mysql:host=localhost;dbname=restful', 'root', '');
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,FALSE);
return $pdo;
