<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolClass;

class SchoolClassController extends Controller
{
    public function index() {
        $classes = SchoolClass::all();
        return view('classes.index', compact('classes'));
    }

    public function create() {
        return view('classes.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name'  => 'required|string|max:255',
            'section'   => 'nullable|string|max:255',
        ]);
        SchoolClass::create($data);
        return redirect('/classes')->with('success', 'Class created successfully.');
    }
}
