<?php

use Illuminate\Database\Seeder;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $gender = [
            [
                'id' => '1',
                'description' => 'Male',
                'created_at' => \Carbon\Carbon::now()->toDateTime(),
            ],
            [
                'id' => '2',
                'description' => 'Female',
                'created_at' => \Carbon\Carbon::now()->toDateTime(),
            ]
        ];

        DB::table('genders')->insert($gender);
    }
}
