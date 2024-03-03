<?php

namespace App\Http\Controllers\Api\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'no_handphone' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return new UserResource(false, 'Data User Gagal Disimpan!', $validator->errors());
        }

        //create category
        $users = User::create([
            'nama_lengkap' => $request->nama_lengkap,
            'username' => $request->username,
            'email' => $request->email,
            'no_handphone' => $request->no_handphone,
            'password' => $request->password,
        ]);
        $users->assignRole('user');

        if($users) {
            //return success with Api Resource
            return new UserResource(true, 'Data User Berhasil Disimpan!', $users);
        }
        

        return new UserResource(false, 'Data User Gagal Disimpan!', null);

        //return failed with Api Resource

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
