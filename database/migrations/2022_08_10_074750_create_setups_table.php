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
        Schema::create('setups', function (Blueprint $table) {
            $table->id();
            $table->string("Email");
            $table->integer("Mobile_Number");
            $table->string("First_Name");
            $table->string("FatherName");
            $table->string("last_name");
            $table->string("BirthDate");
            $table->string("Marital_Status");
            $table->string("Gender");
            $table->string("Title");
            $table->string("Country");
            $table->string("region");
            $table->string("Zone");
            $table->string("Wereda");
            $table->string("Kebele");
            $table->string("House_Number");
            $table->string("Phone");
            $table->string("fax");

            $table->bigInteger('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('vacancy_registers');
    }
};
