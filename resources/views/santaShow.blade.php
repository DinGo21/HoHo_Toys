@extends('layouts.app')

@section('content')

<div class="backBtn">
    <a href="{{ route('santa') }}"> 
        <img src="{{asset('img/arrow_red.ico')}}" alt="back-Button" class="add">
    </a>
</div>

    <div class="cardSection">
        <div class="card" style="width: 18rem;">
            <img src="{{$child->photo}}" class="card-img-top" alt="Photo of {{$child->name}} {{$child->surname}}">
            <div class="card-body">
                <h5 class="card-title">{{$child->name}} {{$child->surname}}</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Age: {{$child->age}}</li>
                <li class="list-group-item">Behavior: {{$child->naughty}}</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Gifts</a>
            </div>

            <div class="card-body">
                <a href="{{ route('santaedit', ['id' => $child->id]) }}"> 
                    <img src="{{ asset('img/editIcon.ico') }}" alt="edit-Button" class="crudBtn">
                </a>
            </div>
        </div>
    </div>

@endsection