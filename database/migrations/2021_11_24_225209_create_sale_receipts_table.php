<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_receipts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->uuid('sale_num')->primary();
            $table->uuid('administrator_id')->nullable(false)->index();
            $table->uuid('client_id')->nullable(false)->index();
            $table->timestamp('sales_receipts_date')->useCurrent()->useCurrentOnUpdate();

            $table->foreign('administrator_id')
             ->references('administrator_id')
             ->on('administrators')
             ->onDelete('cascade')
             ->update('cascade');

             $table->foreign('client_id')
             ->references('uuid')
             ->on('clients')
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
        Schema::dropIfExists('sale_receipts');
    }
}
