<?php
/**
 *  代码 规范
 *  restful 接口开发以下六要素
 *  资源路径(URI)  		复数
 *  Http动词 	patch只返回更新部分的内容
 *  过滤信息
 *  状态码	
 *  错误处理
 *  返回结果(不能返回密码等数据)
 *  200
 *  204 删除
 *  400 错误参数
 *  403  A操作B
 *  401 未授权
 *  500
 */

$pdo = require __DIR__ . '/lib/db.php';
require __DIR__ . '/lib/ErrorCode.php';
require __DIR__ . '/lib/User.php';
require __DIR__ . '/lib/Article.php';

// $user = new User($pdo);
// print_r($user->register('admin4','123456'));

$article = new Aritcle($pdo);
// $res = $article->view(1);
// $res = $article->edit(3,'title','content_edit',3);
// $res = $article->create('tit','content_create',3);
// print_r($res);
// var_dump($article->delete(1,3));
print_r($article->getList(3,2,1));