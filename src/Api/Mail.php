<?php

namespace AGrimes94\Esi\Api;

/**
 * Mail Endpoints (https://esi.tech.ccp.is/ui/#/Mail).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class Mail extends AbstractApi
{
    /**
     * Endpoint: /characters/{character_id}/mail/.
     *
     * HTTP Method: GET
     *
     * Return the 50 most recent mail headers belonging to the character that match the query criteria.
     * Queries can be filtered by label, and last_mail_id can be used to paginate backwards.
     *
     * @param int        $characterId
     * @param array|null $byLabels
     * @param int|null   $lastMailId
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getMailHeaders(int $characterId, array $byLabels = null, int $lastMailId = null)
    {
        $params = [];

        if (!is_null($byLabels)) {
            $params['labels'] = $byLabels;
        }

        if (!is_null($lastMailId)) {
            $params['last_mail_id'] = $lastMailId;
        }

        return $this->get('/characters/' . $this->encodePath($characterId) . '/mail/', $params);
    }

    /**
     * Endpoint: /characters/{character_id}/mail/.
     *
     * HTTP Method: POST
     *
     * Create and send a new mail.
     *
     * @param int   $characterId
     * @param array $mail
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function sendMail(int $characterId, array $mail = [])
    {
        return $this->post('/characters/' . $this->encodePath($characterId) . '/mail/', $mail);
    }

    /**
     * Endpoint: /characters/{character_id}/mail/{mail_id}/.
     *
     * HTTP Method: DELETE
     *
     * Delete a mail.
     *
     * @param int $characterId
     * @param int $mailId
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function deleteMail(int $characterId, int $mailId)
    {
        return $this->delete('/characters/' . $this->encodePath($characterId) . '/mail/' . $this->encodePath($mailId) . '/');
    }

    /**
     * Endpoint: /characters/{character_id}/mail/{mail_id}/.
     *
     * HTTP Method: GET
     *
     * Return the contents of an EVE mail.
     *
     * @param int $characterId
     * @param int $mailId
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function returnMail(int $characterId, int $mailId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/mail/' . $this->encodePath($mailId) . '/');
    }

    /**
     * Endpoint: /characters/{character_id}/mail/{mail_id}/.
     *
     * HTTP Method: PUT
     *
     * Update metadata about a mail.
     *
     *
     * @param int   $characterId
     * @param int   $mailId
     * @param array $contents
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function updateMailMetadata(int $characterId, int $mailId, array $contents = [])
    {
        return $this->put('/characters/' . $this->encodePath($characterId) . '/mail/' . $this->encodePath($mailId) . '/', $contents);
    }

    /**
     * Endpoint: /characters/{character_id}/mail/labels/.
     *
     * HTTP Method: GET
     *
     * Return a list of the users mail labels, unread counts for each label and a total unread count.
     *
     * @param int $characterId
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getLabels(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/mail/labels/');
    }

    /**
     * Endpoint: /characters/{character_id}/mail/labels/.
     *
     * HTTP Method: POST
     *
     * Create a mail label.
     *
     * @param int   $characterId
     * @param array $label
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function createLabel(int $characterId, array $label = [])
    {
        return $this->post('/characters/' . $this->encodePath($characterId) . '/mail/labels/', $label);
    }

    /**
     * Endpoint: /characters/{character_id}/mail/labels/{label_id}/.
     *
     * HTTP Method: DELETE
     *
     * Delete a mail label.
     *
     * @param int $characterId
     * @param int $labelId
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function deleteLabel(int $characterId, int $labelId)
    {
        return $this->delete('/characters/' . $this->encodePath($characterId) . '/mail/labels/' . $this->encodePath($labelId) . '/');
    }

    /**
     * Endpoint: /characters/{character_id}/mail/lists/.
     *
     * HTTP Method: GET
     *
     * Return all mailing lists that the character is subscribed to.
     *
     * @param int $characterId
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getMailingListSubscriptions(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/mail/lists/');
    }
}
