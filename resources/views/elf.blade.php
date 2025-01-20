@extends('layouts.app')

@section('content')
<div class="elfNav">
    <div class="countToysGrid">
<div class ="countToys">
    <div class ="countToys1">
        <p class="count">0+: {{ $toyCounts[0] }}</p>
        <p class="count">3+: {{ $toyCounts[1] }}</p>
        <p class="count">7+: {{ $toyCounts[2] }}</p>
    </div>
    <div class ="countToys2">
        <p class="count">12+: {{ $toyCounts[3] }}</p>
        <p class="count">16+: {{ $toyCounts[4] }}</p>
        <p class="count">18+: {{ $toyCounts[5] }}</p>
    </div>
    <p class="count countTotal">Total Toys: {{ $toyCounts[6]}}</p>
</div>
</div>

<div class="addBtn">
    <a href="{{ route('elfcreate') }}">
        <img src="img/addButton.ico" alt="add-Button" class="add">
        <p>Add New Toy</p>
    </a>
</div>
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
                <li class="list-group-item">Id: {{$toy->id}}</li>
                <li class="list-group-item">Min age: 
                    @switch($toy->min_age)
                        @case(0)
                            0-3
                            @break
                        @case(3)
                            3-7
                            @break
                        @case(7)
                            7-12
                            @break
                        @case(12)
                            12-16
                            @break
                        @case(16)
                            16-18
                            @break
                        @case(18)
                            +18
                            @break
                        @default
                            Unknown
                    @endswitch
                </li>
            </ul>

            <div class="card-body">
                <div class="crud-container">
                    <a href="{{ route('elfshow', ['id' => $toy->id]) }}">
                        <img src="img/viewIcon.ico" alt="view-Button" class="crudBtn">
                    </a>

                    <a href="?action=delete&id={{$toy->id}}">
                        <img src="{{ asset('img/deleteIcon.ico') }}" alt="delete-Button" class="crudBtn">
                    </a>
                </div>
            </div>

        </div>
    @endforeach
</div>
@endsection