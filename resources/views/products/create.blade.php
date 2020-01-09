@extends("../layouts.template")

@section("header")
    Insert registers
@endsection

@section("content")

    {{-- <form action="/products" method="post"> --}}
        {!! Form::open(['url' => '/products', 'method'=> 'post', 'files'=>true]) !!}
        
        <table>
            <tr>
                <td>{!! Form::file('file') !!}</td>
            </tr>
        </table>
        
        
        
        
        <table>
            <tr>
                <td>{!! Form::label('name', 'Name:'); !!}</td>
                <td>
                    {{-- <input type="text" name="NameArticul"> --}}
                    {!! Form::text('NameArticul') !!}

                        {{ csrf_field() }}

                </td>
            </tr>
            <tr>
                <td>{!! Form::label('section', 'Section:'); !!}</td>
                <td>
                    {{-- <input type="text" name="Section"> --}}
                    {!! Form::text('Section') !!}
                </td>
            </tr>
            <tr>
                <td>{!! Form::label('price', 'Price:'); !!}</td>
                <td>
                    {{-- <input type="text" name="Price"> --}}
                    {!! Form::text('Price') !!}
                </td>
            </tr>
            <tr>
                    <td>{!! Form::label('datetime', 'Datetime:'); !!}</td>
                    <td>
                        {{-- <input type="text" name="Datetime"> --}}
                        {!! Form::text('Datetime') !!}
                    </td>
            </tr>
            <tr>
                    <td>{!! Form::label('country', 'Country:'); !!}</td>
                    <td>
                        {{-- <input type="text" name="Country_birth"> --}}
                        {!! Form::text('Country_birth') !!}
                    </td>
            </tr>
            <tr>
                <td>

                 {{-- <input type="submit" name="send" value="Send"> --}}
                    {!! Form::submit('Send') !!}
                </td>
                <td>
                    {{-- <input type="reset" name="Remove" value="Remove"> --}}
                    {!! Form::reset('Remove') !!}
                </td>
            </tr>
        </table>
        
        {!! Form::close() !!}
    {{-- </form> --}}
    @if(count($errors)>0)
        <ul>
            @foreach ($errors->all() as $error)
                 <li>{{$error}}</li>   
            @endforeach
        </ul>
        @endif

   @endsection 

   @section('footer')
   @endsection