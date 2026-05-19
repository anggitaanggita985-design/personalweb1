<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
 use App\Models\Experience;
class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

public function run(): void
{
    Experience::create([
        'title' => 'Frontend Developer',
        'company' => 'Freelance',
        'description' => 'Membuat website modern dengan desain glassmorphism.'
    ]);
}
}
