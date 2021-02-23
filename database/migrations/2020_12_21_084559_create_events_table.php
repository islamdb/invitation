<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_type_id')
                ->nullable()
                ->references('id')
                ->on('event_types')
                ->onUpdate('cascade')
                ->onDelete('set null');
            $table->foreignId('theme_id')
                ->nullable()
                ->references('id')
                ->on('themes')
                ->onUpdate('cascade')
                ->onDelete('set null');
            $table->string('name');
            $table->string('slug')
                ->unique();
            $table->text('desc')
                ->nullable();
            $table->longText('attrs')
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
        Schema::dropIfExists('events');
    }
}
