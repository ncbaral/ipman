<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIpaddressTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ipaddress', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('site_id')->unsigned();
			$table->foreign('site_id')->references('id')->on('sites');
			$table->integer('ipaddress');
			$table->boolean('status');
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
		Schema::drop('ipaddress');
	}

}
