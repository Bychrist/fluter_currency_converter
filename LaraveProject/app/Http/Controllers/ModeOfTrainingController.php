<?php

namespace App\Http\Controllers;

use App\Models\ModeOfTraining;
use Illuminate\Http\Request;

class ModeOfTrainingController extends Controller
{

    public function index()
    {
        return view('modeoftraining.modeoftraining_index');
    }


    public function create()
    {
        $modes = ModeOfTraining::all();
        return view('modeoftraining.modeoftraining_create',compact('modes'));
    }


    public function store(Request $request)
    {

        try {

            $checkNumber = ModeOfTraining::where('mode', ucwords($request->mode))->first();
            if (isset($checkNumber)) {

                return redirect()->back()->with(["error" => "Error!! mode already exist"]);
            }

            $request->validate([
                "mode" => "required"
            ]);

            $number = new ModeOfTraining();
            $number->mode = ucwords($request->mode);
            $number->save();
            return redirect()->back()->with(["success" => "Success!! mode was saved"]);
        } catch (\Throwable $th) {
            return redirect()->back()->with(["error" => $th->getMessage()]);
        }
    }

    public function show($id)
    {

    }



    public function edit($id)
    {
        try
        {
            $modes = ModeOfTraining::all();
            $mode = ModeOfTraining::find($id);
            return view('modeoftraining.modeoftraining_create', compact('modes', 'mode'));
        }
        catch(\Throwable $th)
        {
            return redirect()->back()->with(["error" => $th->getMessage()]);
        }

    }


    public function update(Request $request, $id)
    {
        try {
            $checkNumber = ModeOfTraining::where('mode', ucwords($request->mode))->where('id', '!=', $id)->first();

            if (isset($checkNumber)) {
                return redirect()->back()->with(["error" => "Error!! mode already exist"]);
            }

            $request->validate([
                "mode" => "required"
            ]);

            $number = ModeOfTraining::find($id);
            $number->mode = ucwords($request->mode);
            $number->save();
            return redirect('/mode_of_training/create')->with(["success" => "Success!! mode was updated"]);
        } catch (\Throwable $th) {
            return redirect()->back()->with(["error" => $th->getMessage()]);
        }
    }


    public function destroy($id)
    {
        try {
            $getMode = ModeOfTraining::find($id);
            $getMode->delete();
            return redirect()->back()->with(['success' => "Success!! The mode type has been deleted"]);
        } catch (\Throwable $th) {


            return redirect()->back()->with(['error' => "Failure!! the mode  was not deleted"]);
        }
    }



}
