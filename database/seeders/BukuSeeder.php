<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buku;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buku::create([
        //     'judul'     => 'The Fellowship of the Ring',
        //     'penulis'   => 'J.R.R. Tolkien',
        //     'harga'     => '100000',
        //     'tgl_terbit'=> '29 July 1954',
        // ]);

        // Buku::create([
        //     'judul'     => 'The Two Towers',
        //     'penulis'   => 'J.R.R. Tolkien',
        //     'harga'     => '100000',
        //     'tgl_terbit'=> '11 November 1954',
        // ]);

        // Buku::create([
        //     'judul'     => 'The Return of the King',
        //     'penulis'   => 'J.R.R. Tolkien',
        //     'harga'     => '100000',
        //     'tgl_terbit'=> '20 Oktober 1955',
        // ]);

        Buku::create([
            'judul'     => 'A Song of Ice and Fire',
            'penulis'   => 'George R.R. Martin',
            'harga'     => '110000',
            'tgl_terbit'=> '11 January 1996',
        ]);

        Buku::create([
            'judul'     => 'A Clash of Kings',
            'penulis'   => 'George R.R. Martin',
            'harga'     => '110000',
            'tgl_terbit'=> '12 February 1998',
        ]);

        Buku::create([
            'judul'     => 'A Dance with Dragons',
            'penulis'   => 'George R.R. Martin',
            'harga'     => '110000',
            'tgl_terbit'=> '23 March 1999',
        ]);
    }
}
