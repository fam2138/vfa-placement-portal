<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFellowSkillsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fellowSkills', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('fellow_id')->nullable();
			// $table->foreign('fellow_id')->references('id')->on('fellows')->onDelete('restrict');
			$table->string('skill', 140);
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
		Schema::drop('fellowSkills');
	}

}
