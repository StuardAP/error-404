<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;
class Marketer extends Model
{
    use HasFactory,HasUuid;
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'marketer_id';

    protected $fillable =['marketer_id','marketer_analysis','marketer_planning'];
    protected $table = 'marketers';

    public function employee()
    {
        return $this->belongsTo('App\Models\Employee','marketer_id');
    }
}
