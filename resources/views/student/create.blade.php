@extends('layout')

@section('title', 'Create student')

@section('content')
  <form action="{{ route('students.store') }}" method="POST" class="container">
    @csrf
    @method('POST')

    <a href="{{ route('students.index') }}">Go back</a>
    <h1>Add student</h1>

    <div class="mb-3">
      <label for="first_name" class="form-label">First name</label>
      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter your first name" required>
    </div>
    <div class="mb-3">
      <label for="middle_name" class="form-label">Middle name</label>
      <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Enter your middle name">
    </div>
    <div class="mb-3">
      <label for="last_name" class="form-label">Last name</label>
      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter your last name" required>
    </div>
    <div class="mb-3">
      <label for="age" class="form-label">Age</label>
      <input type="number" class="form-control" id="age" name="age" placeholder="Enter your age" required>
    </div>
    <div class="mb-3">
      <label for="gender" class="form-label">Gender</label>
      <select class="form-select" id="gender" name="gender" required>
        <option selected>Select your gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="date_of_birth" class="form-label">Birth of date</label>
      <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required>
    </div>
    <button class="btn btn-primary">Submit</button>
  </form>
@endsection