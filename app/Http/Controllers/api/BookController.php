<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // 📌 Create a new book
    public function createBook(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'nullable|string',
            'cover_uri' => 'required|string|max:100',
            'published_date' => 'required|date',
        ]);

        $book = Book::create($validatedData);

        return response()->json([
            'message' => 'Book created successfully',
            'book' => $book,
        ], 201);
    }

    // 📌 Get books with pagination and search by title/description
    public function getBooks(Request $request)
    {
        $query = Book::query();

        // Search by title or description if provided
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'LIKE', "%{$search}%")
                    ->orWhere('description', 'LIKE', "%{$search}%");
            });
        }

        // Paginate the results (default 20 per page)
        $books = $query->paginate(20);

        return response()->json($books);
    }

    // 📌 Get a single book by ID
    public function getBook($id)
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        return response()->json($book);
    }

    // 📌 Update a book by ID
    public function updateBook(Request $request, $id)
    {
        // Find the book by ID
        $book = Book::find($id);

        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        // Validate the request inputs
        $validatedData = $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'nullable|string',
            'cover_uri' => 'nullable|string|max:100',
            'published_date' => 'required|date',
        ]);

        // Remove 'cover_uri' and 'file_uri' from validated data if they are null or empty
        if (empty($validatedData['cover_uri'])) {
            unset($validatedData['cover_uri']);
        }

        // Update the book
        $book->update($validatedData);

        return response()->json([
            'message' => 'Book updated successfully',
            'book' => $book,
        ]);
    }


    // 📌 Delete a book by ID (soft delete)
    public function deleteBook($id)
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        $book->delete();

        return response()->json(['message' => 'Book deleted successfully']);
    }

    public function toggleStatusBook($id)
    {
        // Find the book by ID
        $book = Book::find($id);

        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        // Toggle the status
        $book->status = !$book->status;
        $book->save();

        // Return a success response
        return response()->json([
            'message' => 'Book status updated successfully',
            'status' => $book->status,
        ]);
    }
}
