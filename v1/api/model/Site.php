<?php

class Site
{
    private $siteId;
    private $siteName;
    private $siteLocation;
    private $projectBudet;

    /**
     * @param $siteId
     * @param $siteName
     * @param $siteLocation
     * @param $projectBudet
     */
    public function __construct($siteId, $siteName, $siteLocation, $projectBudet)
    {
        $this->siteId = $siteId;
        $this->siteName = $siteName;
        $this->siteLocation = $siteLocation;
        $this->projectBudet = $projectBudet;
    }

    /**
     * @return mixed
     */
    public function getSiteId()
    {
        return $this->siteId;
    }

    /**
     * @param mixed $siteId
     */
    public function setSiteId($siteId)
    {
        $this->siteId = $siteId;
    }

    /**
     * @return mixed
     */
    public function getSiteName()
    {
        return $this->siteName;
    }

    /**
     * @param mixed $siteName
     */
    public function setSiteName($siteName)
    {
        $this->siteName = $siteName;
    }

    /**
     * @return mixed
     */
    public function getSiteLocation()
    {
        return $this->siteLocation;
    }

    /**
     * @param mixed $siteLocation
     */
    public function setSiteLocation($siteLocation)
    {
        $this->siteLocation = $siteLocation;
    }

    /**
     * @return mixed
     */
    public function getProjectBudet()
    {
        return $this->projectBudet;
    }

    /**
     * @param mixed $projectBudet
     */
    public function setProjectBudet($projectBudet)
    {
        $this->projectBudet = $projectBudet;
    }

}