<?php
# 语法糖 ??
# 旧版：isset($a) ? $a : '';
# 新版：$a ?? '';

$a = '1111';
$b = $a ?? '';
var_dump($a, $b);
