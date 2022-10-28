<?php
require_once __DIR__ . "./../model/Item.php";

interface ItemRepo
{

    public function setConnection(mysqli $connection);

    public function addItem(Item $i): bool;

    public function deleteItem($code): bool;

    public function updateItem(Item $i): bool;

    public function searchItem($code);

    public function getAllItems(): array;

}