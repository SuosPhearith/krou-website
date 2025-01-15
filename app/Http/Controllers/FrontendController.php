<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Document;
use App\Models\Worksheet;
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
        // Find the worksheet by ID, or throw a 404 if not found
        $worksheet = Worksheet::findOrFail($id);

        // Pass the worksheet to the view
        return view('frontend.worksheetDetail', compact('worksheet'));
    }

    public function video()
    {
        return view('frontend.video');
    }
    public function videoDetail()
    {
        return view('frontend.videoDetail');
    }
    public function book()
    {
        return view('frontend.book');
    }
    public function bookDetail()
    {
        return view('frontend.bookDetail');
    }
}
