<?php

require_once __DIR__ . "./../model/Item.php";

interface ItemBO
{
    public function addItem(Item $i): bool;

    public function deleteItem($code): bool;

    public function searchItem($code);

    public function updateItem(Item $i): bool;

    public function getAllItem(): array;
}