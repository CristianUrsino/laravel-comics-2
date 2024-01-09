@extends('leyout/app')
@section('title', 'products create')

@section('content')
<div class="my-3">
    <h2>products</h2>
    
    @if ($errors->any())
        <div style="background-color: rgb(221, 69, 69)">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class=" my-3">
        <form action="{{route( 'comics.store')}}" method="post">
            
            @csrf

            <input class="form-controll" type="text" id="title" name="title" placeholder="inserisci titolo">
            @error('title')
                <span style="background-color: rgb(221, 69, 69)">
                    {{$message}}
                </span>
            @enderror

            <input class="form-controll" type="text" id="price" name="price" placeholder="inserisci titolo">
            @error('title')
                <span style="background-color: rgb(221, 69, 69)">
                    {{$message}}
                </span>
            @enderror
            <input class="form-controll" type="date" id="sale_date" name="sale_date" placeholder="inserisci titolo">
            <input class="form-controll" type="text" id="series" name="series" placeholder="inserisci titolo">
            @error('title')
                <span style="background-color: rgb(221, 69, 69)">
                    {{$message}}
                </span>
            @enderror
            <input class="form-controll" type="text" id="type" name="type" placeholder="inserisci titolo">

            <button>invia</button>

        </form>
    </div>
</div>
@endsection
