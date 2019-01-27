@extends('layouts.master')
@section('content')
	<h1>Estas en index desde el archivo index.blade.php</h1>

{{--<div class="row">

    @foreach( $arrayPeliculas as $key => $pelicula )
    <div class="col-xs-6 col-sm-4 col-md-3 text-center">

        <a href="{{ url('/catalog/show/' . $key ) }}">
            <img src="{{$pelicula['poster']}}" style="height:200px"/>
            <h4 style="min-height:45px;margin:5px 0 10px 0">
                {{$pelicula['title']}}
            </h4>
        </a>

    </div>
    @endforeach

</div>--}}
<form action="{{URL::to('/catalog/show')}}" method="POST">
                    {!!csrf_field()!!}
                    {{-- se supone que se usa para buscar--}}
                    <span>id de pelicula</span>
                    <input type="text" name="id">
                    <input type="submit" name="button">
                </form>


@stop