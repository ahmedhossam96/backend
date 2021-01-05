<?php

use Illuminate\Database\Seeder;

use App\User;

class UserSeeder extends Seeder
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
            $user = new User();
            
            $user->id = $i;
            $user->name= 'name' . $i;
            $user->email= 'ahmed@gmail.com' . $i;  

            $user->email_verified_at = now();  ;

            $user->password = 'password' . $i;

            
            $user->save();
        }


    }
    
}
