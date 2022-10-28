<?php

require_once __DIR__ . "./../bo/impl/ItemBOImpl.php";

class ItemService
{
    private $itemBO;

    /**
     * @param $itemBO
     */
    public function __construct()
    {
        $this->itemBO = (new ItemBOImpl());
    }

    public function addItem(Item $item): bool
    {
        return $this->itemBO->addItem($item);
    }

    public function deleteItem($code): bool
    {
        return $this->itemBO->deleteItem($code);
    }

    public function updateItem(Item $item): bool
    {
        return $this->itemBO->updateItem($item);
    }

    public function searchItem($code)
    {
        return $this->itemBO->searchItem($code);
    }

    public function getAllItems(): array
    {
        return $this->itemBO->getAllItem();
    }
}