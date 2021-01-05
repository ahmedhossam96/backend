<?php

use App\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<11;$i++)
        {
            $order= new Order();
            $order-> date = now();
            $order->id = $i;
            $order->client_id=  $i;
            $order->user_id= $i ;
            
            $order->total_amount =  $i;
            
        
            $order->deleted_at = now();
            $order->created_at = now();  
            $order->updated_at = now();  

            
            $order->save();
        }
    }
}
