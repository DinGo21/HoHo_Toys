@extends('layouts.app')

@section('content')
<div class="addBtn">
    <a href="{{ route('elfcreate') }}">
        <img src="img/addButton.ico" alt="add-Button" class="add">
        <p>Add New Toy</p>
    </a>
</div>

<div>
    <h5>0+ Toys: {{ $toyCounts[0] }}</h5>
    <h5>3+ Toys: {{ $toyCounts[1] }}</h5>
    <h5>7+ Toys: {{ $toyCounts[2] }}</h5>
    <h5>12+ Toys: {{ $toyCounts[3] }}</h5>
    <h5>16+ Toys: {{ $toyCounts[4] }}</h5>
    <h5>18+ Toys: {{ $toyCounts[5] }}</h5>
    <h5>Total Toys: {{ $toyCounts[6]}}</h5>
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