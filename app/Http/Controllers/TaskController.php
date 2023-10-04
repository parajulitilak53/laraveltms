<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = new Task;
        // $tasks= $tasks->get();
        $tasks= $tasks->paginate(5);
        // return view('tasks.index', compact('tasks'));
        return view('tasks.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tasks =  new Task;
        $validate_date = $request->validate(
            [
                'title' => 'required',
                'description' => 'required',
            ]
        );
        $tasks->title=$request->title;
        $tasks->description=$request->description;
        $tasks->save();

        notify()->success('Data is added');

        return redirect()->route('tasks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tasks= new Task;
        $tasks= $tasks->where('id', $id)->first();
        return view('tasks.view' ,compact('tasks'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tasks= new Task;
        $tasks= $tasks->where('id', $id)->first();
        return view('tasks.edit' ,compact('tasks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tasks= new Task;
        $tasks =$tasks->where('id', $id)->first();
        $tasks->title= $request->title;
        $tasks->description= $request->description;
        $tasks->update();
        notify()->success('data is updated');
        // return redirect('tasks.index');
        return redirect()->route('tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tasks= new Task;
        $tasks= $tasks->where('id', $id)->first();
        $tasks->delete();
        notify()->success('data is deleted');
        return redirect()->route('tasks.index');
    }
}
