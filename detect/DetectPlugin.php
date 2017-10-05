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

/*
*   Props to artworkbean from the Noun Project for the icon
*
*/

/**
 * Class DetectPlugin
 * @package Craft
 */
class DetectPlugin extends BasePlugin
{

    protected $_version = '1.0.2';
    protected $_schemaVersion = '1.0.0';
    protected $_developer = 'Mats Mikkel Rummelhoff';
    protected $_developerUrl = 'http://mmikkel.no';
    protected $_pluginName = 'Detect';
    protected $_pluginUrl = 'https://github.com/mmikkel/Detect-Craft';
    protected $_releaseFeedUrl = 'https://raw.githubusercontent.com/mmikkel/Detect-Craft/master/releases.json';
    protected $_documentationUrl = 'https://github.com/mmikkel/Detect-Craft/blob/master/README.md';
    protected $_minVersion = '2.3';

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_pluginName;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->_version;
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return $this->_schemaVersion;
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return $this->_developer;
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return $this->_developerUrl;
    }

    /**
     * @return string
     */
    public function getPluginUrl()
    {
        return $this->_pluginUrl;
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return $this->_releaseFeedUrl;
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return $this->_documentationUrl;
    }

}
