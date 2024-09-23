@extends('layouts/layout')

@section('content')

    <h1>My Todos</h1>
    <table>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Due Date</th>
            <th>Completed?</th>
        </tr>
        @for($index = 0;$index < count($todos);$index++)
        <tr>
            <td>{{$index +1}}</td>
            <td>{{$todos[$index]['description']}}</td>
            <td>
                @if($todos[$index]['due_date'])
                    {{date('jS M Y', strtotime($todos[$index]['due_date']))}}
                @else
                    '--'
                @endif
            </td>
            <td>
                @if($todos[$index]['is_completed'])
                    Yes
                @else
                    No
                @endif
            </td>
        </tr>
        @endfor
    </table>

@endsection