<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Faker;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker\Factory::create('id_ID');

        return [
            'nama' => Arr::random(['barang1', 'barang2', 'barang3', 'barang4', 'barang5', 'barang6', 'barang7']),
            // faker for description
            'deskripsi' => $faker->text(),
            // faker for jumlah
            'jumlah' => $faker->numberBetween(1, 100),
            // faker for condition_id
            'condition_id' => $faker->numberBetween(1, 3),
            // faker for type_id
            'type_id' => $faker->numberBetween(1, 10),
            // faker for kecacatan
            'kecacatan' => $faker->text(),
            // image from storage
            'image' => '2023-10-24-07-25-00.jpg',
        ];
    }
}
