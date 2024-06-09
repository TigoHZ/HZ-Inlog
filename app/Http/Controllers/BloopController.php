<?php

namespace App\Http\Controllers;

use App\Models\Bloop;
use Illuminate\Http\Request;

class BloopController extends Controller
{
    public function index()
    {
        $bloops = Bloop::all();
        return view('bloops.index', compact('bloops'));
    }

    public function create()
    {
        return view('bloops.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);

        Bloop::create($request->all());
        return redirect()->route('bloops.index')->with('success', 'Bloop created successfully.');
    }

    public function show(Bloop $bloop)
    {
        return view('bloops.show', compact('bloop'));
    }

    public function edit(Bloop $bloop)
    {
        return view('bloops.edit', compact('bloop'));
    }

    public function update(Request $request, Bloop $bloop)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);

        $bloop->update($request->all());
        return redirect()->route('bloops.index')->with('success', 'Bloop updated successfully.');
    }

    public function destroy(Bloop $bloop)
    {
        $bloop->delete();
        return redirect()->route('bloops.index')->with('success', 'Bloop deleted successfully.');
    }
}

