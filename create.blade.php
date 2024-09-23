@extends('layouts/layout')

@section('content')

    <h1>Add Todo</h1>
    <form method="post">
        <label>Title</label>
        <input type="text" name="title">
        <label>Due Date</label>
        <input type="date" name="due_date">
        <input type="checkbox" name="is_completed">
        <label> is Completed?</label>
        <br/><br/>
        <input type="submit">
    </form>

@endsection