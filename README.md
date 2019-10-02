# ![sportsapi](https://statscore-s3-cdn.statscore.com/v2/products/sportsAPI/spa-logo.png) STATSCORE Official SportsAPI Client

[![Build Status](https://travis-ci.org/statscore/apiclient.svg?branch=development)](https://travis-ci.org/statscore/apiclient)
[![Packagist](https://img.shields.io/packagist/v/statscore/apiclient.svg)](https://packagist.org/packages/statscore/apiclient)
[![codecov](https://codecov.io/gh/statscore/apiclient/branch/development/graph/badge.svg)](https://codecov.io/gh/statscore/apiclient)
![PHP from Travis config](https://img.shields.io/travis/php-v/statscore/apiclient/development.svg)
[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=statscore_apiclient&metric=alert_status)](https://sonarcloud.io/dashboard?id=statscore_apiclient)
![Libraries.io dependency status for GitHub repo](https://img.shields.io/librariesio/github/statscore/apiclient)

The API service is based on the REST architecture and supports a number of resources accessed with HTTP protocol. The client should send a HTTP GET request and in return will receive a return list document in JSON or XML format. The default response format is JSON.

## Table of Contents

* [Installation](#installation)
* [Examples](#examples)
    * [Authentication](#authentication)
    * [Booked Events](#booked-events)
* [Troubleshooting](#troubleshooting)

<a name="installation"></a>
## Installation

### Prerequisites

- PHP version 7.*

### Documentation

- [API Documentation](https://docs.api.statscore.com/?version=latest)

### Hot to install package

Use [Composer](http://getcomposer.org) to install the latest version with command:

```bash
$ composer require statscore/apiclient
```

or add our package to your `composer.json` file.

```json
{
  "require": {
    "statscore/apiclient": "~1"
  }
}
```
## Examples

### Authentication

Access to the API is based on the [oAuth 2.0](https://oauth.net/2/) authorization method. This means access is given using a unique token without any IP's restriction.

The client is authenticated using a GET request including query string parameters: client_id and secret_key. These parameters are assigned to you by our sales department. On confirmation of the client_id/secret_key combination, the special oAuth token is then returned. Maximum period of time the token is valid is 24 hours from the time it was generated. This token should be sent with all subsequent requests.

```php
<?php
use Statscore\Client;
use Statscore\Model\Response\Authorization\AuthorizationDTO;

$clientId = 1;
$statscore = new Client($clientId, 'yoursecretkey');
/** @var AuthorizationDTO $authDTO */
$authDTO = $statscore->authorize();

/** Get your token, save it and use in future requests */
$statscore->setToken($authDTO->getToken());
```

### Booked Events

#### Get all
```php
<?php
use Statscore\Model\Response\BookedEvent\BookedEventDTO;
use Statscore\Model\Response\ResponseDTO;

$clientId = 1;
$productName = 'livescorepro';

/** @var ResponseDTO $response */
$response = $statscore->bookedEvents->getAll($clientId, $productName);
/** @var BookedEventDTO[] $bookedEvents */
$bookedEvents = $response->getData();
```

#### Create
```php
<?php
use Statscore\Model\Response\BookedEvent\BookedEventDTO;
use Statscore\Model\Response\ResponseDTO;

$clientId = 1;
$productName = 'livescorepro';
$eventId = 1232131;
/** @var ResponseDTO $response */
$response = $statscore->bookedEvents->create($clientId, $productName, $eventId);

/** @var BookedEventDTO[] $bookedEvents */
$bookedEvents = $response->getData();
```

#### Delete
```php
<?php
use Statscore\Model\Response\ResponseDTO;

$clientId = 1;
$productName = 'livescorepro';
$eventId = 1232131;
/** @var ResponseDTO $response */
$response = $statscore->bookedEvents->delete($clientId, $productName, $eventId);
```

## Troubleshooting

Our support team, based in Katowice, exists for one purpose: to serve and delight STATSCORE customers. 

Have a question? Our team will help you find answers 24 hours a day, 365 days a year. Please send us an email at [tech-support@statscore.com](mailto:tech-support@statscore.com)

Issues are tracked on [GitHub](https://github.com/statscore/apiclient/issues)