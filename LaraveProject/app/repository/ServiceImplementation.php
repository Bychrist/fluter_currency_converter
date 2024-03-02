<?php


namespace App\Repository;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as Image;

class ServiceImplementation implements IServiceImplementation
{


    public function CreateCourse(Request $request)
    {
       try
        {
            $course = new Course();
            $course->title = trim(ucwords($request->title));
            $course->excerpts = $request->excerpts;
            $course->fullText = $request->fullText;
            $course->courseDetail = $request->courseDetail;
            $course->price = $request->price;
            $course->slug = Str::slug($course->title);


            if ($request->image !== null) {
                $time = time();
                $originalImage = $request->file('image');
                $thumbnailImage = Image::make($originalImage);
                $thumbnailPath = 'courses/';
                $thumbnailImage->resize(500, 500);
                $thumbnailImage->save($thumbnailPath . $time . $originalImage->getClientOriginalName());
                $course->image = 'courses/' .  $time . $originalImage->getClientOriginalName();
            }


            $course->save();
            $course->trainers()->attach($request['trainer']);
            return true;
        }
        catch (\Throwable $th)
        {

            return $th->getMessage();

        }
    }


    public function GetCourseCourse()
    {
        try
        {
               $courseList = Course::orderBy('created_at','desc')->get();
               return $courseList;

        } catch (\Throwable $th)
        {
            Log::error($th);
            return false;
        }
    }


    public function DeleteCourse($id)
    {

        try
        {
            $getCourse = Course::find($id);
            $getCourse->delete();
            if (File::exists($getCourse->image)) {
                File::delete($getCourse->image);
            }
            return true;
        }
        catch (\Throwable $th)
        {

            Log::error($th);
            return false;
        }


    }


    public function EditCourse($id)
    {
        try
        {
                $editCourse = Course::find($id);
                if($editCourse != null)
                {
                    return $editCourse;
                }
                return false;
        }
        catch(\Throwable $th)
        {
            Log::error($th);
            return false;
        }
    }

    public function UpdateCourse(Request $request, $id)
    {
        try
        {
            $course = Course::find($id);
            if($course)
            {
                $course->title =  trim(ucwords($request->title));
                $course->excerpts = $request->excerpts;
                $course->fullText = $request->fullText;
                $course->courseDetail = $request->courseDetail;
                $course->price = $request->price;
                $course->slug = Str::slug($course->title);

                if ($request->image !== null) {

                    if (File::exists($course->image)) {
                        File::delete($course->image);
                    }

                    $time = time();
                    $originalImage = $request->file('image');
                    $thumbnailImage = Image::make($originalImage);
                    $thumbnailPath = 'courses/';
                    $thumbnailImage->resize(500, 500);
                    $thumbnailImage->save($thumbnailPath . $time . $originalImage->getClientOriginalName());
                    $course->image = 'courses/' .  $time . $originalImage->getClientOriginalName();
                }

                $course->save();
                $course->trainers()->attach($request['trainer']);

                return true;
            }
        }
        catch(\throwable $th)
        {
            Log::error($th);
            return false;
        }
    }
}
