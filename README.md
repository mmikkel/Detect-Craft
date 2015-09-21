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
```twig
isMobile
```
_Detects all mobile devices, both phones and tablets_  

```twig
isTablet  
isPhone
```

### Mobile OS detection
```twig
isiOS  
isAndroidOS  
isBlackBerryOS  
isPalmOS  
isSymbianOS  
isWindowsMobileOS   
isWindowsPhoneOS  
```

### Other methods

```twig
is(key)
```
_Test for anything, e.g. ```is('iphone')```_  

```twig
match(pattern)
```
_Test using regular expressions_  

```twig
version(component)
```
_Get the version of a component, e.g. ```version('iPhone')```_  

```twig
mobileGrade
```
_Get browser grade (e.g. "A")_  

```twig
getScriptVersion
```
_Prints the MobileDetect library's version_  

```twig
getUserAgent  
setUserAgent(userAgent)  
getMobileHeaders  
getHttpHeaders    
setHttpHeaders(httpHeaders)  
getCfHeaders  
setCfHeaders(cfHeaders)  
```

## Changelog

### 1.0 (09.21.15)
_Initial release_

## Disclaimer

This Craft CMS plugin is free, and you can do whatever you want with it. _The author takes no responsibility for any data loss or other issues resulting from the use of this plugin._

Kindly report any issues [here](https://github.com/mmikkel/Detect-Craft/issues), but please note that no promises are made regarding response time, bug fixes or feature request implementations.

**Pull requests are very welcome!**
