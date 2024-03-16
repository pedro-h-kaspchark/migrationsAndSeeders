<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BibliotecaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('biblioteca')->insert([
            'title' => 'A Arte da guerra',
            'authorPublisher' => 'Sun Tzu',
            'publicationDate' => '1527-01-01',
            'genreType' => 'Tratado, não ficção',
            'avaibleCopies' => '0',
        ]);
    }
}
