<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Services\UploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $title = 'Services';
        $nav = 'services';
        $services = Service::all();
        return view('auth.services', compact('title', 'nav','services'));
    }

    public function store(Request $request)
    {
        $validator_1 = Validator::make($request->all(), [
            'name' => 'required',
            'short_detail' => 'required',
            'description' => 'required',
            'flaticon' => 'required|mimes:jpeg,png,jpg,pdf|max:5148',
            'image1' => 'mimes:jpeg,png,jpg,pdf|max:5148',
        ]);
        if ($validator_1->fails()) {
            return back()->with('failed', $validator_1->messages()->all());
        }
        $service = new Service();
        $service->name = $request->name;
        $service->meta_name = Str::slug($request->name, '_');
        $service->short_detail = $request->short_detail;
        $service->description = $request->description;
        if ($request->hasFile('flaticon')){
            $service->flaticon = UploadService::upload($request->flaticon, false, false, 'assets/img/icon');
        }
        if ($request->hasFile('image1')){
            $service->image1 = UploadService::upload($request->image1, false, false, 'assets/img/service');
        }
        $service->save();

        return back()->with('success', 'Created Successfully');
    }


    public function update(Request $request, $service_id)
    {
        $validator_1 = Validator::make($request->all(), [
            'name' => 'required',
            'short_detail' => 'required',
            'description' => 'required',
            'flaticon' => 'mimes:jpeg,png,jpg,pdf|max:5148',
            'image1' => 'mimes:jpeg,png,jpg,pdf|max:5148',
        ]);
        if ($validator_1->fails()) {
            return back()->with('failed', $validator_1->messages()->all());
        }
        $service = Service::where('id', $service_id)->first();
        $service->name = $request->name;
        $service->meta_name = Str::slug($request->name, '_');
        $service->short_detail = $request->short_detail;
        $service->description = $request->description;
        if ($request->hasFile('flaticon')){
            $service->flaticon = UploadService::upload($request->flaticon, false, false, 'assets/img/icon');
        }
        if ($request->hasFile('image1')){
            $service->image1 = UploadService::upload($request->image1, false, false, 'assets/img/service');
        }
        $service->save();

        return back()->with('success', 'Updated Successfully');
    }

    public function destroy($service_id)
    {
        $service = Service::where('id', $service_id)->first();
        $service->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
