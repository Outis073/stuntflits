<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Discount;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Discount::create([
            'title' => 'Eerste Aanbieding',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum turpis vitae libero laoreet, vel tempor magna consectetur. Sed eu augue vel ipsum tempus dapibus.',
            'url' => 'https://google.nl',
            'price' => '6',
            'oldPrice' => '12',
            'shop' => 'Een winkel'
        ]);

        Discount::create([
            'title' => 'Tweede Aanbieding',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum turpis vitae libero laoreet, vel tempor magna consectetur. Sed eu augue vel ipsum tempus dapibus.',
            'url' => 'https://bymillie.nl',
            'price' => '50',
            'oldPrice' => '177',
            'shop' => 'Shopppp'
        ]);        

    }
}
