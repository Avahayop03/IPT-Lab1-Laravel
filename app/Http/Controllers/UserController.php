<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json("SUCCESS");
    }

    public function store(Request $request)
    {
        return response()->json("SUCCESS");
    }

    public function show($id)
    {
        return response()->json("SUCCESS");
    }

    public function update(Request $request, $id)
    {
        return response()->json("SUCCESS");
    }

    public function destroy($id)
    {
        return response()->json("SUCCESS");
    }

}
