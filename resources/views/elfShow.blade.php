@extends('layouts.app')

@section('content')

<div class="backBtn">
    <a href="{{ route('elf') }}"> 
        <img src="{{asset('img/arrow_red.ico')}}" alt="back-Button" class="add">
    </a>
</div>

<div class="cardSection">
    <div class="card" id="oneCard">
        <img src="{{$toy->photo}}" class="card-img-top" alt="Photo of {{$toy->name}}">
        <div class="card-body">
            <h5 class="card-title">{{$toy->name}}</h5>
            <p class="card-text">{{$toy->description}}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Min age: {{$toy->min_age}}</li>
        </ul>
        <div class="card-body">
            <a href="{{ route('elfedit', $toy->id) }}">
                <img src="{{ asset('img/editIcon.ico') }}" alt="edit-Button" class="crudBtn">
            </a>
        </div>
    </div>
</div>
@endsection