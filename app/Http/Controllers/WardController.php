<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\{Ward, User, Activity};
use App\Repositories\WardRepository;
use DB;
use Illuminate\Support\Facades\Auth;

class WardController extends Controller
{
    protected $model;

    public function __construct(Ward $ward)
    {
       // set the model
       $this->model = new WardRepository($ward);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ward = Ward::orderBy("ward_name", "asc")->get();
        return view('superadmin.ward.create')->with([
            "ward" => $ward,
        ]);
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
        //return response()->json(['success'=> 'You Have Added To The Ward List Successfully']);
        //echo "Yes";
        $this->validate($request, [
            'ward_name' =>'required|min:5|max:255',
        ]);
        // if(Equipment::where("ward_name", $request->input("ward_name"))->exists()){
        //    return redirect()->back()->with("error", $request->input("ward_name"). " Already Exist On The List of Equipments");
        // }

        $data = ([
            "ward" => new Ward,
            "ward_name" => $request->input("ward_name"),
        ]);

        $log = new Activity([
            "action" => "Added ".$request->input("ward_name"). " To The Ward List",
            "email" => Auth::user()->email,
        ]);

        if($log->save() AND ($this->model->create($data))){
            return response()->json(['success'=> 'You Have Added $request->input("ward_name") To The Ward List Successfully']);
            // return redirect()->route("superadmin.ward.create")->with("success", "You Have Added " 
            // .$request->input("ward_name"). " To The Ward List Successfully");
        } 
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
