<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function($t) {
			$t->increments('id');
			$t->integer('user_id')->unsigned();
			$t->string('first_name', 40);
			$t->string('last_name', 40);
			$t->string('avatar', 68);
			
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
		Schema::table('profiles', function($t) {
			$t->dropForeign('profiles_user_id_foreign');
		});
		Schema::drop('profiles');
	}

}
