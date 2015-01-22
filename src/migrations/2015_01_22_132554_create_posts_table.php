<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function($t) {
			$t->increments('id');
			$t->integer('user_id')->unsigned();
			$t->string('title', 90);
			$t->string('description', 150);
			$t->string('image', 68);
			$t->text('body');

			$t->foreign('user_id')->references('id')->on('users');

			$t->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('posts', function($t) {
			$t->dropForeign('posts_user_id_foreign');
		});
		Schema::drop('posts');
	}

}
