<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        DB::table('buku')->insert(
            [
                'judul'     => 'The Fellowship of the Ring',
                'penulis'   => 'J.R.R. Tolkien',
                'harga'     => '100000',
                'tgl_terbit'=> '29 July 1954',
            ],
            [
                'judul'     => 'The Two Towers',
                'penulis'   => 'J.R.R. Tolkien',
                'harga'     => '100000',
                'tgl_terbit'=> '11 November 1954',
            ],
            [
                'judul'     => 'The Return of the King',
                'penulis'   => 'J.R.R. Tolkien',
                'harga'     => '100000',
                'tgl_terbit'=> '20 Oktober 1955',
            ]
        );
    }
}
