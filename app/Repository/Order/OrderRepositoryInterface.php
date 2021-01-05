<?php


namespace App\Repository\Order;

use Illuminate\Http\Request;

interface OrderRepositoryInterface
{
    public function create(Request $request);

    public function paginate(Request $request);
   

}
