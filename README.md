<h1 align="center">esi</h1>

<p align="center">
<a href="https://packagist.org/packages/aGrimes94/esi"><img src="https://poser.pugx.org/agrimes94/esi/v/stable" alt="Latest Stable Version"></a>
<a href="https://styleci.io/repos/121171717"><img src="https://styleci.io/repos/121171717/shield?branch=master" alt="StyleCI Status"></a>
<a href="https://travis-ci.org/aGrimes94/esi"><img src="https://img.shields.io/travis/aGrimes94/esi.svg" alt="Travis Build Status"></a>
<a href="https://www.codacy.com/"><img src="https://img.shields.io/codacy/grade/256e2b509fea4cab92f39edcf745ba57.svg" alt="Codacy Grade"></a>
<a href="https://codeclimate.com/github/aGrimes94/esi/maintainability"><img src="https://api.codeclimate.com/v1/badges/b955d3eb7b589cf75597/maintainability" alt="Codeclimate Rating"></a>
<a href="https://codeclimate.com/github/aGrimes94/esi/test_coverage"><img src="https://api.codeclimate.com/v1/badges/b955d3eb7b589cf75597/test_coverage" alt="Codeclimate Coverage"></a>
</p>

esi is a PHP Http Client for ESI (EVE Swagger Interface).

## Getting Started

### Prerequisites

You will need a PSR-7 compliant http client in order to use the esi library. This is because esi is made possible by [httplug](http://httplug.io/). For more information on how to use httplug packages, please refer to their usage documentation found [here](http://docs.php-http.org/en/latest/httplug/usage.html). 

Additionally, esi is currently only being developed for a minimum of PHP >= 7.1.

### Installation

### composer via (packagist)

```bash
$ composer require agrimes94/esi 
```

### Usage

The esi library exposes a simple and expressive api for you to interact with.

Please see the [guidelines for contributing](CONTRIBUTING.md) on how to generate complete API documentation.

*QUICK GUIDE*

``` php
$esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

$response = $client->industry()->getCorporationJobs($corpId);
```

Full documentation for each endpoint is in the works, if you have any questions please email me at [contact@anthonygrimes.co.uk](mailto:contact@anthonygrimes.co.uk).

### Testing

Testing is handled by PHPUnit 7. You can run the tests by running the below command in your terminal.

```bash
$ ./vendor/bin/phpunit
```

## Contributing

Thank you for considering contributing to esi. Please refer to the provided [guidelines for contributing](CONTRIBUTING.md) to see how to make a contribution.

## Security Vulnerabilities

If you find a security vulnerability, **do not** open an issue. Email [contact@anthonygrimes.co.uk](mailto:contact@anthonygrimes.co.uk) instead. All security vulnerabilities will be promptly addressed.

## License

This project is licensed under the [GNU Lesser General Public License](https://www.gnu.org/licenses/lgpl-3.0.en.html).
