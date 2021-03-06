<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddApprovedToPostsAndTopics extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('topics', function (Blueprint $table) {
			$table->boolean('approved')->default(1)->index();
		});

		Schema::table('posts', function (Blueprint $table) {
			$table->boolean('approved')->default(1)->index();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('topics', function (Blueprint $table) {
			$table->dropColumn('approved');
		});

		Schema::table('posts', function (Blueprint $table) {
			$table->dropColumn('approved');
		});
	}
}
