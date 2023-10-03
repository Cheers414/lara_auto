<?php
require '../vendor/autoload.php';

// 類別先import進來
use LaraNcut\Hello\Lara;
use LaraNcut\Hello\Someone;

$lara = new Lara();
$vincent = new Someone('Vincent');

// 類別未先import進來
$mary = new \LaraNcut\Hello\Someone('Mary');
$john = new LaraNcut\Hello\Someone('John');
$hello = new LaraNcut\HelloWorld();

use LaraNcut\HelloWorld as World; // 類別另取別名
$world = new World();
