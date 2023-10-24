<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'baik'
            ],
            [
                'nama' => 'layak',
            ],
            [
                'nama' => 'rusak'
            ]
        ];

        foreach ($data as $key => $value) {
            Condition::create($value);
        }
    }
}
