<?php
function getProductFromLines($file) {
    return file($file);
}

function getProductObjFromId($id, $name) {
    return new \Facade\ProductReader\v1\Product($id, $name);
}

function getProductNameFromLine($file) {
    $items = split("-", $file);
    if (count($items) > 1) {
        return $items[1];
    }
    return '';
}

function getProductIdFromLine($file) {
    $items = split("-", $file);
    if (count($items) > 0) {
        return $items[0];
    }
    return '';
}

$lines =  getProductFromLines("goods.txt");

$arr = [];
foreach ($lines as $line) {
    $id = getProductIdFromLine($line);
    $name = getProductNameFromLine($line);
    $arr[] = getProductObjFromId($id, $name);
}

//可以看到 上方的代码和操作步骤的细节耦合太深，一旦这几个函数发生修改，调用的业务方也要跟着修改，在更复杂的情况之下，会有点让人遭不住