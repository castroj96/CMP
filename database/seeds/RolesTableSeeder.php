<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roles = [
            [
                'id' => '1',
                'description' => 'Member',
                'created_at' => \Carbon\Carbon::now()->toDateTime(),
            ],
            [
                'id' => '2',
                'description' => 'Not member',
                'created_at' => \Carbon\Carbon::now()->toDateTime(),
            ],
            [
                'id' => '1001',
                'description' => 'Admin',
                'created_at' => \Carbon\Carbon::now()->toDateTime(),
            ]
        ];

        DB::table('roles')->insert($roles);
    }
}
