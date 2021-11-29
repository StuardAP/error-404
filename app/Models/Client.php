<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;
use Illuminate\Support\Str;

class Client extends Model
{
    use HasFactory, HasUuid;

    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey='uuid';
    protected $fillable = ['uuid','client_dni','client_name','client_lastname','client_phone','client_address'];
    protected $table = 'clients';

    public function projects()
    {
        return $this->hasMany(Proyect::class);
    }

    public function sales_receipts()
    {
        return $this->hasMany('App\Models\SaleReceipt');
    }
}
