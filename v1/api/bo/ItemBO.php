<?php

require_once __DIR__ . "./../model/Item.php";

interface ItemBO
{
    public function addItem(Item $i);

    public function deleteItem($code);

    public function searchItem($code);

    public function updateItem(Item $i);

    public function getAllItem();
}