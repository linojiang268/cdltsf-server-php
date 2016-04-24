<?php

namespace Ltsf;

use Ltsf\Support\Database\Eloquent\Model;

class News extends Model
{
    /**
     * @see Model::$table
     */
    protected $table = 'news';

    /**
     *@see Model::$fillable
     *
     */
    protected $fillable = [
        'type',
        'content',
        'title',
        'created_at',
    ];

}
