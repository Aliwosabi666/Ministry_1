<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLebanonStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lebanon_students', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->text('name');
            $table->text('year_of_dispatch');
            $table->text('Degree');
            $table->text('specialization');
            $table->text('quarterly_grant');
            $table->text('observation');
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
        Schema::dropIfExists('lebanon_students');
    }
}
