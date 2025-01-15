<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Document;

class DocumentSeeder extends Seeder
{
    public function run()
    {
        $documents = [
            [
                'title' => 'យុទ្ធវិធីបង្រៀន',
                'cover_uri' => 'uploads/12345_1736874358185_icon2.png',
                'status' => true,
            ],
            [
                'title' => 'វិធីសាស្រ្តបង្រៀន',
                'cover_uri' => 'uploads/12345_1736874358185_icon2.png',
                'status' => true,
            ],
            [
                'title' => 'ឯកសារបណ្តុះបណ្តាលគ្រូ មធ្យម',
                'cover_uri' => 'uploads/12345_1736874358185_icon2.png',
                'status' => true,
            ],
            [
                'title' => 'ឯកសារបណ្តុះបណ្តាលគ្រូ បឋម',
                'cover_uri' => 'uploads/12345_1736874358185_icon2.png',
                'status' => true,
            ],
        ];

        // Insert documents into the database
        foreach ($documents as $document) {
            Document::create($document);
        }
    }
}
