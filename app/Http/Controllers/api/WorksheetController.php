<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Worksheet;

class WorksheetController extends Controller
{
    // 📌 Create a new worksheet
    public function createWorksheet(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'nullable|string',
            'cover_uri' => 'required|string|max:100',
            'published_date' => 'required|date',
        ]);

        $worksheet = Worksheet::create($validatedData);

        return response()->json([
            'message' => 'Worksheet created successfully',
            'worksheet' => $worksheet,
        ], 201);
    }

    // 📌 Get worksheets with pagination and search by title/description
    public function getWorksheets(Request $request)
    {
        $query = Worksheet::query();

        // Search by title or description if provided
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'LIKE', "%{$search}%")
                    ->orWhere('description', 'LIKE', "%{$search}%");
            });
        }

        // Paginate the results (default 20 per page)
        $worksheets = $query->paginate(20);

        return response()->json($worksheets);
    }

    // 📌 Get a single worksheet by ID
    public function getWorksheet($id)
    {
        $worksheet = Worksheet::find($id);

        if (!$worksheet) {
            return response()->json(['message' => 'Worksheet not found'], 404);
        }

        return response()->json($worksheet);
    }

    // 📌 Update a worksheet by ID
    public function updateWorksheet(Request $request, $id)
    {
        // Find the worksheet by ID
        $worksheet = Worksheet::find($id);

        if (!$worksheet) {
            return response()->json(['message' => 'Worksheet not found'], 404);
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

        // Update the worksheet
        $worksheet->update($validatedData);

        return response()->json([
            'message' => 'Worksheet updated successfully',
            'worksheet' => $worksheet,
        ]);
    }


    // 📌 Delete a worksheet by ID (soft delete)
    public function deleteWorksheet($id)
    {
        $worksheet = Worksheet::find($id);

        if (!$worksheet) {
            return response()->json(['message' => 'Worksheet not found'], 404);
        }

        $worksheet->delete();

        return response()->json(['message' => 'Worksheet deleted successfully']);
    }

    public function toggleStatusWorksheet($id)
    {
        // Find the worksheet by ID
        $worksheet = Worksheet::find($id);

        if (!$worksheet) {
            return response()->json(['message' => 'Worksheet not found'], 404);
        }

        // Toggle the status
        $worksheet->status = !$worksheet->status;
        $worksheet->save();

        // Return a success response
        return response()->json([
            'message' => 'Worksheet status updated successfully',
            'status' => $worksheet->status,
        ]);
    }
}
