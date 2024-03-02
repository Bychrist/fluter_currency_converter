<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('participant.participant_index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $participants = Participant::all();
        return view('participant.participant_create',compact('participants'));
    }


    public function store(Request $request)
    {
        try
        {
            $checkNumber = Participant::where('number', $request->number)->get();

            if (isset($checkNumber)) {
                return redirect()->back()->with(["error" => "Error!! number already exist"]);
            }

            $request->validate([
                "number" => "required"
            ]);

            $number = new Participant();
            $number->number = $request->number;
            $number->save();
            return redirect()->back()->with(["success" => "Success!! number was saved"]);
        }
        catch (\Throwable $th)
        {
            return redirect()->back()->with(["error" => $th->getMessage()]);
        }
    }




    public function edit($id)
    {
        $participants = Participant::all();
        $participant = Participant::find($id);
        return view('participant.participant_create', compact('participants', 'participant'));
    }


    public function update(Request $request, $id)
    {
        try
        {
            $checkNumber = Participant::where('number', $request->number)->where('id','!=',$id)->get();

            if (isset($checkNumber)) {
                return redirect()->back()->with(["error" => "Error!! number already exist"]);
            }

            $request->validate([
                "number" => "required"
            ]);

            $number = Participant::find($id);
            $number->number = $request->number;
            $number->save();
            return redirect('/participant/create')->with(["success" => "Success!! number was updated"]);
        }
        catch(\Throwable $th)
        {
            return redirect()->back()->with(["error" => $th->getMessage()]);
        }
    }


    public function destroy($id)
    {
        try {
            $getSponsor = Participant::find($id);
            $getSponsor->delete();
            return redirect()->back()->with(['success' => "Success!! The participant type has been deleted"]);
        } catch (\Throwable $th) {


            return redirect()->back()->with(['error' => "Failure!! the participant  was not deleted"]);
        }
    }


}
