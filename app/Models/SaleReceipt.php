<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;
class SaleReceipt extends Model
{
    use HasFactory, HasUuid;
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey='sale_num';
    protected $fillable =['sale_num','administrator_id','client_id','sales_receipts_date'];
    protected $table = 'sale_receipts';
    public function details_sales()
    {
        return $this->hasMany('App\Models\DetailSale');
    }
    public function administrator()
    {
        return $this->belongsTo(Administrator::class,'administrator_id');
    }

    public function clients()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'administrator_id');
    }
}
