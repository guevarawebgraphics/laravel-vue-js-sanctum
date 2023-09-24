<?php

namespace App\Services\Stores\Repositories;

use App\Services\Stores\Store;
use App\Services\Base\Repository;
use Illuminate\Pagination\LengthAwarePaginator;
use Paginator;

/**
 * Class StoreRepository
 * @package App\Services\Stores\Repositories
 * @author Richard Guevara
 */

class StoreRepository extends Repository implements StoreRepositoryInterface
{
    protected $model;

    /**
     * Repository constructor.
     *
     * @param  Model|null $model the data model to initialized
     */
    public function __construct(Store $model)
    {
        $this->model = $model;
    }

    public function fetchAll() 
    {
        return $this->model->all();
    }

    public function fetchStore($id) 
    {
        return $this->model->find($id);
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

    public function fetchStorePaginate($request, $page = null, $params = null)
    {
        $perPage = 12;
        $currentPage = $page ?? 1;

        $data = $this->model->orderBy('created_at', 'desc');

        return $data->paginate($perPage, ['*'], 'page', $currentPage);
    }
}