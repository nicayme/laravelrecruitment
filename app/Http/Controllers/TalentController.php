<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Talent;

class TalentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $talent = Talent::all();
        $talent = Talent::paginate(10);
        // $talent = DB::table('talents')->paginate(10);
        
        // return view('talent.index', ['talent' => $talent]);
        return view('talent.index',compact('talent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('talent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        // Talent::create([
        //     'lastname' => request('lastname'),
        //     'firstname' => request('firstname'),
        //     'skill' => request('skill'),
        //     'location' => request('location')
        // ]);


        if($request->hasfile('filename'))
        {
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/images/', $name); 
        }

        Talent::create(request()->validate(
            [
                'lastname' => ['required', 'min:3', 'max:191'],
                'firstname' => ['required', 'min:3', 'max:191'],
                'skill' => ['required', 'min:3', 'max:191'],
                'location' => ['required', 'min:3', 'max:191']
            ]));

        // Talent::create(request(['lastname', 'firstname', 'skill', 'location']));

       //  $talent = new Talent();

       //  $talent->lastname = request('lastname');
       //  $talent->firstname = request('firstname');
       //  $talent->skill = request('skill');
       //  $talent->location = request('location');

       // $talent->save();
       // return request()->all();

       session()->flash('createdtalent','Talent has been created');

       return redirect('http://127.0.0.1:8080/laravelrecruitment/talent');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Talent $talent)
    {
       // $talent = Talent::findOrFail($id);
       return view('talent.show',compact('talent'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Talent $talent)
    {
        
        // return $id;
       // $talent = Talent::findOrFail($id);

       return view('talent.edit',compact('talent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
         $talent = Talent::findOrFail($id);

         $talent->lastname = request('lastname');
         $talent->firstname = request('firstname');
         $talent->skill = request('skill');
         $talent->location = request('location');

         $talent->save();

         return redirect('talent');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Talent $talent)
    {
        
        
        $talent->delete();

        return redirect('talent');

    }
}
