<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('station_id')->unsigned();
            $table->integer('exit_id')->unsigned();
            $table->integer('spot_id')->unsigned();
            $table->integer('child_area_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->boolean('publish_flag')->default(false);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->softDeletes();
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
            $table->foreign('station_id')
                    ->references('id')
                    ->on('stations')
                    ->onDelete('cascade');
            $table->foreign('exit_id')
                    ->references('id')
                    ->on('exits')
                    ->onDelete('cascade');
            $table->foreign('spot_id')
                    ->references('id')
                    ->on('spots')
                    ->onDelete('cascade');
            $table->foreign('child_area_id')
                    ->references('id')
                    ->on('child_areas')
                    ->onDelete('cascade');
            $table->foreign('category_id')
                    ->references('id')
                    ->on('categories')
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
        Schema::dropIfExists('posts');
    }
}
