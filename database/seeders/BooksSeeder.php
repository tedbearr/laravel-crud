<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Books;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'code' => 'BOOK001',
                'title' => 'Harry Potter',
                'description' => 'About a witch name Harry Potter'
            ],
        ];

        Books::insert($data);
    }
}
