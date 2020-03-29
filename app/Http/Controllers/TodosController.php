<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todos;
use Illuminate\Support\Facades\Auth;


class TodosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function approval()
    {
        return view('approval');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Auth::user()
            ->todos()
            ->orderByDesc('created_at')
            ->paginate(5);

            return view('todos', [
                'todos' => $todos
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255'
        ]);

        Auth::user()->todos()->create([
            'title' => $data['title'],
            'description' => $data['description'],
           
        ]);

        session()->flash('status', 'Todos Created!');

        return redirect('/todos');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = Todos::findOrFail($id);
        return view('todosEdit', [
            'todo' => $todo
        ]);
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
        $todo = Todos::findOrFail($id);

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $input = $request->all();

        $todo->fill($input)->save();

        session()->flash('status', 'Todo Updated!');

        return redirect('/todos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = Todos::findOrFail($id);

        $todo->delete();
    
        session()->flash('status', 'Todo deleted!');

        return redirect('/todos');
    }
}
