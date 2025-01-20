@extends('layouts.app')

@section('content')

<div class="addBtn">
    <a href="{{ route('santa') }}"> 
        <img src="{{asset('img/arrow_red.ico')}}" alt="back-Button" class="add">
        <p>Back to Santa</p>
    </a>
</div>

    <div class="cardSection">
        <div class="card" id="oneCard">
            <img src="{{$child->photo}}" class="card-img-top-show" alt="Photo of {{$child->name}} {{$child->surname}}">
            <div class="card-body">
                <h5 class="card-title">{{$child->name}} {{$child->surname}}</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Age: {{$child->age}}</li>
                <li class="list-group-item">Behavior: {{$child->naughty ? 'Bad' : 'Good'}}</li>
                <li class="list-group-item">Country: {{$child->country}}</li>
            </ul>

            <div class="card-body">
                <a href="{{ route('santaedit', ['id' => $child->id]) }}"> 
                    <img src="{{ asset('img/editIcon.ico') }}" alt="edit-Button" class="crudBtn">
                </a>
            </div>
        </div>
    </div>

@endsection