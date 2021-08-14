<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('/add');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_name' => 'required|max:255',
            'product_price' => 'required|numeric|regex:/^\d+\.\d{0,2}$/',
        ]);

        if ($validator->fails()) {
            return redirect('/add')
                        ->withErrors($validator)
                        ->withInput();
        } else {

             $product = Product::create([
                'name' => auth()->user()->id,
                'description' => $request->get('title'),
                'price' => $request->get('isFinished'),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
        
        return response()->json([
            'message' => 'Successfully created todo',
            'code' => 1
        ]);
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
}
