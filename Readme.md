# Laravel Zoom Meeting Package
Larazoom is a **Zoom API Integration** library providing an easier  way to create meeting. The package includes ServiceProviders and Facades for easy **Laravel** integration.

## Requirements
- PHP >= 7.3
- [Guzzle](https://packagist.org/packages/guzzlehttp/guzzle)
- [PHP-JWT](https://github.com/firebase/php-jwt)

Installation
------------

**This package is created based on [Zoom API Documentation](https://marketplace.zoom.us/docs/api-reference/zoom-api).**
Use composer to manage your dependencies and download LARA-ZOOM:

```bash
composer require tsakib360/lara-zoom
```

Service Provider & Facade
-------------------------

**Note: only for Laravel 5.4 and below, because since Laravel 5.5 we use package auto-discovery.**

Add this two lines in `config/app`.
```php
Tsakib360\LaraZoom\LaraZoomServiceProvider::class,
```
```php
'Zoom' => Tsakib360\LaraZoom\Facades\Zoom::class,
```

## Usage

Create Meeting
--------------
```php
use Tsakib360\LaraZoom\Facades\Zoom;

$data = array();
$data['topic'] 		= 'Example Test Meeting';
$data['start_date'] = date("2022-01-29 19:25:00");
$data['duration'] 	= 30;
$data['type'] 		= 2;
$data['password'] 	= "12345";
$data['join_before_host'] = true;

$response = Zoom::createMeeting($data);
return $response
```

Get Meetings
------------
```php
use Tsakib360\LaraZoom\Facades\Zoom;

$response = Zoom::getMeetings();
return $response
```

Methods List
------------

| Method Name   |   Type   |API Documentation |
|---------------|:--------:|-----------------------------------------------------------------------------:|
| createMeeting |  array   | https://marketplace.zoom.us/docs/api-reference/zoom-api/methods#operation/meetingCreate|
| getMeetings   |  | https://marketplace.zoom.us/docs/api-reference/zoom-api/methods#operation/meetings|

##Contact Me
For further information please email to this address: [tsakib360@gmail.com]()



