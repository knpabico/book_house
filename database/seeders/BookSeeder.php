<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'To Kill a Mockingbird',
            'author' => 'Harper Lee',
            'isbn' => '9780061120084',
            'published_date' => '1960-07-11',
            'copies_available' => 5,
            'description' => 'A novel about the serious issues of rape and racial inequality.',
            'status' => 'Available',
        ]);

        Book::create([
            'title' => '1984',
            'author' => 'George Orwell',
            'isbn' => '9780451524935',
            'published_date' => '1949-06-08',
            'copies_available' => 0,
            'description' => 'A dystopian novel about totalitarianism and surveillance.',
            'status' => 'Not Available',
        ]);

        Book::create([
            'title' => 'The Midnight Library',
            'author' => 'Matt Haig',
            'isbn' => '9780525559474',
            'published_date' => '2020-09-29',
            'copies_available' => 6,
            'description' => 'Between life and death there is a library. In The Midnight Library, Nora Seed explores all the lives she could have lived in a journey of regret, hope, and self-discovery.',
            'status' => 'Available',
        ]);

        Book::create([
            'title' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'isbn' => '9780743273565',
            'published_date' => '1925-04-10',
            'copies_available' => 4,
            'description' => 'A story of the Jazz Age in the United States, exploring themes of decadence, idealism, resistance to change, social upheaval, and excess.',
            'status' => 'Available',
        ]);

        Book::create([
            'title' => 'Klara and the Sun',
            'author' => 'Kazuo Ishiguro',
            'isbn' => '9780593318171',
            'published_date' => '2021-03-02',
            'copies_available' => 3,
            'description' => 'A story of an artificial friend who observes the world and longs for human connection.',
            'status' => 'Available',
        ]);

        Book::create([
            'title' => 'The Paris Library',
            'author' => 'Janet Skeslien Charles',
            'isbn' => '9781982134198',
            'published_date' => '2021-02-09',
            'copies_available' => 0,
            'description' => 'Based on the true story of librarians who risked their lives during WWII to protect books and readers.',
            'status' => 'Not Available',
        ]);

        Book::create([
            'title' => 'Tomorrow, and Tomorrow, and Tomorrow',
            'author' => 'Gabrielle Zevin',
            'isbn' => '9780593321201',
            'published_date' => '2022-07-05',
            'copies_available' => 5,
            'description' => 'A novel about friendship and creativity in the world of video game design.',
            'status' => 'Available',
        ]);

        Book::create([
            'title' => 'The House of Sky and Breath',
            'author' => 'Sarah J. Maas',
            'isbn' => '9781635574074',
            'published_date' => '2022-02-15',
            'copies_available' => 7,
            'description' => 'Book 2 in the Crescent City fantasy series, filled with action, romance, and dark secrets.',
            'status' => 'Available',
        ]);

        Book::create([
            'title' => 'Fourth Wing',
            'author' => 'Rebecca Yarros',
            'isbn' => '9781649374042',
            'published_date' => '2023-05-02',
            'copies_available' => 8,
            'description' => 'A breakout fantasy novel where dragon riders fight to survive in a brutal war college.',
            'status' => 'Available',
        ]);

        Book::create([
            'title' => 'The Heaven & Earth Grocery Store',
            'author' => 'James McBride',
            'isbn' => '9780593422946',
            'published_date' => '2023-08-08',
            'copies_available' => 4,
            'description' => 'A heartwarming novel about community and justice in a small Pennsylvania town.',
            'status' => 'Available',
        ]);

        Book::create([
            'title' => 'Iron Flame',
            'author' => 'Rebecca Yarros',
            'isbn' => '9781649374172',
            'published_date' => '2023-11-07',
            'copies_available' => 6,
            'description' => 'Sequel to *Fourth Wing*, continuing the high-stakes fantasy of dragon riders.',
            'status' => 'Available',
        ]);

        Book::create([
            'title' => 'The Ministry of Time',
            'author' => 'Kaliane Bradley',
            'isbn' => '9781982192792',
            'published_date' => '2024-05-07',
            'copies_available' => 2,
            'description' => 'A speculative debut novel blending time travel, bureaucracy, and romance.',
            'status' => 'Available',
        ]);

    }
}
