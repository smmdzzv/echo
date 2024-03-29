<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->char('audio_file_id', 26)->index();
            $table->char('clip_id', 26)->index()->nullable();

            $table->string('title', 100);
            $table->string('english_title', 100)->nullable();
            $table->char('year', 5);
            $table->char('label', 100)->nullable();
            $table->text('lyrics')->nullable();
            $table->unsignedInteger('bitrate');
            $table->unsignedInteger('sample_rate');
            $table->unsignedDouble('compression_ratio')->nullable();
            $table->tinyInteger('channels')->nullable();
            $table->string('channel_mode')->nullable();
            $table->string('encoder_options')->nullable();
            $table->string('codec')->nullable();
            $table->string('encoder')->nullable();
            $table->boolean('lossless')->nullable();
            $table->unsignedBigInteger('size');
            $table->unsignedInteger('playtime_seconds');
            $table->string('extension', 30);
            $table->boolean('allow_download')->default(true);

            $table->char('cover_image_id', 26)->index()->nullable();

            $table->counters();

            $table->commonFields();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
}
