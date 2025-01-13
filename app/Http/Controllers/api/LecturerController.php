<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lecturer;

class LecturerController extends Controller
{
    // 📌 Create a new lecturer
    public function createLecturer(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'coming_from' => 'required|string|max:150',
            'status' => 'boolean',
            'documents_id' => 'required|exists:documents,id',
        ]);

        $lecturer = Lecturer::create($validatedData);

        return response()->json([
            'message' => 'Lecturer created successfully',
            'lecturer' => $lecturer,
        ], 201);
    }

    // 📌 Get lecturers with pagination and search
    public function getLecturers(Request $request)
    {
        $query = Lecturer::query();

        // Filter by documents_id if provided
        if ($request->has('documents_id')) {
            $query->where('documents_id', $request->input('documents_id'));
        }

        // Search by name if provided
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name', 'LIKE', "%{$search}%");
        }

        // Paginate the results (default 10 per page)
        $lecturers = $query->paginate(10);

        return response()->json($lecturers);
    }

    // 📌 Get a single lecturer by ID
    public function getLecturer($id)
    {
        $lecturer = Lecturer::find($id);

        if (!$lecturer) {
            return response()->json(['message' => 'Lecturer not found'], 404);
        }

        return response()->json($lecturer);
    }

    // 📌 Update a lecturer
    public function updateLecturer(Request $request, $id)
    {
        $lecturer = Lecturer::find($id);

        if (!$lecturer) {
            return response()->json(['message' => 'Lecturer not found'], 404);
        }

        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'coming_from' => 'required|string|max:150',
            'status' => 'boolean',
            'documents_id' => 'required|exists:documents,id',
        ]);

        $lecturer->update($validatedData);

        return response()->json([
            'message' => 'Lecturer updated successfully',
            'lecturer' => $lecturer,
        ]);
    }

    // 📌 Delete a lecturer (soft delete)
    public function deleteLecturer($id)
    {
        $lecturer = Lecturer::find($id);

        if (!$lecturer) {
            return response()->json(['message' => 'Lecturer not found'], 404);
        }

        $lecturer->delete();

        return response()->json(['message' => 'Lecturer deleted successfully']);
    }

    // 📌 Toggle the status of a lecturer
    public function toggleStatusLecturer($id)
    {
        $lecturer = Lecturer::find($id);

        if (!$lecturer) {
            return response()->json(['message' => 'Lecturer not found'], 404);
        }

        $lecturer->status = !$lecturer->status;
        $lecturer->save();

        return response()->json([
            'message' => 'Lecturer status updated successfully',
            'status' => $lecturer->status,
        ]);
    }
}
