@extends('layouts.app')
@section('content')
<div class="col-lg-1">
<a class="btn btn-success" href="{{url('Products/create') }}">Ajouter</a>
</div>
<table class="table table-bordered">
    <tr>
    <th>No</th>
    <th>Nom</th>
    <th>Email</th>
    <th>Actions</th>

    </tr>
    @foreach ($users as $index => $user)
    <tr>
    <td>{{ $index }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>

    <td>

            {{-- <a class="btn btn-info" href="{{ url('Products/'. $product->id) }}">Voir</a>
            <a class="btn btn-primary" href="{{ url('Products/'. $product->id .'/edit') }}">Modifier</a>
            <a class="btn btn-danger" href="{{ url('Products/'. $product->id .'/delete') }}">Supprimer</a> --}}

            </td>
            </tr>
            @endforeach

            </table>

@endsection

