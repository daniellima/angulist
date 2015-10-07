<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use App\Http\Requests;

class TaskController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        return Task::orderBy('created_at', 'DESC')->get();
    }

    public function store(Request $request, $id = null)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $task = Task::findOrNew($id);
        $task->fill($request->all())->save();
        return $task;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
