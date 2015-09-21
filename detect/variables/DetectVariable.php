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

class DetectVariable
{

    /*
    *   Returns true for any mobile device (including tablets!)
    *
    */
    public function isMobile()
    {
        return craft()->detect->isMobile();
    }

    /*
    *   Returns true for tablets only
    *
    */
    public function isTablet()
    {
        return craft()->detect->isTablet();
    }

    /*
    *   Returns true for phones only
    *
    */
    public function isPhone()
    {
        return $this->isMobile() && !$this->isTablet();
    }

    /*
    *   I can haz iOS?
    *
    */
    public function isiOS()
    {
        return craft()->detect->isiOS();
    }

    /*
    *   I can haz Android?
    *
    */
    public function isAndroidOS()
    {
        return craft()->detect->isAndroidOS();
    }

    /*
    *   I can haz BlackBerry?
    *
    */
    public function isBlackBerryOS()
    {
        return craft()->detect->isBlackBerryOS();
    }

    /*
    *   I can haz Palm?
    *
    */
    public function isPalmOS()
    {
        return craft()->detect->isPalmOS();
    }

    /*
    *   I can haz Symbian?
    *
    */
    public function isSymbianOS()
    {
        return craft()->detect->isSymbianOS();
    }

    /*
    *   I can haz Windows Mobile?
    *
    */
    public function isWindowsMobileOS()
    {
        return craft()->detect->isWindowsMobileOS();
    }

    /*
    *   I can haz Windows Phone?
    *
    */
    public function isWindowsPhoneOS()
    {
        return craft()->detect->isWindowsPhoneOS();
    }

    /*
    *   Test anything, e.g. is('iphone')
    *
    */
    public function is($key, $userAgent = null, $httpHeaders = null)
    {
        return craft()->detect->is($key, $userAgent, $httpHeaders);
    }

    /*
    *   Do the regex!
    *
    */
    public function match($pattern, $userAgent = null)
    {
        return craft()->detect->match($pattern, $userAgent);
    }

    /*
    *   Get the version of any component, e.g. version('Android')
    *
    */
    public function version($component)
    {
        return craft()->detect->is($component);
    }

    /*
    *   Returns browser grade, e.g "A"
    *
    */
    public function mobileGrade()
    {
        return craft()->detect->mobileGrade();
    }

    /*
    *   Returns the Mobile_Detect library version
    *
    */
    public function getScriptVersion()
    {
        return craft()->detect->getScriptVersion();
    }

    /*
    *   Get user agent
    *
    */
    public function getUserAgent()
    {
        return craft()->detect->getUserAgent();
    }

    /*
    *   Set user agent
    *
    */
    public function setUserAgent($userAgent = null)
    {
        return craft()->detect->setUserAgent($userAgent);
    }

    /*
    *   Get mobile headers
    *
    */
    public function getMobileHeaders()
    {
        return craft()->detect->getMobileHeaders();
    }

    /*
    *   Get http headers
    *
    */
    public function getHttpHeaders()
    {
        return craft()->detect->getHttpHeaders();
    }

    /*
    *   Set http headers
    *
    */
    public function setHttpHeaders($httpHeaders = null)
    {
        craft()->detect->setHttpHeaders($httpHeaders);
    }

    /*
    *   Get CloudFront headers
    *
    */
    public function getCfHeaders()
    {
        return craft()->detect->getCfHeaders();
    }

    /*
    *   Set CloudFront headers
    *
    */
    public function setCfHeaders($cfHeaders = null)
    {
        craft()->detect->setCfHeaders($cfHeaders);
    }

}
