<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHotels extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
            Schema::create('hotel', function($table) {
                $table->increments('id');
                $table->text('address');
                $table->string('location', 50);
                $table->timestamps();
                $table->softDeletes();
            });
    }

    /**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
            Schema::drop('hotel');
	}

}
