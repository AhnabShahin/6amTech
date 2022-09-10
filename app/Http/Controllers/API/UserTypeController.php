<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\UserType;
use Illuminate\Http\Request;
use Validator;

class UserTypeController extends Controller
{

    public function index()
    {
        $user_types = UserType::all();
        return response()->json([
            "success" => true,
            "message" => "User Types",
            "data" => $user_types
        ]);
    }


    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required|unique:user_types',
        ]);
        if ($validator->fails()) {
            return  $validator->errors();
        }
        $user_types = UserType::create($input);
        return response()->json([
            "success" => true,
            "message" => "User Type created successfully.",
            "data" => $user_types
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function show(UserType $userType)
    {
        if (is_null($userType)) {
            return response()->json([
                "success" => true,
                "message" => "User Type Not found",
                "data" => $userType
            ]);
        }
        return response()->json([
            "success" => true,
            "message" => "User type retrieved successfully.",
            "data" => $userType
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserType  $userType
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserType $userType)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        }
        $userType->name = $input['name'];
        $userType->save();
        return response()->json([
            "success" => true,
            "message" => "userType updated successfully.",
            "data" => $userType
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserType $userType)
    {
        $userType->delete();
        return response()->json([
            "success" => true,
            "message" => "userType deleted successfully.",
            "data" => $userType
        ]);
    }
}
