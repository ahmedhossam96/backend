<?php

use App\Shop;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
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
            $shop= new Shop();
            $shop->name= "adamstore";
            $shop->fname = "ahmed";
            $shop->lname = "hossam";
            $shop->email=  "ahmed@gmail.com" . $i;
            $shop->email_verified_at= now();
            
            $shop->address=  "louran";
            $shop->city=  "alexandria";
            $shop->country=  "egypt";
            $shop->phone=  "01002346789";
            $shop->pid=  "19962021987234871";
           
           
           
            
            $shop->commercialregister=  "199627234871";
            $shop->password=  "ahmed123";
            $shop->about=  "we are an amazing shop with allot of products check it out";
            $shop->image=  "/Users/ahmedhossam/Desktop/adamstore.jpg ";
            $shop->created_at = now();  
            $shop->updated_at = now();  

            
            $shop->save();
        }
    }
}
