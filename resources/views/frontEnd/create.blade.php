@extends('layouts.app')

@section('content')
    <h1>Add Profile</h1>
    <form action="{{ route('profiles.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" required>
        <textarea name="description" placeholder="Description" required></textarea>
        <button type="submit">Submit</button>
    </form>
@endsection