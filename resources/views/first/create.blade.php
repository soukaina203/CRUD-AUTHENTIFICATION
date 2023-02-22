@extends('layouts.app')

@section('content')
<form action="{{ url('Products') }}" method="post">
    @csrf
    <div class="form-group mb-3">
    <label for="title">le Nom de Produit  :</label>
    <input type="text" class="form-control" id="title" placeholder="Entrez un produit" name="title">
    </div>
    <div class="form-group mb-3">
    <label for="prix">le Prix de Produit:</label>
    <input type="text" class="form-control" id="prix" placeholder="prix" name="prix">
    </div>

    </div>
    <button type="submit" class="btn btn-primary">Enregister</button>
    </form>
@endsection
