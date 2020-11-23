<?php

namespace App\Http\Controllers;

use DB;
use File;
use Image;
use Validator;
use App\car;
use App\Photo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin_Panel.Cars.AddCar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carsdata = car::all();
        return view('Admin_Panel.Cars.ViewCar',compact('carsdata'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ini_set('post_max_size','1000M');
        ini_set('upload_max_filesize','2000M');
        ini_set('max_execution_time','600');
        
        $this->validate($request, [
            'c_nm' => 'required|max:30',
            'c_model' => 'required|max:20',
            'c_lonch_date' => 'required',
            'c_short_desc' => 'required|max:40',
            'c_long_desc' => 'required',
            'c_type' => 'required',
            'c_price' => 'required',
            'image[]' => 'image|mimes:jpeg,png,jpg,gif,svg|max:20000',
        ]);
        $car = [
            'c_nm' => $request->c_nm,
            'c_model' => $request->c_model,
            'c_lonch_date' => $request->c_lonch_date,
            'c_short_desc' => $request->c_short_desc,
            'c_long_desc' => $request->c_long_desc,
            'c_type' => $request->c_type,
            'c_price' => $request->c_price,
            'slug' => Str::slug($request->c_nm, '-'),
            'created_at' => date('Y:m:d H:i:s'),
            'updated_at' => date('Y:m:d H:i:s')
        ];
        Car::insert($car);
        $id = DB::getPdo()->lastInsertId(); 
            if(isset($request->image)){
            $files = $request->image;
            foreach ($files as $file) {
                    $filenamewithextension = $file->getClientOriginalName();
                    $originalname = pathinfo($filenamewithextension, PATHINFO_FILENAME);

                    $filename = $originalname . "_" . uniqid() . "." . $file->getClientOriginalExtension();
                   }
        }  
        return redirect()->back();
    }
    public function show($id)
    {
        $photos = Photo::where('car_id','=',$id)->get();
        $car = car::where('id','=',$id)->value('id');
        return view('Admin_Panel.Cars.ShowCar',compact('photos','car'));
    }
    public function edit(car $car)
    {
        return view('Admin_Panel.Cars.EditCar',compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $c_nm = $request->c_nm;
        $c_model = $request->c_model;
        $c_lonch_date = $request->c_lonch_date;
        $c_short_desc = $request->c_short_desc;
        $c_long_desc = $request->c_long_desc;
        $c_type = $request->c_type;
        $slug = Str::slug($request->c_nm, '-');
        $c_price = $request->c_price;

        car::where('id',$id)->update(['c_nm' => $c_nm, 'c_model' => $c_model, 'c_lonch_date' => $c_lonch_date, 'c_short_desc' => $c_short_desc, 'c_long_desc' => $c_long_desc, 'c_type' => $c_type, 'slug' => $slug, 'c_price' => $c_price]);

        return redirect()->to( route('car.create') )->with('success','Car Details Update Successfully........!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $images = Photo::where('car_id',$id)->get();

        foreach($images as $key=>$value)
        {
            $image_path = public_path('photos/',$value->image);
            if(File::exists($image_path)){
                File::delete($image_path);
            }
        }
        Photo::where('car_id',$id)->delete();
        Car::where('id',$id)->delete();

        return back()->with('success','Car Details Delete SuccessFully......!');
    }
}
