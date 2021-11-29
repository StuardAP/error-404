<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->uuid('uuid')->primary();
            $table->uuid('employee_id')->nullable(false);
            $table->uuid('client_id')->nullable(false);
            $table->string('project_comments');
            $table->timestamp('project_start')->useCurrent()->useCurrentOnUpdate();
            $table->timestamp('project_final')->useCurrent()->useCurrentOnUpdate();
            $table->string('project_status');

            $table->foreign('employee_id')
             ->references('uuid')
             ->on('employees')
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
        Schema::dropIfExists('projects');
    }
}
