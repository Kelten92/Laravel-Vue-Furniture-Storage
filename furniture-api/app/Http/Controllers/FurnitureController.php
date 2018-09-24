<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Furniture;
use App\Category;
use App\Http\Resources\Furniture as FurnitureResource;
use Image;
use Validator;
use Illuminate\Support\Facades\Cache;
use App\Services\FurnitureImageService;
use Illuminate\Support\Facades\Auth;

class FurnitureController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['show','index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Cache::remember('furnitures', 20,function(){
            return FurnitureResource::collection(Furniture::with('category')->get());
        });
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'comments' => 'required',
            'color' => 'required',
            'wood' => 'required',
            'image' => 'required|base64image',
        ];

        $request->validate($rules);
       
            $service = new FurnitureImageService;
            $image = Image::make($request->image)->resize(80,80);
            $extension = $service->getExtension($image);
            $name = $service->getFileName($extension);
            $path = $service->getPath($name);

            $image->save($path);

            $furniture = Furniture::create([
                'name' => $request->name,
                'category_id' => 1,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'comments' => $request->comments,
                'color' => $request->color,
                'wood' => $request->wood,
                'image' => $name,
            ]);

            return new FurnitureResource($furniture);
       


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new FurnitureResource(Furniture::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
