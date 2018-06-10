<?php

use Illuminate\Database\Seeder;

use App\Employee;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 1; $i < 101; $i++) {
        	$emp = Employee::find($i);
        	$emp->name = $faker->firstName($gender = null) . " " .$faker->lastName;
        	$emp->address = $faker->streetAddress;
            $emp->save();
        }
    }
}
