<?php namespace Craft;

/**
 * Detect wraps Mobile_Detect, a lightweight library for detecting mobile devices (including tablets)
 *
 * @author      Mats Mikkel Rummelhoff <http://mmikkel.no>
 * @package     Detect
 * @since       Craft 2.3
 * @copyright   Copyright (c) 2015, Mats Mikkel Rummelhoff
 * @license     http://opensource.org/licenses/mit-license.php MIT License
 * @link        https://github.com/mmikkel/Detect-Craft
 */

/**
 * Class DetectVariable
 * @package Craft
 */
class DetectVariable
{

    /*
    *   Returns true for any mobile device (including tablets!)
    *
    */
    /**
     * @return mixed
     */
    public function isMobile()
    {
        return craft()->detect->isMobile();
    }

    /*
    *   Returns true for tablets only
    *
    */
    /**
     * @return mixed
     */
    public function isTablet()
    {
        return craft()->detect->isTablet();
    }

    /*
    *   Returns true for phones only
    *
    */
    /**
     * @return bool
     */
    public function isPhone()
    {
        return $this->isMobile() && !$this->isTablet();
    }

    /*
    *   I can haz iOS?
    *
    */
    /**
     * @return mixed
     */
    public function isiOS()
    {
        return craft()->detect->isiOS();
    }

    /*
    *   I can haz Android?
    *
    */
    /**
     * @return mixed
     */
    public function isAndroidOS()
    {
        return craft()->detect->isAndroidOS();
    }

    /*
    *   I can haz BlackBerry?
    *
    */
    /**
     * @return mixed
     */
    public function isBlackBerryOS()
    {
        return craft()->detect->isBlackBerryOS();
    }

    /*
    *   I can haz Palm?
    *
    */
    /**
     * @return mixed
     */
    public function isPalmOS()
    {
        return craft()->detect->isPalmOS();
    }

    /*
    *   I can haz Symbian?
    *
    */
    /**
     * @return mixed
     */
    public function isSymbianOS()
    {
        return craft()->detect->isSymbianOS();
    }

    /*
    *   I can haz Windows Mobile?
    *
    */
    /**
     * @return mixed
     */
    public function isWindowsMobileOS()
    {
        return craft()->detect->isWindowsMobileOS();
    }

    /*
    *   I can haz Windows Phone?
    *
    */
    /**
     * @return mixed
     */
    public function isWindowsPhoneOS()
    {
        return craft()->detect->isWindowsPhoneOS();
    }

    /*
    *   Test anything, e.g. is('iphone')
    *
    */
    /**
     * @param $key
     * @param null $userAgent
     * @param null $httpHeaders
     * @return mixed
     */
    public function is($key, $userAgent = null, $httpHeaders = null)
    {
        return craft()->detect->is($key, $userAgent, $httpHeaders);
    }

    /*
    *   Do the regex!
    *
    */
    /**
     * @param $pattern
     * @param null $userAgent
     * @return mixed
     */
    public function match($pattern, $userAgent = null)
    {
        return craft()->detect->match($pattern, $userAgent);
    }

    /*
    *   Get the version of any component, e.g. version('Android')
    *
    */
    /**
     * @param $component
     * @return mixed
     */
    public function version($component)
    {
        return craft()->detect->is($component);
    }

    /*
    *   Returns browser grade, e.g "A"
    *
    */
    /**
     * @return mixed
     */
    public function mobileGrade()
    {
        return craft()->detect->mobileGrade();
    }

    /*
    *   Returns the Mobile_Detect library version
    *
    */
    /**
     * @return mixed
     */
    public function getScriptVersion()
    {
        return craft()->detect->getScriptVersion();
    }

    /*
    *   Get user agent
    *
    */
    /**
     * @return mixed
     */
    public function getUserAgent()
    {
        return craft()->detect->getUserAgent();
    }

    /*
    *   Set user agent
    *
    */
    /**
     * @param null $userAgent
     * @return mixed
     */
    public function setUserAgent($userAgent = null)
    {
        return craft()->detect->setUserAgent($userAgent);
    }

    /*
    *   Get mobile headers
    *
    */
    /**
     * @return mixed
     */
    public function getMobileHeaders()
    {
        return craft()->detect->getMobileHeaders();
    }

    /*
    *   Get http headers
    *
    */
    /**
     * @return mixed
     */
    public function getHttpHeaders()
    {
        return craft()->detect->getHttpHeaders();
    }

    /*
    *   Set http headers
    *
    */
    /**
     * @param null $httpHeaders
     */
    public function setHttpHeaders($httpHeaders = null)
    {
        craft()->detect->setHttpHeaders($httpHeaders);
    }

    /*
    *   Get CloudFront headers
    *
    */
    /**
     * @return mixed
     */
    public function getCfHeaders()
    {
        return craft()->detect->getCfHeaders();
    }

    /*
    *   Set CloudFront headers
    *
    */
    /**
     * @param null $cfHeaders
     */
    public function setCfHeaders($cfHeaders = null)
    {
        craft()->detect->setCfHeaders($cfHeaders);
    }

}
