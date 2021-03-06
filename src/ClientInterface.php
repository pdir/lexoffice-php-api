<?php

namespace Clicksports\LexOffice;

use Psr\Http\Message\ResponseInterface;

interface ClientInterface
{
    /**
     * ClientInterface constructor.
     * @param Api $lexOffice
     */
    public function __construct(Api $lexOffice);

    /**
     * @param array $data
     * @return ResponseInterface
     * @throws Exceptions\CacheException
     * @throws Exceptions\LexOfficeApiException
     */
    public function create(array $data);

    /**
     * @param string $id
     * @param array $data
     * @return ResponseInterface
     */
    public function update(string $id, array $data);

    /**
     * @return ResponseInterface
     */
    public function getAll();

    /**
     * @param string $id
     * @return ResponseInterface
     * @throws Exceptions\CacheException
     * @throws Exceptions\LexOfficeApiException
     */
    public function get(string $id);
}
