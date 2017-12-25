<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('音乐标题');
            $table->integer('singer')->default(0)->comment('歌手id');
            $table->integer('storage')->comment('歌曲附件id');
            $table->integer('last_time')->default(0)->comment('歌曲长度');
            $table->text('lyric')->nullable()->comment('歌词');
            $table->integer('taste_count')->default(0)->comment('播放数量');
            $table->integer('share_count')->default(0)->comment('分享数量');
            $table->integer('comment_count')->default(0)->comment('评论数量');
            $table->integer('sort')->default(0)->comment('权重');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('musics');
    }
}