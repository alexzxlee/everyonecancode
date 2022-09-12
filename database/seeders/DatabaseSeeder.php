<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // \App\Models\Customer::factory(10)->create();
        // \App\Models\Customer::factory()->create([
        //     'name' => Str::random(10),
        //     'fund' => rand(1, 20)*100,
        //     // 'created_at' => $datetime->format('Y-m-d h:i:s'),
        //     'created_at' => now('PST'),
        //     'updated_at' => now('PST'),
        // ]);

        // $faker = Faker::create();

        \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //         'name' => $faker->name(),
        //         'email' => $faker->unique()->safeEmail(),
        //         'email_verified_at' => now('PST'),
        //         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //         'remember_token' => Str::random(10),
        //         'created_at' => now('PST'),
        //         'updated_at' => now('PST'),
        // ]);

        $faker = Faker::create();

        // Way#1 writing & making seeder
        for ($i=0; $i<10; $i++) {
            // $tz_object = new DateTimeZone('PST');
            // $datetime = new DateTime();
            // $datetime->setTimezone($tz_object);

            DB::table('customers')->insert([
                'name' => $faker->name(),
                'fund' => rand(1, 20)*100,
                // 'created_at' => $datetime->format('Y-m-d h:i:s'),
                'created_at' => now('PST'),
                'updated_at' => now('PST'),
            ]);
        }

        // for ($i=0; $i<10; $i++) {
        //     DB::table('users')->insert([
        //         'name' => $faker->name(),
        //         'email' => $faker->unique()->safeEmail(),
        //         // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //         // 'name' => Str::random(10),
        //         // 'email' => Str::random(10).'@gmail.com',
        //         'password' => Hash::make('password'),
        //         'email_verified_at' => now('PST'),
        //         'remember_token' => Str::random(10),
        //         'created_at' => now('PST'),
        //         'updated_at' => now('PST'),
        //     ]);
        // }
    }
}
