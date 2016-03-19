<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('certifications', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('assistant_id')->unsigned();
			$table->foreign('assistant_id')
      		->references('id')->on('assistants')
      		->onDelete('cascade');
      		$table->string('certificate_code');
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
		Schema::drop('certifications');
	}

}
