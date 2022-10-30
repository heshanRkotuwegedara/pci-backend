<?php

class SiteRepoImpl implements SiteRepo
{
    private $connection;

    public function setConnection(mysqli $connection)
    {
        $this->connection = $connection;
    }

    public function addSite(Site $site): bool
    {
        return false;
    }

    public function deleteSite($site): bool
    {
        return false;
    }

    public function updateSite(Site $site): bool
    {
        return false;
    }

    public function searchSite($site)
    {
        // TODO: Implement searchSite() method.
    }

    public function getAllSite(): array
    {
        return [];
    }
}