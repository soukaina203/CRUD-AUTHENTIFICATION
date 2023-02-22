@extends('layouts.app')
@section('content')
 <h1>Tutoriel Laravel 9 CRUD</h1>
 <table class="table table-bordered">
 <tr>
 <th>Nom:</th>
 <td>{{ $productTarget->title }}</td>
 </tr>
 <tr>
 <th>Price:</th>
 <td>{{ $productTarget->prix }}</td>
 </tr>
 <tr>

 </tr>
 </table>
@endsection
