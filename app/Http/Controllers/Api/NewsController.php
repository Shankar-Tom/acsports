<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Shankar\LaravelBasicSetting\Traits\ApiResponse;

class NewsController extends Controller
{
    use ApiResponse;
    public function index(Request $request)
    {
        $page = $request->get('page', 1);
        return $this->successResponse(data: News::latest()->offset(($page - 1) * 10)->limit(10)->get());
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
    public function show($id)
    {
        return $this->processResponse(data: News::find($id), message: 'Invalid news id');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
