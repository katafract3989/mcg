<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function create(Request $request){




        $staff = Staff::paginate(3);

        return view('create', ['list' => $staff]);

    }


    public function add(Request $request, $id = null){

        $staff = new Staff;

        if($id != null){

            $this->edit($id);


        }else{

        $staff->first_name = $request->input('first_name');
        $staff->surname = $request->input('surname');
        $staff->salary = $request->input('salary');
        $staff->month_of_hiring = $request->input('hiring_month');
        $staff->save();

        return view('add', ['msg' => 'Employee added successfully']);
        }


    }
    public function delete(Request $request, $id=null){

        Staff::find($id)->delete();

        return view('add', ['msg' => 'Successfully remotely']);


    }

    public function edit($id=null){


        $data = Staff::find($id);

        return view('edit', ['staff' => $data]);
    }

    public function editSave(Request $request, $id=null){

        $staff = Staff::find($id);

        $staff->first_name = $request->input('first_name');
        $staff->surname = $request->input('surname');
        $staff->salary = $request->input('salary');
        $staff->month_of_hiring = $request->input('hiring_month');
        $staff->save();

        return view('add', ['msg' => 'Data changed successfully']);


    }


}
