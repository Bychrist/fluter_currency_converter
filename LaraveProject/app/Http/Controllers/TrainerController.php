<?php

namespace App\Http\Controllers;

use App\Models\Trainers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image as Image;
class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('trainers.trainer_index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $getTrainers = Trainers::all();
        return view('trainers.trainer_create',compact('getTrainers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try
        {
            $checkTrainer = Trainers::where('name',ucwords($request->name))->first();
            if(isset($checkTrainer))
            {
                return redirect()->back()->with(['error' => "Failure: Trainer name already exist"]);
            }
            $request->validate([
                "name" => "required|max:50",
                "image" => "required|image",
                "trainerInfo" => "required"
            ]);

            $trainer = new Trainers();
            $trainer->name =  ucwords($request->name);
            $trainer->trainerInfo = $request->trainerInfo;
            if ($request->image != null) {
                $time = time();
                $originalImage = $request->file('image');
                $thumbnailImage = Image::make($originalImage);
                $thumbnailPath = 'trainers/';
                $thumbnailImage->resize(500, 500);
                $thumbnailImage->save($thumbnailPath . $time . $originalImage->getClientOriginalName());
                $trainer->image = 'trainers/' .  $time . $originalImage->getClientOriginalName();
            }

            $trainer->save();
            return redirect()->back()->with(['success' => "Success!! The trainer has been created"]);

        }
        catch(\Throwable $th)
        {
            Log::error($th);
            return redirect()->back()->with(['error' => "Failure:{$th->getMessage()}"]);
        }

    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
       try
       {
           $getTrainers = Trainers::all();
           $updateTrainers = Trainers::find($id);
           return view('trainers.trainer_create',compact('getTrainers','updateTrainers'));
       }
       catch(\Throwable $th)
       {
           Log::error($th->getMessage(),$th);
           return redirect()->back()->with(["error"=>"Failure: {$th->getMessage()}"]);
       }
    }


    public function update(Request $request, $id)
    {
        $checkTrainer = Trainers::where('name',ucwords($request->name))->where('id','!=', $id)->first();
        if(isset($checkTrainer))
        {
            return redirect()->back()->with(['error' => "Failure: Trainer name already exist"]);
        }

        $request->validate([
            "name" => "required|max:50",
            "trainerInfo" => "required"
        ]);


        $trainer = Trainers::find($id);
        $trainer->name =  ucwords($request->name);
        $trainer->trainerInfo = $request->trainerInfo;
        if ($request->image != null) {

            if (File::exists($trainer->image)){
                File::delete($trainer->image);
            }

            $time = time();
            $originalImage = $request->file('image');
            $thumbnailImage = Image::make($originalImage);
            $thumbnailPath = 'trainers/';
            $thumbnailImage->resize(500, 500);
            $thumbnailImage->save($thumbnailPath . $time . $originalImage->getClientOriginalName());
            $trainer->image = 'trainers/' .  $time . $originalImage->getClientOriginalName();

        }

        $trainer->save();
        return redirect()->back()->with(['success' => "Success!! The trainer has been created"]);



    }

    public function destroy($id)
    {
        try
        {
            $getTrainer = Trainers::find($id);
            $getTrainer->delete();
            if(File::exists($getTrainer->image)) {

                File::delete($getTrainer->image);

            }
            return redirect()->back()->with(['success' => "Success!! The trainer has been deleted"]);
        }
        catch (\Throwable $th)
        {

            Log::error($th);
            return redirect()->back()->with(['error' => "Failure!! the trainer was not deleted"]);
        }
    }
}
