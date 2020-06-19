<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('name');
            $table->double('weight');
            $table->string('photo');
            $table->enum('category', ['CAT', 'DOG', 'RABBIT', 'STINGRAY']);
            $table->enum('status', ['AVAILABLE', 'CHECKEDOUT'])->default('AVAILABLE');
            $table->dateTime('checkout_date')->nullable();
            $table->dateTime('checkin_date')->nullable();
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
        Schema::dropIfExists('pets');
    }
}
