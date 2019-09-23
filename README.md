# STATSCORE Official API Client
[![Build Status](https://travis-ci.org/statscore/apiclient.svg?branch=development)](https://travis-ci.org/statscore/apiclient)
[![codecov](https://codecov.io/gh/statscore/apiclient/branch/development/graph/badge.svg)](https://codecov.io/gh/statscore/apiclient)
![PHP from Travis config](https://img.shields.io/travis/php-v/statscore/apiclient/development.svg)
[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=statscore_apiclient&metric=alert_status)](https://sonarcloud.io/dashboard?id=statscore_apiclient)
![Libraries.io dependency status for GitHub repo](https://img.shields.io/librariesio/github/statscore/apiclient)

# Table of Contents

* [Installation](#installation)
* [Examples](#examples)
    * [Authentication](#authentication)
* [Troubleshooting](#troubleshooting)

<a name="installation"></a>
# Installation

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
# Examples

### Authentication

First, get your token, then save it and use in your future requests.

```php
<?php
use Statscore\Client;
use Statscore\Model\Response\Authorization\AuthorizationDTO;

$statscore = new Client(1, 'yoursecretkey');
/** @var AuthorizationDTO $token */
$token = $statscore->getToken();

/** Get your token, save it and use in future requests */
$statscore->setToken($statscore->getToken());
```

## Troubleshooting

Issues are tracked on [GitHub](https://github.com/statscore/apiclient/issues)