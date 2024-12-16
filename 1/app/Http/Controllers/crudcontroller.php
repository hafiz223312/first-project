<?php

namespace App\Http\Controllers;

use App\Models\crud;
use Illuminate\Http\Request;

class crudcontroller extends Controller
{
    // Index method to return the view for listing data
    public function index()
    {
        return view('crud.index');
    }

    // Store method to create a new record
    public function store(Request $request)
    {
        crud::create([
            'Name' => $request->name,
            'Email' => $request->email,
        ]);
        session()->flash('success', 'Data successfully Inserted');
        return redirect('index');
    }

    // Show method to display all users
    public function show()
    {
        $users = Crud::all();
        return view('crud.show', compact('users'));
    }

    // Edit method to show the user edit form
    public function edit($id)
    {
        $user = crud::find($id);

        if (!$user) {
            return redirect()->route('crud.show')->with('error', 'User not found');
        }

        return view('crud.edit', compact('user'));
    }

    // Update method to process the user update form
    public function update(Request $request, $id)
    {
        $user = crud::find($id);

        if (!$user) {
            return redirect()->route('crud.show')->with('error', 'User not found');
        }

        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:cruds,email,' . $id, // Ignore unique validation for this user's email
        ]);

        // Update the user's data
        $user->update($validated);

        // Redirect to the 'show' page with a success message
        return redirect()->route('crud.show')->with('success', 'User updated successfully!');
    }
}
