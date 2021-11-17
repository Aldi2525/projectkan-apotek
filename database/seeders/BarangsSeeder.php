<?php

namespace Database\Seeders;
use App\Models\Barang;
use Faker\Extension\BarcodeExtension;
use Illuminate\Database\Seeder;

class BarangsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $kategori1 = K::create(['name' => 'Aam Amirudin']);
        $author2 = Author::create(['name' => 'Salim A Fillah']);
        $author3 = Author::create(['name' => 'MM Fauzil Adhim']);

     $book1 = Barang::create(['kode_barang' => '101',
     'nama_barang' => "komik", 'jumlah' =>'20','']);

    }
}
