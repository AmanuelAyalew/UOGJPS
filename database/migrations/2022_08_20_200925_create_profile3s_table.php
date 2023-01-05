<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile3s', function (Blueprint $table) {
            $table->id();


            $table->string('catagory');
            $table->string('qualification_type');
            $table->string('department');
            $table->string('qualification_title');
            $table->integer('grade');
            $table->date('date_recived');
            $table->string('diploma')->nullable()->default(null);
            $table->string('transcript')->nullable()->default(null);
            $table->string('cost_sharing')->nullable()->default(null);
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
        Schema::dropIfExists('cvvs');
    }
};
