<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::latest()->paginate(5);
        return view('modules.adminpage', compact('products'))
        ->with('i', (request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $products = new Products();
        if (!empty($request->id)) {
            $request->validate([
                'id' => 'required',
                'menu' => 'required',
                'desc' => 'required'
            ]);

            $results = $products->updatedData($request->all());

            return redirect()->route('m_menu')->with('success',($results) ? 'Menu saved.' : 'Menu failed save.');
        } else {
            $request->validate([

                'menu' => 'required',
                'desc' => 'required'
            ]);

            $results = $products->storedData($request->all());
            return redirect()->route('m_menu')->with('success',($results)? 'Menu created successfully.' : 'Menu failed save.');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $products = new Products();
        $data ['product'] = $products->getByCondition(array('id'=>$request->id))->first();

        return view ('modules.adminpage', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $products = new Products();
        $products = $products->getByCondition(array('id'=>$request->id))->first();

        return json_encode($products);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $products = new Products();
        $results = $products->removeByCondition(array('id'=>$request->id));

        return json_encode(array("message"=> ($results) ? 'Menu deleted successfully.' : 'Menu failed remove'));
    }
}
