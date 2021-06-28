<?php

namespace App\Http\Controllers;

use App\Models\Add;
use App\Models\add as ModelsAdd;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class AddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $add = add::all();
        return view('add.index', ['add' => $add]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;

        // $add = new Add;
        // $add->name = $request->name;
        // $add->data = $request->id;
        // $add->date = $request->date;

        // // $add->save();
        $validated = $request->validate([
            'name'=> 'required',
            'id'=> 'required|digits:6|numeric',
            'date'=> 'required'
        ]);

        add::create([
            'name' => $request->name,
            'data' => $request->id,
            'date' => $request->date
        ]);

        // add::create($request->all());

        return redirect('/create')->with('status', 'New Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Add  $add
     * @return \Illuminate\Http\Response
     */
    public function show(Add $add)
    {
        return view('add.show', compact('add'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Add  $add
     * @return \Illuminate\Http\Response
     */
    public function edit(Add $add)
    {
        return view('add.edit', compact('add'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Add  $add
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Add $add)
    {
        $validated = $request->validate([
            'name'=> 'required',
            'id'=> 'required|digits:6|numeric',
            'date'=> 'required'
        ]);

        add::create([
            'name' => $request->name,
            'data' => $request->id,
            'date' => $request->date
        ]);

        Add::where('id', $add->id)
            ->update([
                'name' => $request->name,
                'data' => $request->id,
                'date' => $request->date
            ]);
            return redirect('/create')->with('status', 'Edit Complete');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Add  $add
     * @return \Illuminate\Http\Response
     */
    public function destroy(Add $add)
    {
        Add::destroy($add->id);
        return redirect('/create')->with('status', 'Delete Complete');
    }
}
