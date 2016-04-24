<?php

namespace Ltsf;

use Ltsf\Support\Database\Eloquent\Model;

class Brand extends Model
{

    /**
     * @see Model::$incrementing
     */
    public $incrementing = false;

    /**
     * @see Model::$table
     */
    protected $table = 'brands';

    /**
     *@see Model::$fillable
     *
     */
    protected $fillable = [
        'name', 'poster', 'type'
    ];
}
