<?php

namespace App\Http\Controllers\API;

use Carbon\Carbon;
use App\Models\Time;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\TimeRequest;
use App\Http\Controllers\Controller;

class TimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(TimeRequest $request)
    {
        $slack_name=$request->slack_name;
        $track=$request->track;


        $time=Carbon::now('UTC')->toISOString();
        $current_day = now()->format('l');
        $data = [
            'slack_name' => $slack_name,
            'current_day' => $current_day,
            'utc_time' => $time,
            'track' => $track,
            'github_file_url' => 'https://github.com/kayxleem/utc-time-api/app/Http/Controllers/API/TimeController.php',
            'github_repo_url' => 'https://github.com/kayxleem/utc-time-api',
            'status_code' => 200,
        ];
        return response()->json($data);
    }
}
