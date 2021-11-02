<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\Property;

class ProductController extends Controller
{
    public function create()
    {
        $item = new Product();
        //$item->status = 0;
        $item->save();

        //$material = Material::all();

        //dd(Material::$items);
        //$collection = collect([1, 2, 3]);

        //dd($collection);


        return view('product.form', [
            'item'=>$item,

            'bezelmaterial'=>Property::getProperty('material'),
            'brand'=>Property::getProperty('brand'),
            'clasp'=>Property::getProperty('clasp'),
            'claspmaterial'=>Property::getProperty('material'),
            'deliveryset'=>Property::getProperty('deliveryset'),
            'deliverytime'=>Property::getProperty('deliverytime'),
            'face'=>Property::getProperty('color'),
            'gender'=>Property::getProperty('gender'),
            'glass'=>Property::getProperty('glass'),
            'numbersface'=>Property::getProperty('numbersface'),
            'strapcolor'=>Property::getProperty('strapcolor'),
            'strapmaterial'=>Property::getProperty('material'),
            'type'=>Property::getProperty('type'),
            'waterresistant'=>Property::getProperty('waterresistant'),

            'others'=>Property::getProperty('others'),
            'material'=>Property::getProperty('material'),
            'functions'=>Property::getProperty('functions'),
            'condition'=>Property::getProperty('condition'),
            'state'=>Property::getProperty('state'),
        ]);
    }

    public function store(Request $request)
    {
        //dd($request->all());

        $data = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:products',
            'functions' => '',
            'material_id' => 'required',
            'condition_id' => 'required',
            'others' => '',

            'bezelmaterial_id' => '',
            'brand_id' => '',
            'clasp_id' => '',
            'claspmaterial_id' => '',
            'deliveryset_id' => '',
            'deliverytime_id' => '',
            'face_id' => '',
            'gender_id' => '',
            'glass_id' => '',
            'numbersface_id' => '',
            'strapcolor_id' => '',
            'strapmaterial_id' => '',
            'type_id' => '',
            'waterresistant_id' => '',
            'state_id' => 'required',
        ]);

        $product = Product::findOrFail($request->id);

        /*$cols = array('functions', 'material');


        $properties = [];
        foreach($cols as $col){
            if(isset($data[$col])){
                $properties[$col] = $data[$col];
            }
        }*/

        $product->fill($data);
        //$product->properties = $properties;
        $product->save();

        return response()->json([
            'data'=>$data
        ]);
    }

    public function edit($id)
    {
        //dd(Property::getProperty('material'));

        $product = Product::findOrFail($id);

        $data = [
            'item'=>$product,

            'bezelmaterial'=>Property::getProperty('material'),
            'brand'=>Property::getProperty('brand'),
            'clasp'=>Property::getProperty('clasp'),
            'claspmaterial'=>Property::getProperty('material'),
            'deliveryset'=>Property::getProperty('deliveryset'),
            'deliverytime'=>Property::getProperty('deliverytime'),
            'face'=>Property::getProperty('color'),
            'gender'=>Property::getProperty('gender'),
            'glass'=>Property::getProperty('glass'),
            'numbersface'=>Property::getProperty('numbersface'),
            'strapcolor'=>Property::getProperty('color'),
            'strapmaterial'=>Property::getProperty('material'),
            'type'=>Property::getProperty('type'),
            'waterresistant'=>Property::getProperty('waterresistant'),

            'material'=>Property::getProperty('material'),
            'functions'=>Property::getProperty('functions'),
            'others'=>Property::getProperty('others'),
            'condition'=>Property::getProperty('condition'),
            'state'=>Property::getProperty('state'),
        ];

        //dd($data);

        return view('product.form', $data);
    }

    public function update($id, Request $request)
    {
        $data = $request->all();
        $data = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|max:255',
            'functions' => '',
            'material_id' => 'required',
            'condition_id' => 'required',
            'others' => '',

            'bezelmaterial_id' => '',
            'brand_id' => '',
            'clasp_id' => '',
            'claspmaterial_id' => '',
            'deliveryset_id' => '',
            'deliverytime_id' => '',
            'face_id' => '',
            'gender_id' => '',
            'glass_id' => '',
            'numbersface_id' => '',
            'strapcolor_id' => '',
            'strapmaterial_id' => '',
            'type_id' => '',
            'waterresistant_id' => '',
            'state_id' => 'required',
        ]);

        $product = Product::findOrFail($request->id);
        $product->fill($data);
        $product->save();

        return response()->json([
            'data'=>$data
        ]);
    }

    /*public function index()
    {
        $data = Placeholder::getData();
        return view('placeholders.index', [
            'data'=>$data,
        ]);
    }



    public function update($id, Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'code' => 'required',
            'content' => '',
            'is_include' => 'required',
        ]);


        $placeholder = Placeholder::getTemplateById($id);
        $placeholder->fill($data);
        $placeholder->save();

        return response()->json([
            'input'=>$data,
            'placeholder'=>$placeholder,
            'message'=>'Template successfully saved.'
        ]);//->with('success','Template successfully saved.');
    }



    public function delete($id)
    {
        Placeholder::findOrFail($id)->delete();
        return back()->with('success','Template successfully deleted.');
    }*/
}
