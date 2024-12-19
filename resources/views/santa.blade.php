@extends('layouts.app')

@section('content')
<div class="addBtn">
    <a href="{{ route('santacreate') }}">
        <img src="img/addButton.ico" alt="add-Button" class="add">
        <p>Add New Child</p>
    </a>
</div>

<div class="cardSection">
    @foreach ($children as $child)
        <div class="card" style="width: 18rem;">
            <img src="{{$child->photo}}" class="card-img-top" alt="Photo of {{$child->name}} {{$child->surname}}">
            <div class="card-body">
                <h5 class="card-title">{{$child->name}} {{$child->surname}}</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Id: {{$child->id}}</li>
                <li class="list-group-item">Age: {{$child->age}}</li>
                <li class="list-group-item">Behavior: {{$child->naughty ? 'Bad' : 'Good'}}</li>
            </ul>
            <div class="card-body">
                <a href="{{ route('santashow', ['id' => $child->id]) }}">
                    <img src="img/viewIcon.ico" alt="view-Button" class="crudBtn">
                </a>

                <a href="?action=delete&id={{$child->id}}">
                    <img src="{{ asset('img/deleteIcon.ico') }}" alt="delete-Button" class="crudBtn">
                </a>
            </div>
        </div>
    @endforeach
</div>

@endsection