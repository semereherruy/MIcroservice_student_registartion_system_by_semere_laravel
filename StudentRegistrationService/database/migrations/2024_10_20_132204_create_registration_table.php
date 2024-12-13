<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('registration')) {
            Schema::create('registration', function (Blueprint $table) {
                $table->bigIncrements('registrationId'); // Correct method for the primary key
                $table->unsignedBigInteger('userId'); // Foreign key for users
                $table->unsignedBigInteger('courseId'); // Foreign key for courses
                $table->date('registrationDate'); // Date of registration
                $table->enum('status', ['active', 'cancelled']); // Registration status
                $table->timestamps(); // Adds 'created_at' and 'updated_at'
            });
        }
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registration');
    }
}
