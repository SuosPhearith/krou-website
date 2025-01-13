<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    // 📌 Create a new video
    public function createVideo(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:150',
            'video_uri' => 'required|string|max:150',
            'lecturers_id' => 'required|exists:lecturers,id',
        ]);

        $video = Video::create($validatedData);

        return response()->json([
            'message' => 'Video created successfully',
            'video' => $video,
        ], 201);
    }

    // 📌 Get videos with pagination and search
    public function getVideos(Request $request)
    {
        $query = Video::query();

        // Filter by lecturers_id if provided
        if ($request->has('lecturers_id')) {
            $query->where('lecturers_id', $request->input('lecturers_id'));
        }

        // Search by title if provided
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('title', 'LIKE', "%{$search}%");
        }

        // Paginate the results (default 10 per page)
        $videos = $query->paginate(10);

        return response()->json($videos);
    }

    // 📌 Get a single video by ID
    public function getVideo($id)
    {
        $video = Video::find($id);

        if (!$video) {
            return response()->json(['message' => 'Video not found'], 404);
        }

        return response()->json($video);
    }

    // 📌 Update a video
    public function updateVideo(Request $request, $id)
    {
        $video = Video::find($id);

        if (!$video) {
            return response()->json(['message' => 'Video not found'], 404);
        }

        $validatedData = $request->validate([
            'title' => 'required|string|max:150',
            'video_uri' => 'nullable|string|max:150',
            'lecturers_id' => 'required|exists:lecturers,id',
        ]);

        if (empty($validatedData['video_uri'])) {
            unset($validatedData['video_uri']);
        }

        $video->update($validatedData);

        return response()->json([
            'message' => 'Video updated successfully',
            'video' => $video,
        ]);
    }

    // 📌 Delete a video (soft delete)
    public function deleteVideo($id)
    {
        $video = Video::find($id);

        if (!$video) {
            return response()->json(['message' => 'Video not found'], 404);
        }

        $video->delete();

        return response()->json(['message' => 'Video deleted successfully']);
    }

    // 📌 Get videos by a specific lecturer ID
    public function getVideosByLecturer($lecturers_id)
    {
        $videos = Video::where('lecturers_id', $lecturers_id)->paginate(10);

        return response()->json($videos);
    }

    // 📌 Toggle video status
public function toggleStatus($id)
{
    $video = Video::find($id);

    if (!$video) {
        return response()->json(['message' => 'Video not found'], 404);
    }

    // Toggle the status
    $video->status = !$video->status;
    $video->save();

    return response()->json([
        'message' => 'Video status updated successfully',
        'status' => $video->status,
    ]);
}

}
