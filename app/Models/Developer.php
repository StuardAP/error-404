<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;
class Developer extends Model
{
    use HasFactory, HasUuid;
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'developer_id';
    protected $fillable =['developer_id','developer_languages'];
    protected $table = 'developers';

    public function employee()
    {
        return $this->belongsTo(Employee::class,'developer_id');
    }
}
