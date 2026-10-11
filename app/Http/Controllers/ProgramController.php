<?php
namespace App\Http\Controllers;

use App\Models\Program;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::latest()->get();

        return view('program.index', compact('programs'));
    }

    public function show(string $slug)
    {
        $program = Program::where('slug', $slug)->firstOrFail();

        return view('program.show', compact('program'));
    }
}