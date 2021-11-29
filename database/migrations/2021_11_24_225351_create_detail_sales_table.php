<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_sales', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->id('id');
            $table->uuid('sale_receipts_num')->nullable(false)->index();
            $table->uuid('service_id')->nullable(false)->index();

            $table->foreign('sale_receipts_num')
             ->references('sale_num')
             ->on('sale_receipts')
             ->onDelete('cascade')
             ->update('cascade');

             $table->foreign('service_id')
             ->references('uuid')
             ->on('services')
             ->onDelete('cascade')
             ->update('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_sales');
    }
}
