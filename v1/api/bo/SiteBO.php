<?php

require_once __DIR__ . "./../model/Site.php";

interface SiteBO
{
    public function addSite(Site $site): bool;

    public function deleteSite($id): bool;

    public function searchSite($id);

    public function updateSite(Site $site): bool;

    public function getAllSite();
}