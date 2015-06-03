<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('schools', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('school_name',150);
            $table->string('principal_name',150)->nullable();
            $table->string('place',150);
            $table->integer('state_id')->unsigned();;
            $table->integer('district_id')->unsigned();
            $table->string('email')->nullable();
            $table->string('address',250)->nullable();
            $table->string('contact_person', 150)->nullable();
            $table->string('contact_number', 150);
            $table->string('details', 250)->nullable();
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('district_id')->references('id')->on('district');
            $table->softDeletes();
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
		Schema::drop('schools');
	}

}
