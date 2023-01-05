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
        Schema::create('vacancy_registers', function (Blueprint $table) {
            $table->id();
            $table->string("job_title");
            $table->text("vacancy_code")->default("UOG-0000");
            $table->string("vacancy_type");
            $table->string("departement_name");
            $table->string("currency");
            $table->date("date_posted");
            $table->integer("sum_of_expertise");
            $table->date("deadline");
            $table->integer("maximum_age");
            $table->string("location");
            $table->decimal("minimum_grade");
            $table->text("job_requirement");
            $table->year("year_of_graduation_starts_at");
            $table->timestamps();

            $table->foreign('departement_name')->references('name')->on('departement_names')->onDelete('cascade')->onUpdate('cascade');
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
