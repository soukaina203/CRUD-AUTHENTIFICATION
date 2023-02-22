@extends('layouts.app')
@section('content')
<div class="col-lg-1">
<a class="btn btn-success" href="{{url('Products/create') }}">Ajouter</a>
</div>
<table class="table table-bordered">
    <tr>
    <th>No</th>
    <th>Nom</th>
    <th>Price</th>
    <th>Actions</th>

    </tr>
    @foreach ($prod as $index => $product)
    <tr>
    <td>{{ $index }}</td>
    <td>{{ $product->title }}</td>
    <td>{{ $product->prix }}DH</td>

    <td>

            <a class="btn btn-info" href="{{ url('Products/'. $product->id) }}">Voir</a>
            <a class="btn btn-primary" href="{{ url('Products/'. $product->id .'/edit') }}">Modifier</a>
            <a class="btn btn-danger" href="{{ url('Products/'. $product->id .'/delete') }}">Supprimer</a>

            </td>
            </tr>
            @endforeach

            </table>

@endsection

