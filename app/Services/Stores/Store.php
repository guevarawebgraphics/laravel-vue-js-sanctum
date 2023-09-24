<?php

namespace App\Services\Stores;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Store
 * @package App\Services\Stores\Store
 * @author Richard Guevara
 */

class Store extends Model
{
    use SoftDeletes;

    protected $table = 'store';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'phone',
        'address',
        'email',
        'fax',
        'image',
        'user_id'
    ];

    
}
