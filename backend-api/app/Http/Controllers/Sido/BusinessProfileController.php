<?php

namespace App\Http\Controllers\Sido;

use App\Http\Controllers\Controller;
use App\Models\Sido\BusinessProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BusinessProfileController extends Controller
{
    public function store(Request $request , $slug)
    {
        $validator = Validator::make($request->all(), [
            'applicationCode' => 'required',
            'background' => 'required',
            'marketProblem' => 'required',
            'marketBase' => 'required',
            'prototypeDescription' => 'required',
            'marketSize' => 'required',
        ]);
        if($validator->fails()){
            return response()->json([
                'message'=> 'Validation fails',
                'errors'=> $validator->errors()
            ],422);
        }
        $data = $validator->validate();
        $newBusinessProfile = BusinessProfile::create($data); 
        return response()->json([
            'message'=> "Business Profile Saved",
            'data' => $newBusinessProfile
        ],200);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
