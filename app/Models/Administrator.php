<?php

namespace App\Models;
use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    use HasFactory,HasUuid;

    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'administrator_id';
    protected $fillable =['administrator_id','administrator_discipline'];
    protected $table = 'administrators';

    public function employee()
    {
        return $this->belongsTo(Employee::class,'administrator_id');
    }
    public function sales_receipts()
    {
        return $this->hasMany(SaleReceipt::class);
    }
}
