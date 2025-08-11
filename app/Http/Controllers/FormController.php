<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255'
        ]);

        DB::table('submissions')->insert([
            'nama' => $request->nama,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect('/list');
    }

    public function list()
    {
        $data = DB::table('submissions')->orderBy('id', 'desc')->get();
        return view('list', ['data' => $data]);
    }
}
