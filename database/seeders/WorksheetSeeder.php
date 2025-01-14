<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Worksheet;

class WorksheetSeeder extends Seeder
{
    public function run()
    {
        $worksheets = [
            [
                'title' => 'សន្លឹកកិច្ចការថ្នាក់ទី៧',
                'description' => 'សន្លឹកកិច្ចការថ្នាក់ទី៧ ប្រចាំឆ្នាំសិក្សា 2025',
                'cover_uri' => '12345_1736874787866_worksheet.jpg',
                'published_date' => '2025-01-01 00:00:00',
                'coming_from' => 'វិទ្យាល័យស្វាយរៀង',
                'lecturer' => 'សុខ លីណា',
                'file_uri' => '12345_1736874787866_worksheet.jpg',
                'status' => true,
            ],
            [
                'title' => 'សន្លឹកកិច្ចការថ្នាក់ទី៨',
                'description' => 'សន្លឹកកិច្ចការថ្នាក់ទី៨ ប្រចាំឆ្នាំសិក្សា 2025',
                'cover_uri' => '12345_1736874787866_worksheet.jpg',
                'published_date' => '2025-02-01 00:00:00',
                'coming_from' => 'វិទ្យាល័យបាត់ដំបង',
                'lecturer' => 'សុវណ្ណារិទ្ធិ',
                'file_uri' => '12345_1736874787866_worksheet.jpg',
                'status' => true,
            ],
            [
                'title' => 'សន្លឹកកិច្ចការថ្នាក់ទី៩',
                'description' => 'សន្លឹកកិច្ចការថ្នាក់ទី៩ ប្រចាំឆ្នាំសិក្សា 2025',
                'cover_uri' => '12345_1736874787866_worksheet.jpg',
                'published_date' => '2025-03-01 00:00:00',
                'coming_from' => 'វិទ្យាល័យកំពង់ចាម',
                'lecturer' => 'ម៉ក់ សុគន្ធា',
                'file_uri' => '12345_1736874787866_worksheet.jpg',
                'status' => true,
            ],
            [
                'title' => 'សន្លឹកកិច្ចការថ្នាក់ទី១០',
                'description' => 'សន្លឹកកិច្ចការថ្នាក់ទី១០ ប្រចាំឆ្នាំសិក្សា 2025',
                'cover_uri' => '12345_1736874787866_worksheet.jpg',
                'published_date' => '2025-04-01 00:00:00',
                'coming_from' => 'វិទ្យាល័យសៀមរាប',
                'lecturer' => 'វ៉ាន់ សុវណ្ណា',
                'file_uri' => '12345_1736874787866_worksheet.jpg',
                'status' => true,
            ],
            [
                'title' => 'សន្លឹកកិច្ចការថ្នាក់ទី១១',
                'description' => 'សន្លឹកកិច្ចការថ្នាក់ទី១១ ប្រចាំឆ្នាំសិក្សា 2025',
                'cover_uri' => '12345_1736874787866_worksheet.jpg',
                'published_date' => '2025-05-01 00:00:00',
                'coming_from' => 'វិទ្យាល័យកំពង់ធំ',
                'lecturer' => 'សៅ ចន្ថា',
                'file_uri' => '12345_1736874787866_worksheet.jpg',
                'status' => true,
            ],
            [
                'title' => 'សន្លឹកកិច្ចការថ្នាក់ទី១២',
                'description' => 'សន្លឹកកិច្ចការថ្នាក់ទី១២ ប្រចាំឆ្នាំសិក្សា 2025',
                'cover_uri' => '12345_1736874787866_worksheet.jpg',
                'published_date' => '2025-06-01 00:00:00',
                'coming_from' => 'វិទ្យាល័យភ្នំពេញ',
                'lecturer' => 'ហួត ពិសី',
                'file_uri' => '12345_1736874787866_worksheet.jpg',
                'status' => true,
            ],
            [
                'title' => 'សន្លឹកកិច្ចការថ្នាក់ទី១៣',
                'description' => 'សន្លឹកកិច្ចការថ្នាក់ទី១៣ ប្រចាំឆ្នាំសិក្សា 2025',
                'cover_uri' => '12345_1736874787866_worksheet.jpg',
                'published_date' => '2025-07-01 00:00:00',
                'coming_from' => 'វិទ្យាល័យកំពង់ស្ពឺ',
                'lecturer' => 'សំ សុភា',
                'file_uri' => '12345_1736874787866_worksheet.jpg',
                'status' => true,
            ],
            [
                'title' => 'សន្លឹកកិច្ចការថ្នាក់ទី១៤',
                'description' => 'សន្លឹកកិច្ចការថ្នាក់ទី១៤ ប្រចាំឆ្នាំសិក្សា 2025',
                'cover_uri' => '12345_1736874787866_worksheet.jpg',
                'published_date' => '2025-08-01 00:00:00',
                'coming_from' => 'វិទ្យាល័យប៉ៃលិន',
                'lecturer' => 'អឿន វាសនា',
                'file_uri' => '12345_1736874787866_worksheet.jpg',
                'status' => true,
            ],
        ];

        // Insert worksheets into the database
        foreach ($worksheets as $worksheet) {
            Worksheet::create($worksheet);
        }
    }
}
