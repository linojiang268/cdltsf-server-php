<?php

namespace Ltsf\Support\Database\Eloquent;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Ramsey\Uuid\Uuid;

class Model extends EloquentModel
{
    /**
     * @see EloquentModel::$incrementing
     */
    public $incrementing = false;

    /**
     * @see EloquentModel::$boot
     */
    protected static function boot()
    {
        parent::boot();

        /**
         * Attach to the 'creating' Model Event to provide a UUID
         * for the `id` field (provided by $model->getKeyName())
         */
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string)$model->generateNewId();
        });
    }

    /**
     * generate id
     *
     * @return string
     */
    protected function generateNewId()
    {
        return Uuid::uuid4()->toString();
    }
}