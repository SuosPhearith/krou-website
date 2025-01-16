<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\BookDucument;
use Illuminate\Http\Request;

class BookDocumentController extends Controller
{
    // 📌 Create a new book document
    public function createBookDocument(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:100',
            'file_uri' => 'required|string',
            'books_id' => 'required|exists:books,id',
            'coming_from' => 'required|string|max:100',
            'lecturer' => 'required|string|max:50',
            'cover_uri' => 'required|string|max:100',
            'description' => 'nullable|string',
            'published_date' => 'required|date',
        ]);

        $bookDocument = BookDucument::create($validatedData);

        return response()->json([
            'message' => 'Worksheet document created successfully',
            'book_document' => $bookDocument,
        ], 201);
    }

    // 📌 Get book documents with pagination and search
    public function getBookDocuments(Request $request)
    {
        $query = BookDucument::query();

        // Filter by books_id if provided
        if ($request->has('books_id')) {
            $query->where('books_id', $request->input('books_id'));
        }

        // Search by title if provided
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('title', 'LIKE', "%{$search}%");
        }

        // Paginate the results (default 10 per page)
        $bookDocuments = $query->paginate(10);

        return response()->json($bookDocuments);
    }

    // 📌 Get a single book document by ID
    public function getBookDucument($id)
    {
        $bookDocument = BookDucument::find($id);

        if (!$bookDocument) {
            return response()->json(['message' => 'Worksheet document not found'], 404);
        }

        return response()->json($bookDocument);
    }

    // 📌 Update a book document
    public function updateBookDocument(Request $request, $id)
    {
        $bookDocument = BookDucument::find($id);

        if (!$bookDocument) {
            return response()->json(['message' => 'Worksheet document not found'], 404);
        }

        $validatedData = $request->validate([
            'title' => 'required|string|max:100',
            'status' => 'boolean',
            'coming_from' => 'required|string|max:100',
            'lecturer' => 'required|string|max:50',
            'file_uri' => 'nullable|string|max:100',
            'cover_uri' => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'published_date' => 'required|date',
        ]);

        if (empty($validatedData['file_uri'])) {
            unset($validatedData['file_uri']);
        }
        if (empty($validatedData['cover_uri'])) {
            unset($validatedData['cover_uri']);
        }

        $bookDocument->update($validatedData);

        return response()->json([
            'message' => 'Worksheet document updated successfully',
            'book_document' => $bookDocument,
        ]);
    }

    // 📌 Delete a book document (soft delete)
    public function deleteBookDocument($id)
    {
        $bookDocument = BookDucument::find($id);

        if (!$bookDocument) {
            return response()->json(['message' => 'Worksheet document not found'], 404);
        }

        $bookDocument->delete();

        return response()->json(['message' => 'Worksheet document deleted successfully']);
    }

    // 📌 Toggle the status of a book document
    public function toggleStatusBookDocument($id)
    {
        $bookDocument = BookDucument::find($id);

        if (!$bookDocument) {
            return response()->json(['message' => 'Worksheet document not found'], 404);
        }

        $bookDocument->status = !$bookDocument->status;
        $bookDocument->save();

        return response()->json([
            'message' => 'Worksheet document status updated successfully',
            'status' => $bookDocument->status,
        ]);
    }
}
