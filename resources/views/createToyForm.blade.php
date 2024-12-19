@extends('layouts.app')
@section('content')

<div class="backBtn">
    <a href="{{ route('elf') }}"> 
        <img src="{{asset('img/arrow_red.ico')}}" alt="back-Button" class="add">
    </a>
</div>

    <div class="formToy">
        <h2 class="form-title">Add New Toy</h2>
        <form action="{{ route('elfstore') }}" method="POST" class="form-container">

        @csrf

            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-input">
            </div>

            <div class="form-group">
                <label for="photo" class="form-label">Photo</label>
                <input type="text" name="photo" id="photo" class="form-input">
            </div>

            <div class="form-group">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-input">
            </div>

            <div class="form-group">
                <label for="min_age" class="form-label">Minimum Age</label>
                <select name="min_age" id="min_age" class="form-select" required>
                    <option value="0">0-3</option>
                    <option value="3">3-7</option>
                    <option value="7">7-12</option>
                    <option value="12">12-16</option>
                    <option value="16">16-18</option>
                    <option value="18">+18</option>
                </select>
            </div>

            <div class="form-actions">
                <button type="submit" class="form-button">Add New Toy</button>
            </div>
        </form>
    </div>
@endsection
