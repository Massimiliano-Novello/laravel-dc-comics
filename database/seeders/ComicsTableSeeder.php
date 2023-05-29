<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics_array = config('comics');

        foreach($comics_array as $comics_item) {
            $comics = new Comic();
            $comics->titolo = $comics_item['title'];
            $comics->descrizione = $comics_item['description'];
            $comics->immagine = $comics_item['thumb'];
            $comics->prezzo = $comics_item['price'];
            $comics->serie = $comics_item['series'];
            $comics->uscita = $comics_item['sale_date'];
            $comics->tipo = $comics_item['type'];
            $comics->save();

        }
    }
}
