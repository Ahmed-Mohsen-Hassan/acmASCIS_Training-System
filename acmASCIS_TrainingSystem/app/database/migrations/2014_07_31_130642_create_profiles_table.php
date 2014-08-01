<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('real_name');
			$table->string('country');
			$table->string('photo');
			$table->integer('level');
			$table->integer('problems_count');
			$table->integer('contest_count');
			$table->integer('problem_id');
			$table->integer('contest_id');
			$table->integer('uva_id');
			$table->integer('uva_count');
			$table->integer('livearchive_id');
			$table->integer('livearchive_count');
			$table->string('spoj_username');
			$table->integer('spoj_count');
			$table->string('codeforces_username');
			$table->integer('codeforces_count');
			$table->string('topcoder_username');
			$table->integer('topcoder_count');
			$table->string('badge');
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
		Schema::drop('profiles');
	}

}
