<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;
class Service extends Model
{
    use HasFactory, HasUuid;
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey='uuid';
     protected $fillable =['uuid','category_id','service_name','service_duration','service_cost'];
    protected $table = 'services';
    public function category()
    {
        return $this->belongsTo('App\Models\Category','category_id');
    }
    public function detail_sale()
    {
        return $this->hasMany('App\Models\DetailSale');
    }

    public function detail_project()
    {
        return $this->hasMany('App\Models\DetailProject');
    }
}
