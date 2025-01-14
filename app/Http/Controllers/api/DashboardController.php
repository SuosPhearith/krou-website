<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\BookDucument;
use App\Models\Document;
use App\Models\Lecturer;
use App\Models\Video;
use App\Models\Worksheet;
use App\Models\WorksheetDocument;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getCounts(): JsonResponse
    {
        return response()->json([
            'worksheets' => Worksheet::count(),
            'worksheet_documents' => WorksheetDocument::count(),
            'books' => Book::count(),
            'book_documents' => BookDucument::count(),
            'documents' => Document::count(),
            'lecturers' => Lecturer::count(),
            'videos' => Video::count(),
        ]);
    }
}
