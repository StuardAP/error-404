<?php
namespace App\Traits;
use Illuminate\Support\Str;
//use Ramsey\Uuid\Uuid;
trait HasUuid
{
    // protected static function boot()
    // {   parent::boot();
    //     static::creating(function ($model) {
    //      $model->incrementing = false;
    //      $model->{$model->getKeyName()} = Uuid::uuid4()->toString();
    //      });
    // }
    protected static function bootHasUuid()
    {

        static::creating(function ($model){
            if(empty($model->{$model->getKeyName()})){
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }
}
