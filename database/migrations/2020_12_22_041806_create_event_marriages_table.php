<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventMarriagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_marriages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')
                ->references('id')
                ->on('events')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('male_name');
            $table->string('male_nicname');
            $table->string('male_father_name');
            $table->string('male_mother_name');
            $table->string('female_name');
            $table->string('female_nickname');
            $table->string('female_father_name');
            $table->string('female_mother_name');
            $table->text('opening_word')
                ->nullable();
            $table->text('closing_word')
                ->nullable();
            $table->string('cover')
                ->nullable();
            $table->text('gallery')
                ->nullable();
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
        Schema::dropIfExists('event_marriages');
    }
}
