<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIdeaRequest;
use App\Http\Requests\UpdateIdeaRequest;
use App\Models\Idea;
use Illuminate\Support\Facades\Auth;

class IdeaController extends Controller
{
    public function index()
    {
        $ideas = Auth::user()->ideas()->get();

        return view('ideas.index', ['ideas' => $ideas]);
    }

    public function create()
    {
        return view('ideas.create');
    }

    public function store(StoreIdeaRequest $request)
    {
        $idea = Auth::user()->ideas()->create($request->validated());

        return redirect('/ideas')->with('success', 'Idea created successfully.');
    }

    public function show(Idea $idea)
    {
        //
    }

    public function edit(Idea $idea)
    {
        //
    }

    public function update(UpdateIdeaRequest $request, Idea $idea)
    {
        //
    }

    public function destroy(Idea $idea)
    {
        //
    }
}