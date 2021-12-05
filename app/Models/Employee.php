<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory,HasUuid;
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey='uuid';
    protected $fillable = ['uuid','employee_dni','employee_name','employee_lastname','employee_phone','employee_email','employee_salary','employee_profession'];

     public function administrators()
    {
        return $this->hasMany(Administrator::class,'administrator_id');
    }
     public function developers()
    {
        return $this->hasMany('App\Models\Developer');
    }

     public function designers()
    {
        return $this->hasMany('App\Models\Designer');
    }

     public function marketeers()
    {
        return $this->hasMany('App\Models\Marketer');
    }

     public function projects()
    {
        return $this->hasMany('App\Models\Project');
    }
    public function sale_receipts()
    {
        return $this->hasMany(SaleReceipt::class);
    }

}
