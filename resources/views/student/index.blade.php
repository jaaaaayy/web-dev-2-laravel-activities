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
                    <th scope="col">Actions</th>
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
                        <td>
                            <a href={{ route('students.edit', $student) }} class="btn btn-warning">Edit</a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteModal{{ $student->id }}">
                                Delete
                            </button>
                        </td>
                    </tr>

                    <div class="modal fade" id="deleteModal{{ $student->id }}" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete student</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete student {{ $student->name }}?</p>
                                    <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                                        class="float-end">
                                        @csrf
                                        @method('DELETE')

                                        <div class="float-end">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <button type="submmit" class="btn btn-primary">Proceed</button>
                                        </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection
