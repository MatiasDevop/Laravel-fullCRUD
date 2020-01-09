@extends("../layouts.template")

@section("header")
    Show registers
@endsection

@section("content")

        <table class="table container">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Name Articul</th>
                <th scope="col">Section</th>
                <th scope="col">Price</th>
                <th scope="col">Date</th>
                <th scope="col">Country</th>
                <th scope="col">Ruta Images</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
            <tr>
                <td><a href="{{route('products.edit', $product->id)}}"> {{$product->NameArticul}}</a></td>
                <td>{{$product->Section}}</td>
                <td> {{$product->Price}}</td>
                <td>{{$product->Datetime}}</td>
                <td>{{$product->Country_birth}}</td>
                <td>
                    @if($product->ruta != null)
                    <img src="images/{{$product->ruta}}" class="img-thumbnail" />
                    @endif
                </td>
                
               
            </tr>
            </tbody>      
            @endforeach
        </table>
    
   @endsection 

   @section('footer')
   @endsection