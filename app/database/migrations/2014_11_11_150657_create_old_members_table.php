<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOldMembersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create("old_members",function($table){
            $table->increments("id");

            $table->string("first_name");
            $table->string("last_name");

            // nadimak
            $table->integer("day_of_birth");
            $table->integer("month_of_birth");
            $table->integer("year_of_birth");
            $table->string("place_of_birth");

            $table->string("nationality");
            $table->string("occupation");
            $table->string("citizenship");

            $table->string("identity_card_id");
            $table->string("country");
            $table->string("city");
            $table->string("street_name");
            $table->string("street_no");

            $table->integer("mobile_country_code");
            $table->integer("mobile_operator_no");
            $table->integer("mobile_no");

            $table->integer("landline_country_code");
            $table->integer("landline_city_no");
            $table->integer("landline_no");

            $table->string("email")->unique();
            $table->integer("member_card_id");

            $table->integer("join_day");
            $table->integer("join_month");
            $table->integer("join_year");

            $table->text("notes");

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
        Schema::drop("old_members");
	}

}
