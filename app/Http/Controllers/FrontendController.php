<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookDucument;
use App\Models\Document;
use App\Models\Lecturer;
use App\Models\Video;
use App\Models\Worksheet;
use App\Models\WorksheetDocument;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        // Get the newest 4 documents with status = true
        $documents = Document::where('status', true)
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();

        // Get the newest 4 worksheets with status = true
        $worksheets = Worksheet::where('status', true)
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();

        // Get the newest 4 books with status = true
        $books = Book::where('status', true)
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();

        // Pass all collections to the view
        return view('frontend.home', compact('documents', 'worksheets', 'books'));
    }

    public function worksheet()
    {
        // Get worksheets with pagination of 12, sorted by ID in descending order
        $worksheets = Worksheet::where('status', true)
            ->orderBy('id', 'desc')
            ->paginate(16);

        // Pass the paginated worksheets to the view
        return view('frontend.worksheet', compact('worksheets'));
    }


    public function worksheetDetail($id)
    {
        // Find the worksheet by ID
        $worksheet = Worksheet::findOrFail($id);

        // Get related worksheet documents with status = true
        $documents = WorksheetDocument::where('worksheets_id', $id)
            ->where('status', true)
            ->get();

        // Pass both worksheet and documents to the view
        return view('frontend.worksheetDetail', compact('worksheet', 'documents'));
    }

    public function video($documentId)
    {
        // Get the selected document by ID
        $document = Document::findOrFail($documentId);

        // Get all documents with status = true
        $allDocuments = Document::where('status', true)->get();

        // Get all lecturers related to this document and include their videos
        $lecturers = Lecturer::where('documents_id', $documentId)
            ->where('status', true)
            ->with(['videos' => function ($query) {
                $query->where('status', true);
            }])
            ->get();

        // Pass data to the view
        return view('frontend.video', compact('document', 'allDocuments', 'lecturers'));
    }


    public function videoDetail($lecturerId)
    {
        // Find the lecturer by ID
        $lecturer = Lecturer::findOrFail($lecturerId);

        // Get all videos related to the lecturer with status = true
        $videos = Video::where('lecturers_id', $lecturerId)
            ->where('status', true)
            ->get();

        // Pass the lecturer and videos to the view
        return view('frontend.videoDetail', compact('lecturer', 'videos'));
    }

    public function book()
    {
        // Get books with pagination of 16, sorted by ID in descending order
        $books = Book::where('status', true)
            ->orderBy('id', 'desc')
            ->paginate(16);

        // Pass the paginated books to the view
        return view('frontend.book', compact('books'));
    }

    public function bookDetail($id)
    {
        // Find the book by ID
        $book = Book::findOrFail($id);

        // Get related book documents with status = true
        $documents = BookDucument::where('books_id', $id)
            ->where('status', true)
            ->get();

        // Pass both book and documents to the view
        return view('frontend.bookDetail', compact('book', 'documents'));
    }
}
