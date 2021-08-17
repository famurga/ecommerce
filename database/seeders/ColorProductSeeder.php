<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//para trabajar con relaciones
use Illuminate\Database\Eloquent\Builder;
use App\Models\Product;
class ColorProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //consulta a las realciones de ese modelo
        $products= Product::whereHas('subcategory', function(Builder $query){
            $query->where('color', true)
            ->where('size',false);
        })->get();


        foreach ($products as $product) {
            # code...
            $product->colors()->attach([
                1 => [
                    'quantity' => 10
                ],
                2 => [
                    'quantity' => 10
                ],
                3 => [
                    'quantity' => 10
                ],
                4 => [
                    'quantity' => 10
                ] 
            ]);
        }
    }
}
