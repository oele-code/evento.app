<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssistantsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('assistants', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('participant_id')->unsigned();
			$table->foreign('participant_id')
      		->references('id')->on('participants')
      		->onDelete('cascade');
      		$table->integer('day_one');
      		$table->integer('day_two');
      		$table->integer('day_three');
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
		Schema::drop('assistants');
	}

}
