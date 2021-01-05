@foreach($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td><img  style="width: 90px; height: 90px;" src="{{asset('images/products/'.$product->img)}}"></td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->quantity }}</td>
        <td>
            @if ($product->category)
                <a href="{{ route('admin.categories.show', $product->category) }}" class="link-item">{{ $product->category->name }}</a>
            @endif
        </td>
        <td>
            @if ($product->user)
                {{ $product->user->name }}
            @endif
        </td>
        <td>{{ $product->description }}</td>
        <td>
            <a href="{{ route('admin.products.show', $product) }}" class="btn btn-info">Show</a>
            <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-primary">Edit</a>                                       
            <button type="button" class="btn btn-danger delete" data-url="{{  route('admin.products.destroy', $product) }}">Delete</button>
        </td>
    </tr>
@endforeach

