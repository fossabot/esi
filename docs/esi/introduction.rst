Introduction to the esi client
==============================

Prerequisites
-------------

Esi requires your application to be at least PHP 7.1 compatible, and have a desired http client or `adapter <http://docs.php-http.org/en/latest/clients.html>`_ installed before installing esi,
otherwise you will experience installation errors as mentioned in the docs at `composer-fails on httplug <http://docs.php-http.org/en/latest/httplug/users.html#composer-fails>`_.

Please see `usage of httplug <http://docs.php-http.org/en/latest/httplug/usage.html>`_ for more info.

Installation
------------

.. code-block:: shell

    composer require agrimes94/esi

Quick Start
-----------

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

Esi is structured to mimic the individual api categories as found on `esi's docs <https://esi.tech.ccp.is/ui/>`_.

That is if you find the api endpoints `get characters public information <https://esi.tech.ccp.is/ui/#/Character/get_characters_character_id>`_, it can be found as
follows:

.. code-block:: php

    $client->character()->getPublicInformation($characterId);

Very simple, and as shown above pagination is as simple as reading the returned X-Pages header and passing the page as an integer value the paginated endpoint method.
For more info on pagination please see `esi-concurrent-programming-and-pagination <https://developers.eveonline.com/blog/article/esi-concurrent-programming-and-pagination>`_
where CCP Zoetrope discusses how CCP would implement and handle pagination.

Each endpoint is heavily documented and will continue to only improve. In addition esi has automated testing to check if any endpoints become
incompatible with the /latest/ series of endpoints offered.
