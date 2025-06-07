@extends('layout')

@section('title', 'Student list')

@section('content')
    <main class="container">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="d-flex justify-content-between align-items-center">
            <h1>Student list</h1>
            <a href="{{ route('students.create') }}" class="btn btn-success">Add student</a>
        </div>
        <table class="table border">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Date of birth</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <th scope="row">{{ $student->id }}</th>
                        <td>{{ $student->last_name }},
                            {{ $student->first_name }}{{ $student->middle_name ? ' ' . $student->middle_name : '' }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->gender }}</td>
                        <td>{{ $student->date_of_birth }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection
