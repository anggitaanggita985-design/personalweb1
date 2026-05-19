<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'Personal Portfolio',
            'description' => 'Website portfolio liquid glass modern.',
            'image' => 'https://i.pinimg.com/736x/8f/cf/54/8fcf54c32c069d23e251df849ed33131.jpg',
            'technology' => 'HTML CSS'
        ]);

        Project::create([
            'title' => 'Sistem Kasir',
            'description' => 'Aplikasi kasir berbasis Laravel.',
            'image' => 'https://i.pinimg.com/1200x/66/3b/2c/663b2c88249b087aaeab7180dd19df1e.jpg',
            'technology' => 'Laravel'
        ]);

        Project::create([
            'title' => 'SignVision',
            'description' => 'AI Powered Sign Language Translator.',
            'image' => 'https://i.pinimg.com/1200x/1a/33/f6/1a33f6edb024388758297e4f7a4bb179.jpg',
            'technology' => 'AI'
        ]);
    }
}