<?php

require_once __DIR__ . "./../model/Site.php";

interface SiteRepo
{
    public function setConnection(mysqli $connection);

    public function addSite(Site $site): bool;

    public function deleteSite($site): bool;

    public function updateSite(Site $site): bool;

    public function searchSite($site);

    public function getAllSite(): array;
}