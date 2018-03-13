<?php

namespace AGrimes94\Esi\Api;

/**
 * Dogma Endpoints (https://esi.tech.ccp.is/ui/#/Dogma).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class Dogma extends AbstractApi
{
    /**
     * Endpoint: /dogma/attributes/.
     *
     * HTTP Method: GET
     *
     * Get a list of dogma attribute ids.
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getAttributes()
    {
        return $this->get('/dogma/attributes/');
    }

    /**
     * Endpoint: /dogma/attributes/{attribute_id}/.
     *
     * HTTP Method: GET
     *
     * Get information on a dogma attribute.
     *
     * @param int $attributeId
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getAttributeInformation(int $attributeId)
    {
        return $this->get('/dogma/attributes/' . $this->encodePath($attributeId) . '/');
    }

    /**
     * Endpoint: /dogma/effects/.
     *
     * HTTP Method: GET
     *
     * Get a list of dogma effect ids.
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getEffects()
    {
        return $this->get('/dogma/effects/');
    }

    /**
     * Endpoint: /dogma/effects/{effect_id}/.
     *
     * HTTP Method: GET
     *
     * Get information on a dogma effect.
     *
     * @param int $effectId
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getEffectInformation(int $effectId)
    {
        return $this->get('/dogma/effects/' . $this->encodePath($effectId) . '/');
    }
}
