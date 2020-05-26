<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $moviesData = [
            [
                'name' => 'The Shawshank Redemption',
                'slug' => 'Shawshank',
                'description' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
                'release_date' => '1994',
                'country_code' => 'US',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'The Godfather',
                'slug' => 'The_Godfather',
                'description' => 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.                ',
                'release_date' => '1972',
                'country_code' => 'US',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'The Dark Knight',
                'slug' => 'The_Dark_Knight',
                'description' => 'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.',
                'release_date' => '2008',
                'country_code' => 'US',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => '12 Angry Men',
                'slug' => 'Angry_Men',
                'description' => 'A jury holdout attempts to prevent a miscarriage of justice by forcing his colleagues to reconsider the evidence.
                ',
                'release_date' => '1957',
                'country_code' => 'US',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        DB::table('movies')->insert($moviesData);
    }
}
