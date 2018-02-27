Welcome to esi's documentation!
===============================

The esi client is a simple php http client built with `httplug <http://httplug.io/>`_.

Esi makes queries as simple as possible!

.. code-block:: php

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

.. toctree::
    :hidden:

        Home <self>

.. toctree::
    :hidden:
    :caption: Overview
    :maxdepth: 2

        Introduction <esi/introduction>
        Usage <esi/usage>
