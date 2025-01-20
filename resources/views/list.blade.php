@extends('layouts.app')

@section('content')

<div class="addBtn">
    <a href="{{ route('santa') }}">
        <img src="{{ asset('img/arrow_red.ico') }}" alt="back-Button" class="add">
        <p>Back to Santa</p>
    </a>

    <a href="{{ route('santalist') }}">
        <img src="{{ asset('img/list.png') }}" alt="list-Button" class="add">
        <p>Santa's List</p>
    </a>
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