<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventGuestPresenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_guest_presence', function (Blueprint $table) {
            $table->foreignId('event_guest_id')
                ->references('id')
                ->on('event_guests')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('event_schedule_id')
                ->nullable()
                ->references('id')
                ->on('event_schedules')
                ->onUpdate('cascade')
                ->onDelete('set null');
            $table->string('type');
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
        Schema::dropIfExists('event_guest_presence');
    }
}
