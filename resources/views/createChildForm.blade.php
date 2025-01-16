@extends('layouts.app')
@section('content')

<div class="backBtn">
    <a href="{{ route('santa') }}"> 
        <img src="{{asset('img/arrow_red.ico')}}" alt="back-Button" class="add">
    </a>
</div>

    <div class="formChild">
        <h2 class="form-title">Add New Child</h2>
        <form action="{{ route('santastore') }}" method="POST" class="form-container">

        @csrf

            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-input">
            </div>

            <div class="form-group">
                <label for="surname" class="form-label">Surname</label>
                <input type="text" name="surname" id="surname" class="form-input">
            </div>

            <div class="form-group">
                <label for="photo" class="form-label">Photo</label>
                <input type="text" name="photo" id="photo" class="form-input"">
            </div>

            <div class="form-group">
                <label for="age" class="form-label">Age</label>
                <input type="number" name="age" id="age" class="form-input">
            </div>

            <div class="form-group">
                <label for="naughty" class="form-label">Naughty</label>
                <select name="naughty" id="naughty" class="form-select" required>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="country" class="form-label">Country</label>
                <input type="text" name="country" id="country" class="form-input">
            </div>

            <div class="form-actions">
                <button type="submit" class="form-button">Add New</button>
            </div>
        </form>
    </div>
@endsection

