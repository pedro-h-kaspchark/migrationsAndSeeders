<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('post')->insert([
            'postTitle' => 'Laboratório em ruinas',
            'author' => 'Dr. Soloman',
            'publicationDate' => '2025-05-13',
            'content' => 'Virus escapa do laboratório',
            'tags' => 'Medo',
        ]);
    }
}
