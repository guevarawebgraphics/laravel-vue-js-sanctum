<?php

namespace App\Services\Users\Repositories;

use App\Services\Base\RepositoryInterface;

/**
 * Class UserRepositoryInterface
 * @package App\Services\Users\Repositories
 * @author Richard Guevara
 */

interface UserRepositoryInterface extends RepositoryInterface
{

    function fetchAll();
    
    function fetchUser(array $data);

    function addData(array $data);

    function updateData(int $id, array $data);
}
