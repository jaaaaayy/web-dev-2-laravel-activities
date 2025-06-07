@extends('layout')

@section('title', 'Edit student')

@section('content')
  <form action="{{ route('students.update', $student->id) }}" method="POST" class="container">
    @csrf
    @method('PUT')

    <a href="{{ route('students.index') }}">Go back</a>
    <h1>Update student</h1>

    <div class="mb-3">
      <label for="first_name" class="form-label">First name</label>
      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter your first name" value="{{$student->first_name}}" required>
    </div>
    <div class="mb-3">
      <label for="middle_name" class="form-label">Middle name</label>
      <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Enter your middle name" value="{{$student->middle_name}}">
    </div>
    <div class="mb-3">
      <label for="last_name" class="form-label">Last name</label>
      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter your last name" value="{{$student->last_name}}" required>
    </div>
    <div class="mb-3">
      <label for="age" class="form-label">Age</label>
      <input type="number" class="form-control" id="age" name="age" placeholder="Enter your age" value="{{$student->age}}" required>
    </div>
    <div class="mb-3">
      <label for="gender" class="form-label">Gender</label>
      <select class="form-select" id="gender" name="gender" required>
        <option selected>Select your gender</option>
        <option value="male" {{ $student->gender == 'male' ? 'selected' : '' }}>Male</option>
        <option value="female" {{ $student->gender == 'female' ? 'selected' : '' }}>Female</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="date_of_birth" class="form-label">Date of birth</label>
      <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{$student->date_of_birth}}" required>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
@endsection