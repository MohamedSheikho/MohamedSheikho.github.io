<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $product=new \App\Product([
                'imagePath'=>'{{asset(\'cpanel/img/user2-160x160.jpg\')}}',
                'title'=>'Usersss',
                'title'=>'the bigeest delovpment',
                'price'=>'10',

            ]);
            $product->save();
            $product=new \App\Product([
                'imagePath'=>'{{asset(\'cpanel/img/user2-160x160.jpg\')}}',
                'title'=>'Usersss',
                'title'=>'the bigeest delovpment',
                'price'=>'10',

            ]);
            $product->save();
            $product=new \App\Product([
                'imagePath'=>'{{asset(\'cpanel/img/user2-160x160.jpg\')}}',
                'title'=>'Usersss',
                'title'=>'the bigeest delovpment',
                'price'=>'10',

            ]);
            $product->save();
    }
}
