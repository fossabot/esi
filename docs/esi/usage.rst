Usage
=====

Creating the esi client object
------------------------------

Esi can be instantiated in two ways.

Below we create the client from the static method create() which accepts no parameters.
This is useful is we do not require authenticating the client for public endpoints like /search/.
Additionally, this will offload finding a suitable client for our library to use to the
HttpClientDiscovery::find() method in our HttpClientFactory class.

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create();

Below we create the client from the static method createWithHttpClient()
which accepts one parameter - our preconfigured HttpClient - this is useful if you need to
customise your clients behaviour/options outside of the esi library.

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::createWithHttpClient($client);


Authenticating your client
--------------------------

Esi can be easily reused and authenticated multiple times via the authenticate() method found in the EsiClient class.

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('YOUR_ACCESS_TOKEN');

This method accepts one parameter as string value. This will your access token after verifying your details in the
`OAuth2 chain <https://eveonline-third-party-documentation.readthedocs.io/en/latest/sso/authentication.html>`_.

Configuring datasource, language and api version
------------------------------------------------

The esi client can optionally be configured to return results in the supported languages - 'en-us', 'de', 'fr', 'ja', 'ru', 'zh',
query a given datasource i.e. Singularity and finally api versions to query against can be chosen too.

By default esi will query the /latest/ api version for Tranquility and return results in en-us formatting.

You can access these options on the EsiClient object via the below methods:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->dataSource('singularity');

    $esiClient = \AGrimes94\Esi\EsiClient::create()->apiVersion('dev');

    $esiClient = \AGrimes94\Esi\EsiClient::create()->language('fr');

Making requests
---------------

Making queries is super simple, from the EsiClient object you will have access to all the below categories:

- Alliance
- Assets
- Bookmarks
- Calendar
- Character
- Clones
- Contacts
- Corporation
- Dogma
- Faction Warfare
- Fittings
- Fleets
- Incursions
- Industry
- Insurance
- Killmails
- Location
- Loyalty
- Mail
- Market
- Opportunities
- Planetary Interaction
- Routes
- Search
- Skills
- Sovereignty
- Status
- Universe
- User Interface
- Wallet
- Wars

Each category is modeled after it's mirror found on the `esi docs <https://esi.tech.ccp.is/ui/>`_.

.. note::

    Esi is in active development and endpoints may change without notice!

Once you've matched the category and it's matching contained method name querying it is as simple as passing in the
require parameters, please see the source documentation or see :doc:`/esi/api` on how to generate the api documentation.

.. code-block:: php

        $response = $esiClient->character()->getCorpHistory($characterId);

The response object
-------------------

The esi client returns a stdClass object which uses an associative array structure to store the below information

- Reason Phrase
- Status Code
- Headers
- Body

Each part of the response contains all the information a application developer would require. Please see
the quick start in :doc:`/esi/introduction` for more info on the response object.
