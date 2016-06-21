<?php
/* 
 * Copyright(c)2016 All rights reserved.
 * @Licenced  http://www.w3.org
 * @Author  allen
 * @Create on 2016-6-20 11:00:58
 * @Version 1.0
 */
//命名空间的使用 使用namespace去声明空间 定义一个函数、类、常量存在的空间
//声明空间必须放在脚本的第一行
namespace Myspace;

//var_dump("hello"); Fatal error: Cannot redeclare var_dump() 
function var_dump($var = NULL) {
	if (empty($var)) {
		phpinfo(1);
	} else {
		echo $var;
	}
}

header("Content-type:text/html;charset=utf-8");
//声明空间 再去调用函数 应当加上空间名 不加 则默认是当前空间
\Myspace\var_dump();
//使用根空间的函数
\var_dump("hello");