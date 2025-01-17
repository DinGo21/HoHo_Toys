@extends('layouts.app')

@section('content')
<div class="addBtn">
    <a href="{{ route('santacreate') }}">
        <img src="img/addButton.ico" alt="add-Button" class="add">
        <p>Add New Child</p>
    </a>

    <div>
            <h5 class="good">Good Children: {{ $children->where('naughty', 0)->count() }}</h5>
            <h5 class="bad">Bad Children: {{ $children->where('naughty', 1)->count() }}</h5>
            <h5 class="total">Total Children: {{ $children->count() }}</h5>
    </div>

    <a href="{{ route('santalist') }}">
        <img src="img/list.png" alt="list-Button" class="add">
        <p>Santa's List</p>
    </a>
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

<div class="tableChild">
    <h2 class="table-title">Santa's List</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Behaviour</th>
                <th>Presents</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($children as $child)
                <tr>
                    <td>{{ $child->id }}</td>
                    <td>{{ $child->name }}</td>
                    <td>{{ $child->age }}</td>
                    <td>
                        @if ($child->naughty)
                            <span class="inactive">Bad</span>
                        @else
                            <span class="active">Good</span>
                        @endif
                    </td>
                    <td>
                        @foreach ($child->toys as $toy)
                            <p>{{ $toy->name }} (Min Age: {{ $toy->min_age }})</p>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection