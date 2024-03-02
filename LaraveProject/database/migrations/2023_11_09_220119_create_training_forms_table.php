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
        Schema::create('training_forms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->string('modeOfTraining');
            $table->string('courseDate');
            $table->integer('numberOfParticipants');
            $table->string('sponsorship');
            $table->string('additionalMessage');
            $table->string('email');
            $table->string('whatsappPhone');
            $table->timestamps();
            $table->foreign('course_id')
                ->references('id')
                ->on('courses')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('training_forms');
    }
};
