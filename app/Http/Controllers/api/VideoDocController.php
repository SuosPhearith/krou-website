<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\VideoDoc;
use Illuminate\Http\Request;

class VideoDocController extends Controller
{
    // Get all video documents with pagination and search
    public function index(Request $request)
    {
        // Ensure videos_id is provided
        if (!$request->has('videos_id')) {
            return response()->json([
                'message' => 'The videos_id parameter is required.',
            ], 400);
        }
        $videosId = $request->input('videos_id');

        // Query VideoDocs with the given videos_id
        $query = VideoDoc::where('videos_id', $videosId);

        // Optional: Search by title
        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->input('search') . '%');
        }

        // Paginate results
        $videoDocs = $query->paginate(10); // 10 items per page

        return response()->json($videoDocs);
    }




    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:150',
            'file_uri' => 'required|string|max:150',
            'videos_id' => 'required|exists:videos,id',
        ]);

        $videoDoc = VideoDoc::create($request->only(['title', 'file_uri', 'videos_id']));
        return response()->json($videoDoc, 201);
    }

    // Display the specified resource
    public function show($id)
    {
        $videoDoc = VideoDoc::findOrFail($id);
        return response()->json($videoDoc);
    }

    // Update the specified resource in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:150',
            'file_uri' => 'nullable|string|max:150',
        ]);

        $videoDoc = VideoDoc::findOrFail($id);

        // Update title (required) and file_uri (if provided)
        $videoDoc->title = $request->input('title');
        if ($request->has('file_uri')) {
            $videoDoc->file_uri = $request->input('file_uri');
        }

        $videoDoc->save();

        return response()->json($videoDoc);
    }

    // Remove the specified resource from storage
    public function destroy($id)
    {
        $videoDoc = VideoDoc::findOrFail($id);
        $videoDoc->delete();
        return response()->json(['message' => 'Video document deleted successfully']);
    }

    // Toggle the status field
    public function toggleStatus($id)
    {
        $videoDoc = VideoDoc::findOrFail($id);
        $videoDoc->status = !$videoDoc->status;
        $videoDoc->save();

        return response()->json(['status' => $videoDoc->status]);
    }
}
