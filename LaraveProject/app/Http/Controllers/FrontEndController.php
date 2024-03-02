<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseDate;
use App\Models\CourseTime;
use App\Models\ModeOfTraining;
use App\Models\Participant;
use App\Models\Sponsorship;
use App\Models\Trainers;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function welcome()
    {
            try {

                $getCourses = Course::take(10)->get();
                //dd($getCourses);
                return view('welcome',compact('getCourses'));

            } catch (\Throwable $th) {
                //throw $th;
            }
    }

    public function catalogue()
    {
            try {

                $getCourses = Course::orderBy('created_at')->paginate(10);
                $getCourseCount = Course::all()->count();
                $getTrainers = Trainers::all();



                return view('catalogue',compact('getCourses','getCourseCount','getTrainers'));

            } catch (\Throwable $th) {
                 return redirect()->back()->with(["error" => $th->getMessage() ]);
            }

    }



    public function course($slug)
    {
        try
        {

           $course = Course::where('slug',$slug)->first();
           $modeOfTraining = ModeOfTraining::all();
           $date = CourseDate::all();
           $time = CourseTime::all();
           $noPart = Participant::all();
           $sponsor = Sponsorship::all();
           return view('coursedetail',compact('course','modeOfTraining','date','time','noPart','sponsor'));

        }
        catch(\Throwable $th)
        {
            return redirect()->back()->with(["error" => "An error has occured retrieving course details"]);
        }
    }

}
