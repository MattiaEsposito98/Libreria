<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class BooksTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        // $genre = ['Giallo', 'Horror', 'Fantascienza', 'Fantasy', 'Romanzo', 'Biografia', 'Storico', 'Thriller'];
        for ($i = 0; $i < 12; $i++) {
            $newBook = new Book();
            $newBook->title = $faker->sentence(3); // Titolo con 3 parole
            $newBook->author = $faker->name; // Nome dell'autore
            $newBook->published_year = $faker->year(); // Anno di pubblicazione
            $newBook->genre = $faker->randomElement(['Giallo', 'Horror', 'Fantascienza', 'Fantasy', 'Romanzo', 'Biografia', 'Storico', 'Thriller']); // Genere (una sola parola)
            $newBook->description = $faker->paragraph(); // Descrizione
            $newBook->isbn = $faker->unique()->isbn10(); // ISBN-10, unico
            $newBook->save(); // Salva il libro nel database
        }
    }
}
