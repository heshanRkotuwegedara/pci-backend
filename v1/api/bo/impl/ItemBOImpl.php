<?php

require_once __DIR__ . "./../ItemBO.php";
require_once __DIR__ . "./../../model/Item.php";
require_once __DIR__ . "./../../db/DBConnection.php";
require_once __DIR__ . "./../../repository/impl/ItemRepoImpl.php";

class ItemBOImpl implements ItemBO
{

    public function addItem(Item $item): bool
    {
        $connection = (new DBConnection())->getConnection();
        $itemRepo = new ItemRepoImpl();
        $itemRepo->setConnection($connection);
        return $itemRepo->addItem($item);
    }

    public function deleteItem($id): bool
    {
        return true;
    }

    public function searchItem($id)
    {
        // TODO: Implement searchItem() method.
    }

    public function updateItem(Item $item): bool
    {
        return true;
    }

    public function getAllItem(): array
    {
        $itemRepo = new ItemRepoImpl();
        $connection = (new DBConnection())->getConnection();
        $itemRepo->setConnection($connection);
        return $itemRepo->getAllItems();
    }
}