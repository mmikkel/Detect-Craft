# Detect plugin for Craft CMS


**_Detect_ is a fairly complete wrapper for the [Mobile_Detect](http://mobiledetect.net/) library by [@serbanghita](https://github.com/serbanghita).**  

The plugin exposes most of Mobile_Detect's methods, and can be used in your Twig:

```twig
{{ craft.detect.isMobile ? 'I am mobile.' : 'I am not mobile.' }}
```

...or as a PHP service:

```php
$isMobile = craft()->detect->isMobile();
```

## Installation
1. Unzip
2. Drop the /detect folder inside your /craft/plugins directory
3. Install in the Craft CP

## Methods/usage

### Device detection
```isMobile```  
_Note: Returns true for any mobile device (both phones and tablets)_    

```isTablet```   
```isPhone```  

### Mobile OS detection
```isiOS```  
```isAndroidOS```  
```isBlackBerryOS```  
```isPalmOS```  
```isSymbianOS```  
```isWindowsMobileOS```  
```isWindowsPhoneOS``` 

### Other methods

```is(key)```  
_Test for anything, e.g. ```is('iphone')```_  

```match(pattern)```  
_Test using regular expressions_  

```version(component)```  
_Get the version of a component, e.g. ```version('iPhone')```_  

```mobileGrade```  
_Get browser grade (e.g. "A")_  

```getScriptVersion```  
_Get the MobileDetect library's version_  

```getUserAgent()```  
```setUserAgent(userAgent)```  
```getMobileHeaders()```  
```getHttpHeaders()```  
```setHttpHeaders(httpHeaders)```  
```getCfHeaders()```  
```setCfHeaders(cfHeaders)```  

## Changelog

### 1.0 (09.21.15)
_Initial release_

## Disclaimer

This Craft CMS plugin is free, and you can do whatever you want with it. _The author takes no responsibility for any data loss or other issues resulting from the use of this plugin._   

Kindly report any issues [here](https://github.com/mmikkel/Detect-Craft/issues), but please note that no promises are made regarding response time, bug fixes or feature request implementations.

**Pull requests are very welcome!**

