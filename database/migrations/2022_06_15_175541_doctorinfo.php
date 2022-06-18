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
        Schema::create('doctorinfo',function(Blueprint $table){
        $table->id();
        $table->foreignId('doctorid')
        ->constrained('doctor')
        ->onDelete('CASCADE')
        ->onUpdate('CASCADE');
        $table->string('description');
        $table->string('education');
        $table->string('contact');
        $table->string('status');
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
        Schema::dropIfExists('doctorinfo');
    }
};
