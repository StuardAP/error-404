<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;
class Designer extends Model
{
    use HasFactory, HasUuid;
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'designer_id';
    protected $fillable =['designer_id','designer_creativity','designer_detailer'];
    protected $table = 'designers';
    public function employee()
    {
        return $this->belongsTo(Employee::class,'designer_id');
    }
}
