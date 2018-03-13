Dogma
=====

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

Get Attributes
--------------

:HTTP Method: GET
:Endpoint: /dogma/attributes/
:Summary: Get a list of dogma attribute ids.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->dogma()->getAttributes();

Get Attribute Information
-------------------------

:HTTP Method: GET
:Endpoint: /dogma/attributes/{attribute_id}/
:Summary: Get information on a dogma attribute.
:Types: - int $attributeId
:Default: None

.. code-block:: php

    $esiClient->dogma()->getAttributeInformation(int $attributeId);

Get Effects
-----------

:HTTP Method: GET
:Endpoint: /dogma/effects/
:Summary: Get a list of dogma effect ids.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->dogma()->getEffects();

Get Effect Information
----------------------

:HTTP Method: GET
:Endpoint: /dogma/effects/{effect_id}/
:Summary: Get information on a dogma effect.
:Types: - int $effectId
:Default: None

.. code-block:: php

    $esiClient->dogma()->getEffectInformation(int $effectId);
