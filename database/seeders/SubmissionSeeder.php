<?php

namespace Database\Seeders;

use App\Models\Submission;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $users = User::inRandomOrder()->limit(rand(50, 100))->get();

        foreach ($users as $user) {
            Submission::factory()->count(rand(10, 20))->create([
                'user_id' => $user->id,
            ]);
        }
    }
}
