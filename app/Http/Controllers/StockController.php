<?php

namespace App\Http\Controllers;
use App\Product;
use App\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->query('search');
/*
        return view('vendor.stock', [
            'stocks' => Stock::with(['product'  ]) 
                ->where('id', 'LIKE', "%{$q}%")
                ->paginate($request->query('limit', pagenation_count))
        ]);*/

     $cats =   Stock::with(['product'  ]) 
                ->where('id', 'LIKE', "%{$q}%")
                ->paginate($request->query('limit', pagenation_count));

                return json($cats);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product  $product)
    {
      
        return json($product);
        /*
        return view('vendor.inventory',[
            'product' =>$product
        ]);
        */
    }
    public function getStocks(Request $request) 
    {

       /*
        return view('vendor.table', [
            'stocks' => Stock::query()->paginate(pagenation_count)

        ]);
*/
         $cats = Stock::query()->paginate(pagenation_count);
       return json($cats);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $stock = Stock::create($request->all());
        return response()->json($stock, 201);
        //$cats = catergory::all();
        //return json($cats);

        //return redirect(route('admin.stocks.index', $stock));
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
    public function destroy(Stock $stock)
    {
        $stock->delete();
        return response()->json(null, 204);
       // return  redirect(route('stocks.index'));
    }
}

