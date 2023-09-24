<?php

namespace App\Services\Stores\Repositories;

use App\Services\Base\RepositoryInterface;

/**
 * Class StoreRepositoryInterface
 * @package App\Services\Stores\Repositories
 * @author Richard Guevara
 */

interface StoreRepositoryInterface extends RepositoryInterface
{
    function fetchAll();

    function addData(array $data);

    function updateData(int $id, array $data);

    function fetchStore(int $id);

    function fetchStorePaginate($data, $page, $params);
}
