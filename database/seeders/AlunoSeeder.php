<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('aluno')->insert([
            'name' => 'Pedro Henrique Kaspchark',
            'DateOfBirth' => "2004-04-05",
            'email' => "pkaspchark@gmail.com",
            'RegistrationNumber' => "1",
            'ClassCourse' => "EGS",
        ]);
    }
}
