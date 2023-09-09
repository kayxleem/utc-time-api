<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\TimeRequest;
use App\Models\Time;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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

        $time=date("Y-m-d")."T".date("H:i:s")."Z";
        $current_day = now()->format('l');
        $data = [
            'slack_name' => $slack_name,
            'current_day' => $current_day,
            'utc_time' => $time,
            'track' => $track,
            'github_file_url' => 'app\Http\Controllers\API\TimeController.php',
            'github_repo_url' => 'https://github.com/kayxleem/utc-time-api',
            'status_code' => 200,
        ];
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Time $time)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Time $time)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Time $time)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Time $time)
    {
        //
    }
}
