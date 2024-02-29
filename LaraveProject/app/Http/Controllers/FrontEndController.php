<?php

namespace App\Http\Controllers;

use App\Models\Course;
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

                $getCourses = Course::paginate(10);
                return view('catalogue',compact('getCourses'));

            } catch (\Throwable $th) {
                //throw $th;
            }

    }

}
