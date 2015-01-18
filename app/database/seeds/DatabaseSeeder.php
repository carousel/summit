<?php

use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

        $this->call('UserTableSeeder');
        //$this->call('OldMembersTableSeeder');
	}

}

class UserTableSeeder extends Seeder
{
    public function run()
    {
        User::truncate();
        //$OldMembers = OldMembers::all();
        //foreach ($OldMembers as $om) {
            //$creds = $om->first_name . $om->last_name;
            //User::create([
                //"username" => $creds,
                //"password" => Hash::make($creds)
            //]);
        //}
        User::create([
            "username" => "paksummit",
            "password" => Hash::make("otomalj2014")
        ]);
    }   
}

class OldMembersTableSeeder extends Seeder
{
    public function run()
    {
        OldMembers::truncate();
		Eloquent::unguard();
        $faker = Faker::create();

        for ($i = 0; $i < 30; $i++) {
            OldMembers::create([
                "first_name" => $faker->name,
                "last_name" => $faker->lastName,
                "day_of_birth" => $faker->dayOfMonth,
                "month_of_birth" => $faker->month,
                "year_of_birth" => $faker->year,
                "place_of_birth" => $faker->city,
                "nationality" => $faker->country,
                "occupation" => $faker->word,
                "citizenship" => $faker->country,
                "identity_card_id" => $faker->randomDigit,
                "country" => $faker->country,
                "city" => $faker->city,
                "street_name" => $faker->word,
                "street_no" => $faker->randomDigit,
                "mobile_country_code" => $faker->randomDigit,
                "mobile_operator_no" => $faker->randomDigit,
                "mobile_no" => $faker->phoneNumber,
                "landline_country_code" => $faker->randomDigit,
                "landline_city_no" => $faker->randomDigit,
                "landline_no" => $faker->phoneNumber,

                "email" => $faker->email,
                "member_card_id" => $faker->randomNumber,

                "join_day" => $faker->dayOfMonth,
                "join_month" => $faker->month,
                "join_year" => $faker->year,
                "notes" => $faker->text
            ]);
        }
    }   
}


