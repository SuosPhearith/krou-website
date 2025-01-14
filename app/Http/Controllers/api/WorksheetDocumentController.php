<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorksheetDocument;

class WorksheetDocumentController extends Controller
{
    // 📌 Create a new worksheet document
    public function createWorksheetDocument(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:100',
            'file_uri' => 'required|string',
            'worksheets_id' => 'required|exists:worksheets,id',
        ]);

        $worksheetDocument = WorksheetDocument::create($validatedData);

        return response()->json([
            'message' => 'Worksheet document created successfully',
            'worksheet_document' => $worksheetDocument,
        ], 201);
    }

    // 📌 Get worksheet documents with pagination and search
    public function getWorksheetDocuments(Request $request)
    {
        $query = WorksheetDocument::query();

        // Filter by worksheets_id if provided
        if ($request->has('worksheets_id')) {
            $query->where('worksheets_id', $request->input('worksheets_id'));
        }

        // Search by title if provided
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('title', 'LIKE', "%{$search}%");
        }

        // Paginate the results (default 10 per page)
        $worksheetDocuments = $query->paginate(10);

        return response()->json($worksheetDocuments);
    }

    // 📌 Get a single worksheet document by ID
    public function getWorksheetDocument($id)
    {
        $worksheetDocument = WorksheetDocument::find($id);

        if (!$worksheetDocument) {
            return response()->json(['message' => 'Worksheet document not found'], 404);
        }

        return response()->json($worksheetDocument);
    }

    // 📌 Update a worksheet document
    public function updateWorksheetDocument(Request $request, $id)
    {
        $worksheetDocument = WorksheetDocument::find($id);

        if (!$worksheetDocument) {
            return response()->json(['message' => 'Worksheet document not found'], 404);
        }

        $validatedData = $request->validate([
            'title' => 'required|string|max:100',
            'file_uri' => 'required|string',
            'worksheets_id' => 'required|exists:worksheets,id',
            'status' => 'boolean',
        ]);

        $worksheetDocument->update($validatedData);

        return response()->json([
            'message' => 'Worksheet document updated successfully',
            'worksheet_document' => $worksheetDocument,
        ]);
    }

    // 📌 Delete a worksheet document (soft delete)
    public function deleteWorksheetDocument($id)
    {
        $worksheetDocument = WorksheetDocument::find($id);

        if (!$worksheetDocument) {
            return response()->json(['message' => 'Worksheet document not found'], 404);
        }

        $worksheetDocument->delete();

        return response()->json(['message' => 'Worksheet document deleted successfully']);
    }

    // 📌 Toggle the status of a worksheet document
    public function toggleStatusWorksheetDocument($id)
    {
        $worksheetDocument = WorksheetDocument::find($id);

        if (!$worksheetDocument) {
            return response()->json(['message' => 'Worksheet document not found'], 404);
        }

        $worksheetDocument->status = !$worksheetDocument->status;
        $worksheetDocument->save();

        return response()->json([
            'message' => 'Worksheet document status updated successfully',
            'status' => $worksheetDocument->status,
        ]);
    }
}
