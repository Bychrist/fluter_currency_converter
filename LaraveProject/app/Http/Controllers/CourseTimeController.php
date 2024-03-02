<?php

namespace App\Http\Controllers;

use App\Models\CourseDate;
use App\Models\CourseTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CourseTimeController extends Controller
{
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dates = CourseTime::all();
        return view('coursetime.coursetime_create',compact('dates'));
    }


    public function store(Request $request)
    {
        try
        {
            $checkDate = CourseTime::where('time', $request->time)->first();

            if (isset($checkDate)) {
                return redirect()->back()->with(["error" => "Error!! time already exist"]);
            }

            $request->validate([
                "time" => "required"
            ]);

            $date = new CourseTime();
            $date->time = $request->time;
            $date->save();
            return redirect()->back()->with(["success" => "Success!! time was saved"]);
        }
        catch (\Throwable $th)
        {
            return redirect()->back()->with(["error" => $th->getMessage()]);
        }
    }




    public function edit($id)
    {
        $dates = CourseTime::all();
        $date = CourseTime::find($id);
        return view('coursetime.coursetime_create', compact('date', 'dates'));
    }


    public function update(Request $request, $id)
    {
        try
        {
            $checkDate =  CourseTime::where('time', $request->time)->where('id','!=',$id)->first();

            if (isset($checkDate)) {
                return redirect()->back()->with(["error" => "Error!! time already exist"]);
            }

            $request->validate([
                "time" => "required"
            ]);

            $date = CourseTime::find($id);
            $date->time = $request->time;
            $date->save();
            return redirect('/training_time/create')->with(["success" => "Success!! time was updated"]);
        }
        catch(\Throwable $th)
        {
            return redirect()->back()->with(["error" => $th->getMessage()]);
        }
    }


    public function destroy($id)
    {
        try {
            $date = CourseTime::find($id);
            $date->delete();
            return redirect()->back()->with(['success' => "Success!! The time has been deleted"]);
        } catch (\Throwable $th) {


            return redirect()->back()->with(['error' => "Failure!! the time  was not deleted"]);
        }
    }
}
