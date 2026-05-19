<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;
class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

public function run(): void
{
    Contact::create([
        'instagram' => '@anggy_jeaquerjaquez',
        'github' => 'github.com/anggy',
        'email' => 'anggitaanggita985@gmail.com',
        'whatsapp' => '08812617329'
    ]);
}
}