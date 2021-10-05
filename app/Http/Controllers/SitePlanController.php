<?php

namespace App\Http\Controllers;

use App\Http\Requests\Slider\CreateSliderRequest;
use App\Http\Requests\Slider\UpdateSliderRequest;
use App\Models\SitePlan;
use Illuminate\Http\Request;

class SitePlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $site_plan = SitePlan::find(1);
        return view('site_plan.create', compact('site_plan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site_plan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UpdateSliderRequest $request)
    {
        $site_plan = SitePlan::find(1);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->image->store('image', 'public');
            $site_plan->deleteImage();
            $data['image'] = $image;
        };
        $site_plan->update($data);
        session()->flash('success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SitePlan $site_plan)
    {
        return view('site_plan.create', compact('site_plan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSliderRequest $request, SitePlan $site_plan)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
