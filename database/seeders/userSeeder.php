<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File; // ✅ Needed to read the file
use App\Models\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ✅ Load the JSON file
        $json = File::get(path:'database/json/users.json');

        // ✅ Convert JSON into a collection
        $users = collect(json_decode($json));

        // ✅ Insert each user
        $users->each(function ($user) {
            User::create([
                'name' => $user->name,
                'email' => $user->email,
                'age' => $user->age,
                'city' => $user->city
            ]);
        });
    }
}
