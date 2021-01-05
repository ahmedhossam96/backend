<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Product;

class Search extends Component
{
    use WithPagination;
    public $searchTerm;

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        $q = $request->query('search');
        $categoryfilter = $request->query('category');
        $pricefilter = $request->query('price');
        return view('livewire.search',[
            'products' => Product::where('name','like', $searchTerm)->paginate(10),
            'productsFilterd' => Product::where('price', '=', $pricefilter)->orWhere('category_id', '=', $categoryfilter)
            ->paginate($request->query('limit', 5)),
        ]);
    }
}
