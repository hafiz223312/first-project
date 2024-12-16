<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;

class CrudController extends Controller
{
    public function index(){
        return view('crud.index');
    }

    public function store(Request $request){
        crud::create([
            'Name' => $request->name,
            'Email' => $request->email,
        ]);
        session()->flash('success', 'Data successfully Inserted');
        return redirect('show');  
    }

    public function show(){
        $users = crud::all();
        return view('crud.show', compact('users'));
    }

    public function edit($id){
        $user = crud::find($id);
        return view('crud.edit', compact('user'));
    }

    public function update(Request $request, $id){
        $user = crud::find($id);
            $user->Name = $request->name;
            $user->Email = $request->email;
            $user->save();

            return redirect('show');
        }
        
       

    public function delete($id){
        $user = Crud::find($id);
        $user->delete();
        
        return redirect('show');
    }
}
