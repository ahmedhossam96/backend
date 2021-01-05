@foreach($orders as $order)
    <tr>
        <td>{{ $order->id }}</td>
        <td>{{$order->client?$order->client->name:""}}</td>
        <td>{{ $order->user->name }}</td>
        <td>                               
            {{$order->payment?$order->payment->name:""}}                                  
        </td>
        <td>{{ $order->total_amount }} $</td>                                        
        <td>
            <a href="{{ route('admin.orders.show', $order) }}" class="btn btn-info">Show</a>
            <a href="{{ route('admin.orders.edit', $order) }}" class="btn btn-primary">Edit</a>                                          
            <button type="button" class="btn btn-danger delete" data-url="{{ route('admin.orders.destroy', $order)}}">Delete</button>                                       
            </td>
    </tr>
@endforeach
