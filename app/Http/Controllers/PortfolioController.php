<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Service;
use App\Services\UploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $title = 'Portfolio';
        $nav = 'portfolios';
        $portfolios = Portfolio::all();
        return view('auth.portfolio', compact('title', 'nav','portfolios'));
    }

    public function store(Request $request)
    {
        $validator_1 = Validator::make($request->all(), [
            'name' => 'required',
            'category' => 'required',
            'location' => 'required',
            'technologies' => 'required',
            'image1' => 'required|mimes:jpeg,png,jpg,pdf|max:5148',
        ]);
        if ($validator_1->fails()) {
            return back()->with('failed', $validator_1->messages()->all());
        }
        $portfolio = new Portfolio();
        $portfolio->name = $request->name;
        $portfolio->meta_name = Str::slug($request->name, '_');
        $portfolio->category = $request->category;
        $portfolio->description = $request->description;
        $portfolio->date = $request->date;
        $portfolio->location = $request->location;
        $portfolio->budget = $request->budget;
        $portfolio->website = $request->website;
        $portfolio->technologies = $request->technologies;
        $portfolio->client = $request->client;
        if ($request->hasFile('image1')){
            $portfolio->image1 = UploadService::upload($request->image1, false, false, 'assets/img/portfolio');
        }
        $portfolio->save();

        return back()->with('success', 'Created Successfully');
    }


    public function update(Request $request, $portfolio_id)
    {
        $validator_1 = Validator::make($request->all(), [
            'name' => 'required',
            'category' => 'required',
            'location' => 'required',
            'technologies' => 'required',
            'image1' => '|mimes:jpeg,png,jpg,pdf|max:5148',
        ]);
        if ($validator_1->fails()) {
            return back()->with('failed', $validator_1->messages()->all());
        }
        $portfolio = Portfolio::where('id', $portfolio_id)->first();
        $portfolio->name = $request->name;
        $portfolio->meta_name = Str::slug($request->name, '_');
        $portfolio->category = $request->category;
        $portfolio->description = $request->description;
        $portfolio->date = $request->date;
        $portfolio->location = $request->location;
        $portfolio->budget = $request->budget;
        $portfolio->website = $request->website;
        $portfolio->technologies = $request->technologies;
        $portfolio->client = $request->client;
        if ($request->hasFile('image1')){
            $portfolio->image1 = UploadService::upload($request->image1, false, false, 'assets/img/service');
        }
        $portfolio->save();

        return back()->with('success', 'Updated Successfully');
    }

    public function destroy($portfolio_id)
    {
        $portfolio = Portfolio::where('id', $portfolio_id)->first();
        $portfolio->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
