<?php


namespace App\Repository;

use Illuminate\Http\Request;

interface IServiceImplementation
{
    public function CreateCourse(Request $request);
    public function GetCourseCourse();
    public function DeleteCourse($id);
    public function EditCourse($id);
    public function UpdateCourse(Request $request,$id);

}
