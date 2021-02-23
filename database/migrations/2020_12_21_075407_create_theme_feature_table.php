<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThemeFeatureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theme_feature', function (Blueprint $table) {
            $table->foreignId('theme_id')
                ->references('id')
                ->on('themes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('theme_feature_id')
                ->references('id')
                ->on('theme_features')
                ->onUpdate('cascade')
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
        Schema::dropIfExists('theme_feature');
    }
}
