<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;
class Project extends Model
{
    use HasFactory,HasUuid;
     public $incrementing = false;
     protected $keyType = 'string';
     protected $primaryKey='uuid';
     protected $fillable = ['uuid','employee_id','client_id','project_comments','project_start','project_final','project_status'];
     protected $table = 'projects';

     public function employee()
    {
        return $this->belongsTo('App\Models\Employee','employee_id');
    }

     public function client()
    {
        return $this->belongsTo('App\Models\Client','client_id');
    }

    public function detail_project()
    {
        return $this->hasMany('App\Models\DetailProject');
    }

}
