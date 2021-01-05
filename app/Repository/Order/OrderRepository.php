<?php


namespace App\Repository\Order;


use App\Order;
//use App\Repository\Order\OrderRepositoryInterface;
use Illuminate\Http\Request;

class OrderRepository implements OrderRepositoryInterface
{

    /**
     * @var Order
     */
    protected $model;

    public function __construct(Order $model)
    {
        $this->model = $model;
    }

    public function create($request)
    {
       $request->merge([
            'user_id' => $request->user()->id // auth()->user()->id, Auth::user()->id
        ]);

        $order = $this->model::create($request->all());
        // @TODO validation on calculation
        $products=$request->get('products');
        $totalamount=0;
        foreach($products as $product){
           $quantity=$product['quantity'];   
           $price= $product['price'];
            $total= $quantity * $price;
            $totalamount +=$total;
        }
        $order->total_amount =$totalamount;
        $order->products()->attach($request->get('products'));
        $order->save();
        return $order;
    }

    public function paginate(Request $request)
    {
        $q = $request->query('search');

        return $this->model::where('date' , 'LIKE' , "%{$q}%")
          ->paginate($request->query('limit' , 10));

         // $q = $request->query('search');

        return $this->model::with(['products' , 'client' , 'payment' ])->where('date' , 'LIKE' , "%{$q}%")
            ->paginate($request->query('limit' , pagination_count));
    }
    
}