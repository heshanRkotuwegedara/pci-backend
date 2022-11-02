<?php

require_once __DIR__ . "./../model/Item.php";

interface SiteBO
{
    public function addSite(Site $site): bool;

    public function deleteSite($id): bool;

    public function searchSite($id);

    public function updateSite(Item $site): bool;

    public function getAllSite();
}