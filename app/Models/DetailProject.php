<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;
class DetailProject extends Model
{
    use HasFactory;
    // public $incrementing =true;
    // protected $keyType = 'integer';
    // protected $primaryKey = 'id';
    protected $fillable =['project_id','service_id'];
    protected $table = 'detail_projects';
    public function project()
    {
        return $this->belongsTo(Project::class,'project_id');
    }
    public function service()
    {
        return $this->belongsTo(Service::class,'service_id');
    }
}
