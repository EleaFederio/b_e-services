<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residents', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->string('suffix')->nullable();
            $table->date('birth_date');
            $table->string('phone_number');
            $table->string('email');
            $table->string('birth_place');
//            zone id
            $table->string('gender');
            $table->string('skills')->nullable();
//            household id
            $table->string('former_address')->nullable();
            $table->string('image_url')->nullable();
//            highest education attainment
            $table->integer('length_of_stay')->nullable(); // must be start  date
            $table->integer('occupation');
            $table->decimal('monthly_income', 9, 2);
//            blood type must be relational
//            marital status must be relational
            $table->string('religion')->nullable();
            $table->string('nationality'); // should use nationality api
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
        Schema::dropIfExists('residents');
    }
}
