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
        $response = $this->connection->query("INSERT INTO item(itemName,itemQty,itemPrice,itemDescription) VALUES('{$item->getItemName()}','{$item->getItemQty()}','{$item->getItemPrice()}','{$item->getItemDescription()}')");
        if ($response > 0 && $this->connection->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteItem($code): bool
    {
        return true;
    }

    public function updateItem(Item $item): bool
    {
        $response = $this->connection->query("UPDATE item SET itemName='{$item->getItemName()}',itemQty='{$item->getItemQty()}',itemPrice='{$item->getItemPrice()}',itemDescription='{$item->getItemDescription()}' WHERE itemID='{$item->getItemID()}'");
        if ($response > 0 && $this->connection->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function searchItem($code)
    {
        // TODO: Implement searchItem() method.
    }

    public function getAllItems(): array
    {
        $data = [];
        $resultSet = $this->connection->query("SELECT * FROM item");
        $i = 0;
        while ($row = $resultSet->fetch_assoc()) {
            $data[$i]['itemID'] = $row['itemID'];
            $data[$i]['itemName'] = $row['itemName'];
            $data[$i]['itemQty'] = $row['itemQty'];
            $data[$i]['itemPrice'] = $row['itemPrice'];
            $data[$i]['itemDescription'] = $row['itemDescription'];
            $i++;
        }

        return $data;
    }
}