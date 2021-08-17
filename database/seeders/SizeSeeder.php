<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//para trabajar con relaciones
use Illuminate\Database\Eloquent\Builder;
use App\Models\Product;
class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //consulta a las realciones de ese modelo
         $products= Product::whereHas('subcategory', function(Builder $query){
            $query->where('color', true)
            ->where('size',true);
        })->get();


        $sizes = ['Talla S', 'Talla M', 'Talla L'];

        foreach ($products as $product) {

            foreach ($sizes as $size) {
                   //Va a llenar datos en la tabla size
            $product->sizes()->create([

                'name' => $size
            ]);
            }
            
         
        }
    }
}
