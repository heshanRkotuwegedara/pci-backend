<?php

class Site
{
    private $siteId;
    private $siteName;
    private $siteAddress;

    /**
     * @param $siteId
     * @param $siteName
     * @param $siteAddress
     */
    public function __construct($siteId, $siteName, $siteAddress)
    {
        $this->siteId = $siteId;
        $this->siteName = $siteName;
        $this->siteAddress = $siteAddress;
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
    public function getSiteAddress()
    {
        return $this->siteAddress;
    }

    /**
     * @param mixed $siteAddress
     */
    public function setSiteAddress($siteAddress)
    {
        $this->siteAddress = $siteAddress;
    }

}