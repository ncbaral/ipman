<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIprangesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ipranges', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('start_ipaddress');
			$table->integer('end_ipaddress');
			$table->integer('site_id')->unsigned();
			$table->foreign('site_id')->references('id')->on('sites');
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
		Schema::drop('ipranges');
	}

}
