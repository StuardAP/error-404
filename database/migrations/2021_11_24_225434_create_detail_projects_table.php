<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_projects', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->id('id');
            $table->uuid('project_id')->nullble(false)->index();
            $table->uuid('service_id')->nullble(false)->index();

            $table->foreign('project_id')
            ->references('uuid')
            ->on('projects')
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
        Schema::dropIfExists('detail_projects');
    }
}
