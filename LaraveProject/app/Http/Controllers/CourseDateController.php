<?php

namespace App\Http\Controllers;

use App\Models\CourseDate;
use App\Models\Participant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CourseDateController extends Controller
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
        $dates = CourseDate::all();
        return view('date.date_create',compact('dates'));
    }


    public function store(Request $request)
    {
        try
        {
            $checkDate = CourseDate::where('date', $request->date)->first();

            if (isset($checkDate)) {
                return redirect()->back()->with(["error" => "Error!! date already exist"]);
            }

            $request->validate([
                "date" => "required"
            ]);

            $date = new CourseDate();
            $date->date = $request->date;
            $date->save();
            return redirect()->back()->with(["success" => "Success!! date was saved"]);
        }
        catch (\Throwable $th)
        {
            return redirect()->back()->with(["error" => $th->getMessage()]);
        }
    }




    public function edit($id)
    {
        $dates = CourseDate::all();
        $date = CourseDate::find($id);
        return view('date.date_create', compact('date', 'dates'));
    }


    public function update(Request $request, $id)
    {
        try
        {
            $checkDate =  CourseDate::where('date', $request->date)->where('id','!=',$id)->first();

            if (isset($checkDate)) {
                return redirect()->back()->with(["error" => "Error!! date already exist"]);
            }

            $request->validate([
                "date" => "required"
            ]);

            $date = CourseDate::find($id);
            $date->date = $request->date;
            $date->save();
            return redirect('/training_date/create')->with(["success" => "Success!! date was updated"]);
        }
        catch(\Throwable $th)
        {
            return redirect()->back()->with(["error" => $th->getMessage()]);
        }
    }


    public function destroy($id)
    {
        try {
            $date = CourseDate::find($id);
            $date->delete();
            return redirect()->back()->with(['success' => "Success!! The date has been deleted"]);
        } catch (\Throwable $th) {


            return redirect()->back()->with(['error' => "Failure!! the date  was not deleted"]);
        }
    }

}
