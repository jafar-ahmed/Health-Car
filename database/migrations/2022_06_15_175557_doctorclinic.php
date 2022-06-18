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
        Schema::create('clinic' , function(Blueprint $table){
            $table->id();
            $table->foreignId('doctorid')
            ->constrained('doctor')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
            $table->rememberToken();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropDatabaseIfExists('clinic');
    }
};
