<?php

namespace App\Http\Controllers;

use App\Http\Requests\Benefit\CreateBenefitRequest;
use App\Http\Requests\Benefit\UpdateBenefitRequest;
use App\Models\Benefit;
use Illuminate\Http\Request;

class BenefitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $benefits = Benefit::all();
        return view('benefit.index', compact('benefits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('benefit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBenefitRequest $request)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->image->store('image', 'public');
            $data['image'] = $image;
        };
        Benefit::create($data);
        session()->flash('success');
        return redirect(route('benefits.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($benefit)
    {
        return view('benefit.create', compact('benefit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Benefit $benefit)
    {
        return view('benefit.create', compact('benefit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBenefitRequest $request, Benefit $benefit)
    {
        $data = $request->only(['description', 'title']);
        if ($request->hasFile('image')) {
            $image = $request->image->store('image', 'public');
            $benefit->deleteImage();
            $data['image'] = $image;
        };
        $benefit->update($data);
        session()->flash('success');
        return redirect(route('benefits.index'));
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
