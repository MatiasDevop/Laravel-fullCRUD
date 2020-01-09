@extends("../layouts.template")

@section("header")
    Edit Registers
@endsection

@section("content")

    {{-- <form action="/products/{{$product->id}}" method="post"> --}}
        {!! Form::model($product, ['method'=>'post', 'action'=>['ProductsController@update', $product->id]]) !!}
        <table>
            <tr>
                <td> Name:</td>
                <td>
                    <input type="text" name="NameArticul" value="{{$product->NameArticul}}">
                        {{ csrf_field() }}
                    {{-- <input type="hidden" name="_method" value="PUT"> we have not already needed it if using collective--}}
                </td>
            </tr>
            <tr>
                <td>Section</td>
                <td>
                    <input type="text" name="Section" value="{{$product->Section}}">
                </td>
            </tr>
            <tr>
                <td>Price</td>
                <td>
                    <input type="text" name="Price" value="{{$product->Price}}">
                </td>
            </tr>
            <tr>
                    <td>Date time</td>
                    <td>
                        <input type="text" name="Datetime" value="{{$product->Datetime}}">
                    </td>
            </tr>
            <tr>
                    <td>Country birth</td>
                    <td>
                        <input type="text" name="Country_birth" value="{{$product->Country_birth}}">
                    </td>
            </tr>
            <tr>
                <td>

                 <input type="submit" name="send" value="Update">

                </td>
                <td>
                    <input type="reset" name="Remove" value="Remove fields">
                </td>
            </tr>
        </table>
        
      {!! Form::close() !!}
    {{-- </form> --}}

    {{-- <form action="/products/{{$product->id}}" method="post"> --}}
        {!! Form::model($product, ['method'=>'DELETE', 'action'=>['ProductsController@destroy', $product->id]]) !!}

        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="Delete register">
        
        {!! Form::close() !!}
    {{-- </form> --}}

   @endsection 

   @section('footer')
   @endsection