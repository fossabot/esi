<?php

namespace AGrimes94\Esi\Api;

use AGrimes94\Esi\EsiClient;
use AGrimes94\Esi\HttpClient\Util\ResponseMediator;
use AGrimes94\Esi\HttpClient\Util\QueryStringBuilder;
use Http\Discovery\StreamFactoryDiscovery;
use Http\Message\StreamFactory;
use Http\Message\MultipartStream\MultipartStreamBuilder;
use Psr\Http\Message\ResponseInterface;

/**
 * Abstract class for API endpoints.
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
abstract class AbstractApi
{
    /**
     * @var EsiClient
     */
    protected $esiClient;

    /**
     * @var StreamFactory
     */
    private $streamFactory;

    /**
     * AbstractApi constructor.
     *
     * @param EsiClient $esiClient
     * @param StreamFactory|null $streamFactory
     */
    public function __construct(EsiClient $esiClient, StreamFactory $streamFactory = null)
    {
        $this->esiClient = $esiClient;
        $this->streamFactory = $streamFactory ?: StreamFactoryDiscovery::find();
    }

    /**
     * Performs a GET query and returns the response as a PSR-7 response object.
     *
     * @param string $path
     * @param array $parameters
     * @param array $requestHeaders
     *
     * @return ResponseInterface
     *
     * @throws \Http\Client\Exception
     */
    protected function getAsResponse($path, array $parameters = [], $requestHeaders = []): ResponseInterface
    {
        $path = $this->preparePath($path, $parameters);

        return $this->esiClient->getHttpClient()->get($path, $requestHeaders);
    }

    /**
     * Perform GET request.
     *
     * @param string $path
     * @param array $parameters
     * @param array $requestHeaders
     *
     * @return mixed
     *
     * @throws \Http\Client\Exception
     */
    protected function get($path, array $parameters = [], array $requestHeaders = [])
    {
        return ResponseMediator::getContent($this->getAsResponse($path, $parameters, $requestHeaders));
    }

    /**
     * Perform POST request.
     *
     * @param $path
     * @param array $parameters
     * @param array $requestHeaders
     * @param array $files
     *
     * @return array|string
     *
     * @throws \Http\Client\Exception
     */
    protected function post($path, array $parameters = array(), $requestHeaders = array(), array $files = array())
    {
        $path = $this->preparePath($path);

        $body = null;
        if (empty($files) && !empty($parameters)) {
            $body = json_encode($parameters);
            $requestHeaders['Content-Type'] = 'application/json';

        } elseif (!empty($files)) {
            $builder = new MultipartStreamBuilder($this->streamFactory);

            foreach ($parameters as $name => $value) {
                $builder->addResource($name, $value);
            }

            foreach ($files as $name => $file) {
                $builder->addResource($name, fopen($file, 'r'), [
                    'headers' => [
                        'Content-Type' => $this->guessContentType($file),
                    ],
                    'filename' => basename($file),
                ]);
            }

            $body = $builder->build();
            $requestHeaders['Content-Type'] = 'multipart/form-data; boundary=' . $builder->getBoundary();
        }

        $response = $this->esiClient->getHttpClient()->post($path, $requestHeaders, $body);

        return ResponseMediator::getContent($response);
    }

    /**
     * Perform PUT request.
     *
     * @param $path
     * @param array $parameters
     * @param array $requestHeaders
     *
     * @return array|string
     *
     * @throws \Http\Client\Exception
     */
    protected function put($path, array $parameters = array(), $requestHeaders = array())
    {
        $path = $this->preparePath($path);

        $body = null;
        if (!empty($parameters)) {
            $body = json_encode($parameters);
            $requestHeaders['Content-Type'] = 'application/json';
        }

        $response = $this->esiClient->getHttpClient()->put($path, $requestHeaders, $body);

        return ResponseMediator::getContent($response);
    }

    /**
     * Perform DELETE request.
     *
     * @param $path
     * @param array $parameters
     * @param array $requestHeaders
     *
     * @return array|string
     *
     * @throws \Http\Client\Exception
     */
    protected function delete($path, array $parameters = array(), $requestHeaders = array())
    {
        $path = $this->preparePath($path, $parameters);

        $response = $this->esiClient->getHttpClient()->delete($path, $requestHeaders);

        return ResponseMediator::getContent($response);
    }

    /**
     * Prepare path with query string for given parameters.
     *
     * @param $path
     * @param array $parameters
     *
     * @return string
     */
    protected function preparePath($path, array $parameters = []): string
    {
        if (count($parameters) > 0) {
            $path .= '?' . QueryStringBuilder::build($parameters);
        }

        return $path;
    }

    /**
     * Encodes a path string.
     *
     * @param string $path
     *
     * @return string
     */
    protected function encodePath($path): string
    {
        $path = rawurlencode($path);

        return str_replace('.', '%2E', $path);
    }

    /**
     * Guess content type to use in stream.
     *
     * @param $file
     *
     * @return string
     */
    private function guessContentType($file): string
    {
        if (!class_exists(\finfo::class, false)) {
            return 'application/octet-stream';
        }
        $finfo = new \finfo(FILEINFO_MIME_TYPE);

        return $finfo->file($file);
    }

    /**
     * Allows a query to be paginated by constructing buildable array structure for QueryStringBuilder.
     *
     * @param int $page
     *
     * @return array
     */
    protected function paginateQuery(int $page): array // TODO Possible to change to accept $params = [] and concatenate
    {
        $params = [
            'page' => $page
        ];

        return $params;
    }
}