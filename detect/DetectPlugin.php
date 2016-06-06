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

class DetectPlugin extends BasePlugin
{

    protected   $_version = '1.0.1',
                $_schemaVersion = '1.0.0',
                $_developer = 'Mats Mikkel Rummelhoff',
                $_developerUrl = 'http://mmikkel.no',
                $_pluginName = 'Detect',
                $_pluginUrl = 'https://github.com/mmikkel/Detect-Craft',
                $_releaseFeedUrl = 'https://raw.githubusercontent.com/mmikkel/Detect-Craft/master/releases.json',
                $_documentationUrl = 'https://github.com/mmikkel/Detect-Craft/blob/master/README.md',
                $_minVersion = '2.3';

    public function getName()
    {
         return $this->_pluginName;
    }

    public function getVersion()
    {
        return $this->_version;
    }

    public function getSchemaVersion()
    {
        return $this->_schemaVersion;
    }

    public function getDeveloper()
    {
        return $this->_developer;
    }

    public function getDeveloperUrl()
    {
        return $this->_developerUrl;
    }

    public function getPluginUrl()
    {
        return $this->_pluginUrl;
    }

    public function getReleaseFeedUrl()
    {
        return $this->_releaseFeedUrl;
    }

    public function getDocumentationUrl()
    {
        return $this->_documentationUrl;
    }

}
