<?php

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinces = [
            [
                'id' => '1',
                'name' => 'San Jose',
                'created_at' => \Carbon\Carbon::now()->toDateTime(),
            ],
            [
                'id' => '2',
                'name' => 'Alajuela',
                'created_at' => \Carbon\Carbon::now()->toDateTime(),
            ],
            [
                'id' => '3',
                'name' => 'Cartago',
                'created_at' => \Carbon\Carbon::now()->toDateTime(),
            ],
            [
                'id' => '4',
                'name' => 'Heredia',
                'created_at' => \Carbon\Carbon::now()->toDateTime(),
            ],
            [
                'id' => '5',
                'name' => 'Guanacaste',
                'created_at' => \Carbon\Carbon::now()->toDateTime(),
            ],
            [
                'id' => '6',
                'name' => 'Puntarenas',
                'created_at' => \Carbon\Carbon::now()->toDateTime(),
            ],
            [
                'id' => '7',
                'name' => 'Limón',
                'created_at' => \Carbon\Carbon::now()->toDateTime(),
            ],
        ];

        DB::table('provinces')->insert($provinces);
    }
}
