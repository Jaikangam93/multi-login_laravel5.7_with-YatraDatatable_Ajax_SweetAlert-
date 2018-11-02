<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Datatables;

class SystemAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.systemusers');   
    }



    public function apimanagesystemusers()
    {
        $users = User::all();
        return Datatables::of($users)
      
        ->addColumn('status', function($users){
                if ($users->isactive == 1)
                    { return '<span class="label label-success">ACTIVE</span>'; }  
                else   
                    { return '<span class="label bg-danger-400">NOT-ACTIVE</span>'; }  
                    })

              ->addColumn('action', function($users){
               return 
               '<ul class="icons-list"><li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="icon-menu9"></i></a><ul class="dropdown-menu dropdown-menu-right"> 
                            <li><a onclick="editForm('. $users->id .')"><i class=" icon-pencil7 bg-blue"></i> Edit Details </a></li>
                            <li><a onclick="deleteData('.$users->id.')"><i class="icon-cancel-circle2 bg-danger"></i> Reset Password </a></li>'.
                           '<li><a onclick="userchangestatus('. $users->id .')"><i class="icon-checkmark-circle bg-success"></i> Change Status  </a></li>'.
                        '</ul></li></ul>' ;
            })
              ->rawColumns(['status', 'action'])->make(true);
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
        //
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
