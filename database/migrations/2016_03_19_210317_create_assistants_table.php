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
      		$table->integer('dayOne');
      		$table->integer('dayTwo');
      		$table->integer('dayThree');
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
