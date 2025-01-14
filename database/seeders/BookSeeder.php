<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run()
    {
        $books = [
            [
                'title' => 'សៀវភៅវិទ្យាសាស្ត្រ ថ្នាក់ទី៧',
                'description' => 'សៀវភៅវិទ្យាសាស្ត្រ ថ្នាក់ទី៧ ប្រចាំឆ្នាំសិក្សា 2025',
                'cover_uri' => '12345_1736874587768_book.jpg',
                'published_date' => '2025-01-01 00:00:00',
                'coming_from' => 'វិទ្យាល័យស្វាយរៀង',
                'lecturer' => 'សុខ លីណា',
                'file_uri' => '12345_1736874587768_book.jpg',
                'status' => true,
            ],
            [
                'title' => 'សៀវភៅគណិតវិទ្យា ថ្នាក់ទី៨',
                'description' => 'សៀវភៅគណិតវិទ្យា ថ្នាក់ទី៨ ប្រចាំឆ្នាំសិក្សា 2025',
                'cover_uri' => '12345_1736874587768_book.jpg',
                'published_date' => '2025-02-01 00:00:00',
                'coming_from' => 'វិទ្យាល័យបាត់ដំបង',
                'lecturer' => 'សុវណ្ណារិទ្ធិ',
                'file_uri' => '12345_1736874587768_book.jpg',
                'status' => true,
            ],
            [
                'title' => 'សៀវភៅប្រវត្តិសាស្ត្រ ថ្នាក់ទី៩',
                'description' => 'សៀវភៅប្រវត្តិសាស្ត្រ ថ្នាក់ទី៩ ប្រចាំឆ្នាំសិក្សា 2025',
                'cover_uri' => '12345_1736874587768_book.jpg',
                'published_date' => '2025-03-01 00:00:00',
                'coming_from' => 'វិទ្យាល័យកំពង់ចាម',
                'lecturer' => 'ម៉ក់ សុគន្ធា',
                'file_uri' => '12345_1736874587768_book.jpg',
                'status' => true,
            ],
            [
                'title' => 'សៀវភៅភាសាខ្មែរ ថ្នាក់ទី១០',
                'description' => 'សៀវភៅភាសាខ្មែរ ថ្នាក់ទី១០ ប្រចាំឆ្នាំសិក្សា 2025',
                'cover_uri' => '12345_1736874587768_book.jpg',
                'published_date' => '2025-04-01 00:00:00',
                'coming_from' => 'វិទ្យាល័យសៀមរាប',
                'lecturer' => 'វ៉ាន់ សុវណ្ណា',
                'file_uri' => '12345_1736874587768_book.jpg',
                'status' => true,
            ],
            [
                'title' => 'សៀវភៅជីវវិទ្យា ថ្នាក់ទី១១',
                'description' => 'សៀវភៅជីវវិទ្យា ថ្នាក់ទី១១ ប្រចាំឆ្នាំសិក្សា 2025',
                'cover_uri' => '12345_1736874587768_book.jpg',
                'published_date' => '2025-05-01 00:00:00',
                'coming_from' => 'វិទ្យាល័យកំពង់ធំ',
                'lecturer' => 'សៅ ចន្ថា',
                'file_uri' => '12345_1736874587768_book.jpg',
                'status' => true,
            ],
            [
                'title' => 'សៀវភៅវិទ្យាសាស្ត្រ ថ្នាក់ទី១២',
                'description' => 'សៀវភៅវិទ្យាសាស្ត្រ ថ្នាក់ទី១២ ប្រចាំឆ្នាំសិក្សា 2025',
                'cover_uri' => '12345_1736874587768_book.jpg',
                'published_date' => '2025-06-01 00:00:00',
                'coming_from' => 'វិទ្យាល័យភ្នំពេញ',
                'lecturer' => 'ហួត ពិសី',
                'file_uri' => '12345_1736874587768_book.jpg',
                'status' => true,
            ],
            [
                'title' => 'សៀវភៅអង់គ្លេស ថ្នាក់ទី១៣',
                'description' => 'សៀវភៅអង់គ្លេស ថ្នាក់ទី១៣ ប្រចាំឆ្នាំសិក្សា 2025',
                'cover_uri' => '12345_1736874587768_book.jpg',
                'published_date' => '2025-07-01 00:00:00',
                'coming_from' => 'វិទ្យាល័យកំពង់ស្ពឺ',
                'lecturer' => 'សំ សុភា',
                'file_uri' => '12345_1736874587768_book.jpg',
                'status' => true,
            ],
            [
                'title' => 'សៀវភៅគណិតវិទ្យា ថ្នាក់ទី១៤',
                'description' => 'សៀវភៅគណិតវិទ្យា ថ្នាក់ទី១៤ ប្រចាំឆ្នាំសិក្សា 2025',
                'cover_uri' => '12345_1736874587768_book.jpg',
                'published_date' => '2025-08-01 00:00:00',
                'coming_from' => 'វិទ្យាល័យប៉ៃលិន',
                'lecturer' => 'អឿន វាសនា',
                'file_uri' => '12345_1736874587768_book.jpg',
                'status' => true,
            ],
        ];

        // Insert books into the database
        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
