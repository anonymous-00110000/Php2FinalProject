<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_students', function (Blueprint $table) {
            $table->string('Id_number');
            $table->primary('Id_number');
            $table->string('Lname');
            $table->string('Fname');
            $table->string('Middle')->nullable();
            $table->string('Birthday');
            $table->string('email');
            $table->string('address');
            $table->string('Mnumber');
            $table->char('gender');
            $table->string('course');
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
        Schema::dropIfExists('add_students');
    }
}
