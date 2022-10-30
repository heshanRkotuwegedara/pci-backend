<?php

require_once __DIR__ . "./../../model/Site.php";
require_once __DIR__ . "./../../bo/SiteBO.php";

class SiteBOImpl implements SiteBO
{

    public function addSite(Site $site): bool
    {
        return false;
    }

    public function deleteSite($id): bool
    {
        return false;
    }

    public function searchSite($id)
    {
        // TODO: Implement searchSite() method.
    }

    public function updateSite(Item $site): bool
    {
        return false;
    }

    public function getAllSite(): array
    {
        return [];
    }
}