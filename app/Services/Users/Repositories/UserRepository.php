<?php

namespace App\Services\Users\Repositories;

use App\Services\Users\User;
use App\Services\Base\Repository;

/**
 * Class UserRepository
 * @package App\Services\Users\Repositories
 * @author Richard Guevara
 */

class UserRepository extends Repository implements UserRepositoryInterface
{
    protected $model;

    /**
     * Repository constructor.
     *
     * @param  Model|null $model the data model to initialized
     */
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function fetchUser( array $data ) {
        return $this->model->where('email', $data['email'] )->first();
    }

    public function fetchAll() 
    {
        return $this->model->all();
    }

    public function addData(array $data)
    {
        return $this->create($data);
    }

    public function updateData(int $id, array $data)
    {
        $updated = $this->model->find($id);
        $updated->fill($data)->save();
        return $updated;
    }
}