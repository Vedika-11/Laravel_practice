<?php

namespace Database\Seeders;
use App\Models\Customer;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker; 

class customersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        // to generate random data many times we use loop
        for ($i=1; $i < 6; $i++) { 
        $customer = new Customer;
        $customer->name =$faker->name;
        $customer->email =$faker->email;
        $customer->gender = 'M';
        $customer->adderss = $faker->address;
        $customer->state =$faker->state ;
        $customer->country =$faker->country ;
        $customer->DOB =$faker->date() ;
        $customer->save();
        }
        
        
    }
}
