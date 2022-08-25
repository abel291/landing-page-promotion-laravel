<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('promotions', function (Blueprint $table) {
			$table->id();
			$table->string('first_name');
			$table->string('last_name');
			$table->string('cedula');
			$table->string('phone');
			$table->boolean('winner')->default(0);
			$table->string('email')->unique();
			$table->foreignId('city_id');
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
		Schema::dropIfExists('promotions');
	}
};