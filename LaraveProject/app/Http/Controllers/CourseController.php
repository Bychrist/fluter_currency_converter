<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Trainers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use App\Repository\IServiceImplementation;

class CourseController extends Controller
{


    private  $_ServiceImplementation;
    public function __construct(IServiceImplementation $ServiceImplementation)
    {
        $this->_ServiceImplementation = $ServiceImplementation;

    }

    public function index()
    {
        try {

            $courseList = $this->_ServiceImplementation->GetCourseCourse();
            $trainers =  Trainers::all();
            if($courseList == false)
            {
                return redirect()->back()->with(["error" => "an error has occured retrieving the data"]);
            }

            return view('courses.course_index', compact('courseList','trainers'));

        } catch (\Throwable $th) {
           Log::error($th);
            return redirect()->back()->with(["error" => "an error has occured retrieving the data"]);
        }
    }


    public function create()
    {

        $trainers =  Trainers::all();
       // dd($trainers);
        return view('courses.course_create',compact('trainers'));
    }


    public function store(Request $request)
    {

        try {

            $checkNameExist = Course::where('title',trim(ucwords($request->title)))->get();

            if(!isset($checkNameExist))
            {
                return redirect()->back()->with(["error" => "Error!! title already exist"]);
            }

           $request->validate( [
                "title" => "required|max:100|unique:courses",
                "excerpts" => "required|max:350",
                "image" => "required|image|mimes:jpeg,png,jpg,gif",
                "fullText" => "required",
                "courseDetail" => "required|url",
                "price" => "required",
                "trainer" => "required",
            ]);

            $resp = $this->_ServiceImplementation->CreateCourse($request);

            if ($resp) {
                return redirect()->back()->with(["success" => "Success!! Course was created"]);
            }

            return redirect()->back()->with(['error' => 'Failure: an error has occured']);

        } catch (\Throwable $th) {
            Log::error($th);
            return redirect()->back()->with(['error' => "Failure: {$th->getMessage()}"]);
        }


    }


    public function show($id)
    {
        //
    }


    public function edit(int $id)
    {
         try {

            $getEditCourse = $this->_ServiceImplementation->EditCourse($id);
           // dd($getEditCourse->trainers[0]->id);
             $trainers =  Trainers::all();
            if ($getEditCourse) {

                return view('courses.course_edit',compact('getEditCourse','trainers'));
            }

            return redirect()->back()->with(["error" => "Error!! Course was not found"]);

         } catch (\Throwable $th) {

            Log::error($th);
            return redirect()->back()->with(["error" => "Error!! something went wrong"]);

         }

    }


    public function update(Request $request, int $id)
    {
        try
        {
             $checkNameExist = Course::where('title',trim(ucwords($request->title)))->where('id','<>',$id)->get();

             if(!isset($checkNameExist))
             {
                 return redirect()->back()->with(["error" => "Error!! title already exist"]);
             }
                 $request->validate( [
                "title" => ['required','max:100'],
                "excerpts" => ['required','max:350'],
                "image" => "image|mimes:jpeg,png,jpg,gif",
                "fullText" => ["required"],
                "courseDetail" => ["required|url"],
                "price" => ["required"],
                "trainer" => ["required"],
            ]);



            $course = $this->_ServiceImplementation->UpdateCourse($request,$id);
              if($course)
              {
                  return redirect()->back()->with(["success" => "Success!! Course update was successful"]);
              }

            return redirect()->back()->with(["error" => "Error!! Course update failed"]);

        }
        catch(\throwable $th)
        {
            Log::error($th);
            return redirect()->back()->with(['error' => "Failure: {$th->getMessage()}"]);
        }
    }


    public function destroy($id)
    {

         try
         {
             $deleteCourse =  $this->_ServiceImplementation->DeleteCourse($id);
            if($deleteCourse)
            {
                return redirect()->back()->with(["success" => "Success!! course was deleted."]);
            }

             return redirect()->back()->with(["error" => "Error!! Course was not deleted"]);

         }
         catch (\Throwable $th)
         {
            Log::error($th);
            return redirect()->back()->with(["error" => "Error!! An error has occured"]);
         }


    }
}
