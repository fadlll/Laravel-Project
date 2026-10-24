<?php

namespace Database\Factories;

use App\Models\Anngota;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnggotaFactory extends Factory
{   
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'alamat' => $this->faker->address(),
            'no_telp' => $this->faker->phoneNumber(),
            'tgl_lhr' => $this->faker->date(
                $format = 'Y-m-d', 
                $max = 'now'
            ),
        ];
    }
}