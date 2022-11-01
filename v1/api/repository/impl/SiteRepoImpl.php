<?php

require_once __DIR__ . './../../repository/SiteRepo.php';
require_once __DIR__ . './../../model/Site.php';

class SiteRepoImpl implements SiteRepo
{
    private $connection;

    public function setConnection(mysqli $connection)
    {
        $this->connection = $connection;
    }

    public function addSite(Site $site): bool
    {
        $response = $this->connection->query("INSERT INTO site(siteName,siteLocation,projectBudet) VALUES ('{$site->getSiteName()}','{$site->getSiteLocation()}','{$site->getProjectBudet()}')");
        if ($response > 0 && $this->connection->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
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
        $data = [];
        $resultSet = $this->connection->query("SELECT * FROM site");
        $i = 0;
        while ($row = $resultSet->fetch_assoc()) {
            $data[$i]['siteId'] = $row['siteID'];
            $data[$i]['siteName'] = $row['siteName'];
            $data[$i]['siteLocation'] = $row['siteLocation'];
            $data[$i]['projectBudet'] = $row['projectBudet'];
            $i++;
        }

        return $data;
    }
}