@extends('layouts.app')

@section('content')
<div class="addBtn">
        <a href="{{ route('elfcreate') }}"> 
            <img src="img/addButton.ico" alt="add-Button" class="add">
            <p>Add New Toy</p>
        </a>
</div>

    <div class="cardSection">
        @foreach ($toys as $toy)
            <div class="card" style="width: 18rem;">
                <img src="{{$toy->photo}}" class="card-img-top" alt="Photo of {{$toy->name}}">
                <div class="card-body">
                    <h5 class="card-title">{{$toy->name}}</h5>
                    <p class="card-text">{{$toy->description}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Min age: {{$toy->min_age}}</li>
                    <li class="list-group-item">Id: {{$toy->id}}</li>
                </ul>
                <div class="card-body">
                <a href="{{ route('elfshow', ['id' => $toy->id]) }}">
                    <img src="img/viewIcon.ico" alt="view-Button" class="crudBtn">
                </a>

                <a href="?action=delete&id={{$toy->id}}">
                    <img src="{{ asset('img/deleteIcon.ico') }}" alt="delete-Button" class="crudBtn">
                </a>
            </div>

            </div>
        @endforeach
    </div>
@endsection