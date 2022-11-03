<?php

require_once __DIR__ . "./../../model/Site.php";
require_once __DIR__ . "./../../bo/SiteBO.php";
require_once __DIR__ . "./../../repository/impl/SiteRepoImpl.php";
require_once __DIR__ . "./../../db/DBConnection.php";

class SiteBOImpl implements SiteBO
{

    public function addSite(Site $site): bool
    {
        $siteRepo = new SiteRepoImpl();
        $connection = (new DBConnection())->getConnection();
        $siteRepo->setConnection($connection);
        $newSite = new Site($site->getSiteId(), $site->getSiteName(), $site->getSiteLocation(), $site->getProjectBudet());
        $res = $siteRepo->addSite($newSite);
        if ($res) {
            return true;
        } else {
            return $connection->error;
        }
    }

    public function deleteSite($id): bool
    {
        return false;
    }

    public function searchSite($id)
    {
        // TODO: Implement searchSite() method.
    }

    public function updateSite(Site $site): bool
    {
        $siteRepo = new SiteRepoImpl();
        $connection = (new DBConnection())->getConnection();
        $siteRepo->setConnection($connection);
        return $siteRepo->updateSite($site);
    }

    public function getAllSite()
    {
        $siteRepo = new SiteRepoImpl();
        $connection = (new DBConnection())->getConnection();
        $siteRepo->setConnection($connection);
        return $siteRepo->getAllSite();
    }
}