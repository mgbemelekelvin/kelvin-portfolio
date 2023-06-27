<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Testimony;
use App\Services\UploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TestimonyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $title = 'Testimonies';
        $nav = 'testimonies';
        $testimonies = Testimony::all();
        return view('auth.testimonies', compact('title', 'nav','testimonies'));
    }

    public function store(Request $request)
    {
        $validator_1 = Validator::make($request->all(), [
            'name' => 'required',
            'company' => 'required',
            'message' => 'required',
            'image1' => 'required|mimes:jpeg,png,jpg,pdf|max:5148'
        ]);
        if ($validator_1->fails()) {
            return back()->with('failed', $validator_1->messages()->all());
        }
        $testimony = new Testimony();
        $testimony->name = $request->name;
        $testimony->company = $request->company;
        $testimony->message = $request->message;
        $testimony->image1 = UploadService::upload($request->image1, false, false, 'assets/img/testimonial');
        $testimony->save();

        return back()->with('success', 'Created Successfully');
    }


    public function update(Request $request, $testimony_id)
    {
        $validator_1 = Validator::make($request->all(), [
            'name' => 'required',
            'company' => 'required',
            'message' => 'required',
            'image1' => 'mimes:jpeg,png,jpg,pdf|max:5148'
        ]);
        if ($validator_1->fails()) {
            return back()->with('failed', $validator_1->messages()->all());
        }
        $testimony = Testimony::where('id', $testimony_id)->first();
        $testimony->name = $request->name;
        $testimony->company = $request->company;
        $testimony->message = $request->message;
        if ($request->hasFile('image1')){
            $testimony->image1 = UploadService::upload($request->image1, false, false, 'assets/img/testimonial');
        }
        $testimony->save();

        return back()->with('success', 'Updated Successfully');
    }

    public function destroy($testimony_id)
    {
        $testimony = Testimony::where('id', $testimony_id)->first();
        $testimony->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
