<?php
require_once __DIR__ . "./../model/Item.php";

interface ItemRepo
{

    public function setConnection(mysqli $connection);

    public function addItem(Item $item): bool;

    public function deleteItem($code): bool;

    public function updateItem(Item $item): bool;

    public function searchItem($code);

    public function getAllItems(): array;

}