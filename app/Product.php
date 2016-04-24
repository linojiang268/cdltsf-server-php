<?php

namespace Ltsf;

use Ltsf\Support\Database\Eloquent\Model;

class Product extends Model
{

    /**
     * @see Model::$incrementing
     */
    public $incrementing = false;

    /**
     * @see Model::$table
     */
    protected $table = 'products';

    /**
     *@see Model::$fillable
     *
     */
    protected $fillable = [
        'name', 'poster', 'brand', 'intro'
    ];
}
