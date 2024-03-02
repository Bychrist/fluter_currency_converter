<?php

namespace App\Http\Controllers;

use App\Models\Sponsorship;
use App\Models\Trainers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class SpnsorhipController extends Controller
{

    public function index()
    {
        return view('sponsorship.sponsorship_index');
    }


    public function create()
    {
            $sponsorships = Sponsorship::all();
            return view('sponsorship.sponsorship_create',compact('sponsorships'));
    }


    public function store(Request $request)
    {
        try
        {
            $checkSponsorship = Sponsorship::where('sponsorship',ucwords($request->sponsorship))->first();
            if(isset($checkSponsorship))
            {
                return redirect()->back()->with(['error' => "Failure: Sponsorship name already exist"]);
            }
            $request->validate([
                "sponsorship" => "required"
            ]);
             $sponSave = new Sponsorship();
             $sponSave->sponsorship = ucwords($request->sponsorship);
             $sponSave->save();

            $sponsorships = Sponsorship::all();
            return view('sponsorship.sponsorship_create',compact('sponsorships'));
        }
        catch(\Throwable $th)
        {
            Log::error($th);
            return redirect()->back()->with(["error" => $th->getMessage()]);
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

            $sponsorships = Sponsorship::all();
            $sponsorship = Sponsorship::find($id);
            return view('sponsorship.sponsorship_create',compact('sponsorship', 'sponsorships'));


        }
        catch (\Throwable $th)
        {
            Log::error($th);
            return redirect()->back()->with(["error" => $th->getMessage()]);
        }

    }


    public function update(Request $request, $id)
    {

        try
        {
            $checkSponsorship = Sponsorship::where('sponsorship',ucwords($request->sponsorship))->where('id','!=',$id)->first();
            if(isset($checkSponsorship))
            {
                return redirect()->back()->with(['error' => "Failure: Sponsorship name already exist"]);
            }

            $request->validate([
                "sponsorship" => "required"
            ]);
            $sponSave = Sponsorship::find($id);
            $sponSave->sponsorship = ucwords($request->sponsorship);
            $sponSave->save();
            return redirect('sponsorship/create')->with(["success" => "Success!! sponsorship type was updated"]);
        }
        catch(\Throwable $th)
        {
            return redirect()->back()->with(["error" => $th->getMessage()]);
        }
    }


    public function destroy($id)
    {
        try
        {
            $getSponsor = Sponsorship::find($id);
            $getSponsor->delete();
            return redirect()->back()->with(['success' => "Success!! The sponsorship type has been deleted"]);
        }
        catch (\Throwable $th)
        {

            Log::error($th);
            return redirect()->back()->with(['error' => "Failure!! the sponsorship was not deleted"]);
        }
    }
}
