<?php

namespace App\Services\Base\Scopes;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class OrderByCreatedAtScope
 * @package App\Servicess\Base\Scopes
 * @author Richard Guevara
 */

class OrderByCreatedAtScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        $builder->orderBy($model->getTable() . 'created_at', 'DESC');
    }
}
