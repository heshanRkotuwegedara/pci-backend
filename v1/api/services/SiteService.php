<?php

class SiteService
{
    private $siteBO;

    /**
     * @param $siteBO
     */
    public function __construct()
    {
        $this->siteBO = (new SiteBOImpl());
    }

    public function addSite(Site $site): bool
    {
        return $this->siteBO->addSite($site);
    }

    public function deleteSite($id): bool
    {
        return $this->siteBO->deleteSite($id);
    }

    public function updateSite(Site $site): bool
    {
        return $this->siteBO->updateSite($site);
    }

    public function searchSite($id)
    {
        return $this->siteBO->searchSite($id);
    }

    public function getAllSite(): array
    {
        return $this->siteBO->getAllSite();
    }
}