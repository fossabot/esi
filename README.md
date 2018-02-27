<h1 align="center">esi</h1>

<p align="center">
<a href="https://packagist.org/packages/aGrimes94/esi"><img src="https://poser.pugx.org/agrimes94/esi/v/stable" alt="Latest Stable Version"></a>
<a href="https://styleci.io/repos/121171717"><img src="https://styleci.io/repos/121171717/shield?branch=master" alt="StyleCI Status"></a>
<a href="https://travis-ci.org/aGrimes94/esi"><img src="https://img.shields.io/travis/aGrimes94/esi.svg" alt="Travis Build Status"></a>
<a href="https://codeclimate.com/github/aGrimes94/esi/maintainability"><img src="https://api.codeclimate.com/v1/badges/b955d3eb7b589cf75597/maintainability" alt="Codeclimate Rating"></a>
<a href="https://codeclimate.com/github/aGrimes94/esi/test_coverage"><img src="https://api.codeclimate.com/v1/badges/b955d3eb7b589cf75597/test_coverage" alt="Codeclimate Coverage"></a>
</p>

esi is a PHP Http Client for ESI (EVE Swagger Interface).

## Getting Started

### Prerequisites

Esi is developed with [httplug](http://httplug.io/). This is a client abstraction which allows you, the user or application
developer to decide what client to use that will meet your specification as long as it's in keeping with httplug's guidelines.

Please see [usage of httplug](http://docs.php-http.org/en/latest/httplug/usage.html) for more info.

### Installation

### composer via (packagist)

``` shell
$ composer require agrimes94/esi 
```

### Usage

The esi library exposes a simple and expressive api for you to interact with.

``` php
    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

    $response = $client->industry()->getCorporationJobs($corpId);

    /*
     * You can then access the individual components of the response as an associative array via:
     *
     * $response->reasonPhrase
     * $response->statusCode
     * $response->headers
     * $response->body
     *
     * Below is an excerpt of the body returned.
     *
     *         array:40 [▼
     *            0 => array:18 [▼
     *             "job_id" => 75353
     *              "installer_id" => 78654354
     *              "facility_id" => 87678456453
     *              "location_id" => 7864534563
     *              "activity_id" => 4
     *              "blueprint_id" => 78584683684783
     *              "blueprint_type_id" => 78575
     *              "blueprint_location_id" => 1782872875
     *              "output_location_id" => 287268765
     *              "runs" => 10
     *              "status" => "active"
     *              "duration" => 332928
     *              "start_date" => "2018-02-27T12:01:12Z"
     *              "end_date" => "2018-03-03T08:30:00Z"
     *              "cost" => 159539.0
     *              "licensed_runs" => 200
     *              "probability" => 1.0
     *              "product_type_id" => 42888
     *            ]
     *            1 => array:18 [▶]
     *            2 => array:18 [▶]
     *
     */
```

Further usage documentation can be found at [read the docs](http://esi.rtfd.io/), if you have any questions please email me at [contact@anthonygrimes.co.uk](mailto:contact@anthonygrimes.co.uk).

Please see the [guidelines for contributing](CONTRIBUTING.md) on how to generate complete API documentation.

### Testing

Testing is handled by PHPUnit 7. You can run the tests by executing the below command in your terminal.

``` shell
$ ./vendor/bin/phpunit
```

## Contributing

Thank you for considering contributing to esi. Please refer to the provided [guidelines for contributing](CONTRIBUTING.md) to see how to make a contribution.

## Security Vulnerabilities

If you find a security vulnerability, **do not** open an issue. Email [contact@anthonygrimes.co.uk](mailto:contact@anthonygrimes.co.uk) instead. All security vulnerabilities will be promptly addressed.

## License

This project is licensed under the [GNU Lesser General Public License](https://www.gnu.org/licenses/lgpl-3.0.en.html).
