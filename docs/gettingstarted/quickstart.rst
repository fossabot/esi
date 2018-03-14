Quick Start
===========

Creating the esi client object
------------------------------

Esi can be instantiated in two ways.

Below we create the client from the static method create() which accepts no parameters.
This is useful if your application doesn't require any alteration to the http client you are using.
Additionally, this will offload finding a suitable client for our library to use to the
HttpClientDiscovery::find() method in our HttpClientFactory class.

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create();

Below we create the client from the static method createWithHttpClient()
which accepts one parameter - a preconfigured HttpClient - this is useful if you need to
customise your clients behaviour/options outside of the esi library.

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::createWithHttpClient($client);


Authenticating your client
--------------------------

Esi can be easily reused and authenticated multiple times via the authenticate() method found in the EsiClient class.

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('YOUR_ACCESS_TOKEN');

This method accepts one parameter as a string value. This will be your access token after verifying your details in the
`OAuth2 chain <https://eveonline-third-party-documentation.readthedocs.io/en/latest/sso/authentication.html>`_.

Configuring datasource, language and api version
------------------------------------------------

By default esi will query the /latest/ api version for Tranquility and return results in en-us formatting.

At time of writing esi supports 'en-us', 'de', 'fr', 'ja', 'ru' or 'zh'.

You can access these options on the EsiClient object via the below methods:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->dataSource('singularity');

    $esiClient = \AGrimes94\Esi\EsiClient::create()->apiVersion('dev');

    $esiClient = \AGrimes94\Esi\EsiClient::create()->language('fr');

These methods can be called sequentially during or after the creation of the $esiClient object in any order.

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->dataSource('singularity')->apiVersion('dev')
        ->language('fr');

The response object
-------------------

The esi client returns a stdClass object which uses an associative array structure to store the below information:

- Reason Phrase
- Status Code
- Headers
- Body

Putting it all together
-----------------------

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

    $response = $client->industry()->getCorporationJobs($corpId, $page);

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
