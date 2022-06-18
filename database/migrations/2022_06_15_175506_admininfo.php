<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admininfo',function(Blueprint $table){
          $table->id();
          $table->foreignId('adminid')
          ->constrained('admin')
          ->onDelete('cascade')
          ->onUpdate('cascade');
          $table->string('description');
          $table->string('Education');
          $table->string('statues');
          $table->softDeletes();
          $table->rememberToken();
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
        Schema::dropDatabaseIfExists('admininfo');
    }
};
