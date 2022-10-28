<?php

class Item
{
    private $itemID;
    private $itemName;
    private $itemQty;
    private $itemPrice;
    private $itemDescription;

    /**
     * @param $itemID
     * @param $itemName
     * @param $itemQty
     * @param $itemPrice
     * @param $itemDescription
     */

    public function __construct($itemID, $itemName, $itemQty, $itemPrice, $itemDescription)
    {
        $this->itemID = $itemID;
        $this->itemName = $itemName;
        $this->itemQty = $itemQty;
        $this->itemPrice = $itemPrice;
        $this->itemDescription = $itemDescription;
    }

    /**
     * @return mixed
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * @param mixed $itemID
     */
    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
    }

    /**
     * @return mixed
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * @param mixed $itemName
     */
    public function setItemName($itemName)
    {
        $this->itemName = $itemName;
    }

    /**
     * @return mixed
     */
    public function getItemQty()
    {
        return $this->itemQty;
    }

    /**
     * @param mixed $itemQty
     */
    public function setItemQty($itemQty)
    {
        $this->itemQty = $itemQty;
    }

    /**
     * @return mixed
     */
    public function getItemPrice()
    {
        return $this->itemPrice;
    }

    /**
     * @param mixed $itemPrice
     */
    public function setItemPrice($itemPrice)
    {
        $this->itemPrice = $itemPrice;
    }

    /**
     * @return mixed
     */
    public function getItemDescription()
    {
        return $this->itemDescription;
    }

    /**
     * @param mixed $itemDescription
     */
    public function setItemDescription($itemDescription)
    {
        $this->itemDescription = $itemDescription;
    }
}