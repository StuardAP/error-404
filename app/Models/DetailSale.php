<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;
class DetailSale extends Model
{
    use HasFactory;
    // public $incrementing = true;
    // protected $keyType = 'integer';
    // protected $primaryKey = 'id';
    protected $fillable =['sales_receipts_num','service_id'];

    public function sales_receipts()
    {
        return $this->belongsTo('App\Models\SaleReceipt','sales_receipts_id');
    }
    public function service()
    {
        return $this->belongsTo(Service::class,'service_id');
    }
}
