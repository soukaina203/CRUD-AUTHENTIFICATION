@extends('layouts.app')

@section('content')
<form method="post" action="{{ url('Products/'.$productTarget->id) }}" >
    @method('PATCH')
    @csrf
    <div class="form-group mb-3">
    <label for="title">le Nom de Produit  :</label>
    <input type="text" class="form-control" id="title" placeholder="Entrez un produit" name="title" value='{{$productTarget->title}}'>
    </div>
    <div class="form-group mb-3">
    <label for="prix">le Prix de Produit:</label>
    <input type="text" class="form-control" id="prix" placeholder="prix" name="prix" value="{{$productTarget->prix}}">
    </div>

    </div>
    <button type="submit" class="btn btn-primary">Enregister</button>
    </form>
@endsection
