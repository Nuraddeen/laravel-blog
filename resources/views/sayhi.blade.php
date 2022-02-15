@extends('layouts.layout')

@section("body-content")


<h1> Hi, Welcome back, My {{ $name }} </h1>

<table border="1">

    <tr>
        <th>SN</th>
        <th>Full Name</th>
        <th>Age</th>
    </tr>

    @foreach ($users as $user)
    <tr>
        <td> {{ $loop->iteration }} </td>
        <td> {{ $user["fullname"]  }}  </td>
        <td> {{ $user["age"] }}</td>
    </tr>

    @endforeach


</table>

@endsection


