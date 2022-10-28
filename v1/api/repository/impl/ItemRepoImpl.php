<?php

require_once __DIR__ . "./../../repository/ItemRepo.php";
require_once __DIR__ . "./../../model/Item.php";

class ItemRepoImpl implements ItemRepo
{
    private $connection;

    public function setConnection(mysqli $connection)
    {
        $this->connection = $connection;
    }

    public function addItem(Item $item): bool
    {
        return true;
    }

    public function deleteItem($code): bool
    {
        return true;
    }

    public function updateItem(Item $item): bool
    {
        return true;
    }

    public function searchItem($code)
    {
        // TODO: Implement searchItem() method.
    }

    public function getAllItems(): array
    {
        return array();
    }
}