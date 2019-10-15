<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\CarModel;


class CarModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carModels = CarModel::all();
        return view('carModel.index', compact('carModels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands= Brand::all();
        return view('carModel.create',compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'model'=>'required | max:191',
          'brand_id'=>'required',
     ]);

     $carModel = new CarModel();
     $carModel->model = $request["model"];
     $carModel->brand_id = $request["brand_id"];
     $carModel->save();
     return redirect('/models');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carModel = CarModel::find($id);
        return view('carModel.show', compact('carModel'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carModel = CarModel::find($id);
        $brands = Brand::all();
        return view('carModel.edit', compact('carModel','brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $carModel = CarModel::find($id);
        $carModel->model = $request['model']!== null ? $request['model'] : $carModel['model'];
        $carModel->brand_id =$request['brand_id']!== null ? $request['brand_id'] : $carModel['brand_id'];
        $carModel->save();
        return redirect('/models');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carModel = CarModel::find($id);
        $carModel->delete();
        return redirect('/models');
    }
  }
