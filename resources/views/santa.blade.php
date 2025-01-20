@extends('layouts.app')

@section('content')

<div class="counterChildren">
    <div class="addBtn">
        <a href="{{ route('santacreate') }}">
            <img src="img/addButton.ico" alt="add-Button" class="add">
            <p>Add New Child</p>
        </a>
    </div>

    <div class="counterChildrenList">
        <div class="counterNaughtyList">
            <p class="counterNaughty">Good: {{ $children->where('naughty', 0)->count() }}</p>
            <p class="counterNaughty">Bad: {{ $children->where('naughty', 1)->count() }}</p>
            <p class="counterNaughty">Total Children: {{ $children->count() }}</p>
        </div>
    </div>
    
    <div class="addBtn" id="santaList">
        <a href="{{ route('santalistview') }}">
            <img src="img/list.png" alt="list-Button" class="add">
            <p>Santa's List</p>
        </a>
    </div>

</div>

<div class="cardSection">
    @foreach ($children as $child)
        <div class="card" style="width: 18rem;">

            <div class="cardimg">
                <img src="{{ $child->photo }}" class="card-img-top" alt="Photo of {{ $child->name }} {{ $child->surname }}">
            </div>

            <div class="card-body">
                <h5 class="card-title">{{ $child->name }} {{ $child->surname }}</h5>
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">Id: {{ $child->id }}</li>
                <li class="list-group-item">Age: {{ $child->age }}</li>
                <li class="list-group-item">Behavior: {{ $child->naughty ? 'Bad' : 'Good' }}</li>
                <li class="list-group-item">Country: {{ $child->country }}</li>
            </ul>

            <div class="card-body">

                <div class="crud-container">
                    <a href="{{ route('santashow', ['id' => $child->id]) }}">
                        <img src="img/viewIcon.ico" alt="view-Button" class="crudBtn">
                    </a>

                    <a href="{{ route('santadestroy', ['id' => $child->id]) }}">
                        <img src="{{ asset('img/deleteIcon.ico') }}" alt="delete-Button" class="crudBtn">
                    </a>
                </div>

            </div>

        </div>
    @endforeach
</div>

@endsection