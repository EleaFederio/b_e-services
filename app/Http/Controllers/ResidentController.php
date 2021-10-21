<?php

namespace App\Http\Controllers;

use App\Models\Resident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ResidentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $residents = Resident::paginate(10);
        return view('pages/records/index', compact('residents') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'birth_date' => 'required',
            'phone_number' => 'required',
            'gender' => 'required',
            'nationality' => 'required',
            'birth_place' => 'required',
            'occupation' => 'required',
            'monthly_income' => 'required'
        ]);

//        return response()->json([
//            'status'=> 1,
//            'message' => $validator->passes()
//        ]);

        if(!$validator->passes()){
            return response()->json([
                'status' => 0,
                'error'=> $validator->errors()->toArray()
            ]);
        }else{
            $resident = Resident::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'middle_name' => $request->middle_name,
                'birth_date' => now(),
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'gender' => $request->gender,
                'nationality' => $request->nationality,
                'birth_place' => $request->birth_place,
                'occupation' => $request->occupation,
                'monthly_income' => $request->monthly_income,
            ]);
            return response()->json([
                'status' => 0,
                'error'=> 'Hahaha'
            ]);
            return response()->json([
                'status'=> 1,
                'message' => 'Resident successfully added!'
            ]);
//            if($resident){
//                return response()->json([
//                    'status'=> 1,
//                    'message' => 'Resident successfully added!'
//                ]);
//            }
        }





        $residents = Resident::paginate(10);
        return view('pages/records/index', compact('residents') );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function show(Resident $resident)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function edit(Resident $resident)
    {
        $resident = Resident::find($resident->id);
        return response()->json($resident);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resident $resident)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resident $resident)
    {
        $resident = Resident::find($resident->id)->delete();
        return response()->json([
            'success' => 'Resident deleted from the System'
        ]);
    }
}
