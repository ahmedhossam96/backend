
@foreach ($products as  $product) 
    
    <div class="row mb-3 mt-2" style="border: 1px solid lightgray;">
        <div class="col-2 pl-4 ">
            <img class="mt-3" style="width: 140px; height: 129px;" src="{{asset('images/products/'.$product->img)}}">
        </div>
        <div class="col-6 " >
            <h2 class="mt-3"><span style="font-size:25px">Name:</span>
             {{$product->name}}</h2>
            <p><span style="font-size:25px">Description: </span>{{$product->description}}</p>
            <h4 class="pb-3"><span style="font-size:25px">Price:</span> {{$product->price}} $</h4>
        </div>
        <div class="col-3 " >
            <a type="button" class="btn btn-success delete " 
            style="margin-left: 94px;margin-top: 72px;"
            href="{{route('admin.inventory' , $product ) }}">Add to inventoey</a>
        </div>
    </div>
    
@endforeach

