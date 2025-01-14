<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Document;

class DocumentController extends Controller
{
    // 📌 Create a new document
    public function createDocument(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:100',
            'cover_uri' => 'required|string|max:100',
        ]);

        $document = Document::create($validatedData);

        return response()->json([
            'message' => 'Document created successfully',
            'document' => $document,
        ], 201);
    }

    // 📌 Get documents with pagination and search
    public function getDocuments(Request $request)
    {
        $query = Document::query();

        // Search by title if provided
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('title', 'LIKE', "%{$search}%");
        }

        // Paginate the results (default 10 per page)
        $documents = $query->paginate(10);

        return response()->json($documents);
    }

    // 📌 Get a single document by ID
    public function getDocument($id)
    {
        $document = Document::find($id);

        if (!$document) {
            return response()->json(['message' => 'Document not found'], 404);
        }

        return response()->json($document);
    }

    // 📌 Update a document
    public function updateDocument(Request $request, $id)
    {
        $document = Document::find($id);

        if (!$document) {
            return response()->json(['message' => 'Document not found'], 404);
        }

        $validatedData = $request->validate([
            'title' => 'required|string|max:100',
            'cover_uri' => 'nullable|string|max:100',
            'status' => 'boolean',
        ]);

        if (empty($validatedData['cover_uri'])) {
            unset($validatedData['cover_uri']);
        }

        $document->update($validatedData);

        return response()->json([
            'message' => 'Document updated successfully',
            'document' => $document,
        ]);
    }

    // 📌 Delete a document (soft delete)
    public function deleteDocument($id)
    {
        $document = Document::find($id);

        if (!$document) {
            return response()->json(['message' => 'Document not found'], 404);
        }

        $document->delete();

        return response()->json(['message' => 'Document deleted successfully']);
    }

    // 📌 Toggle the status of a document
    public function toggleStatusDocument($id)
    {
        $document = Document::find($id);

        if (!$document) {
            return response()->json(['message' => 'Document not found'], 404);
        }

        $document->status = !$document->status;
        $document->save();

        return response()->json([
            'message' => 'Document status updated successfully',
            'status' => $document->status,
        ]);
    }
}
