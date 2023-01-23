<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Fixture;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {

        // \App\Models\User::factory(5)->create();

        $user = User::factory()->create([
            'name' => 'Test Account',
            'email' => 'test@test.com',
            'password' => bcrypt('password123')
        ]);

        Fixture::create([
            'user_id' => $user->id,
            'title' => 'HRBFC v Hemel Hempstead Town',
            'home_team' => 'HRBFC',
            'away_team' => 'Hemel Hempstead Town',
            'tags' => 'NLS,HRBFC,Hemel Hempstead Town',
            'fixture_date' => '2023-12-12',
            'fixture_time' => '15:00:00',
            'competition' => 'National League South',
            'description' => 'HRBFC take on Hemel, tudors, blah blah blah...',
        ]);

        Fixture::create([
            'user_id' => $user->id,
            'title' => 'HRBFC v Braintree Town',
            'home_team' => 'HRBFC',
            'away_team' => 'Braintree Town',
            'tags' => 'NLS,HRBFC,Braintree Town',
            'fixture_date' => '2023-11-06',
            'fixture_time' => '15:00:00',
            'competition' => 'National League South',
            'description' => 'HRBFC take on Braintree, irons, blah blah blah...',
        ]);
    }
}
