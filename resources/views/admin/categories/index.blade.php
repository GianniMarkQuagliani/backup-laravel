@extends('layouts.admin')

@section('content')
    <h1>Elenco Categorie</h1>

    <div class="row">
        <div class="col-6">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nuova Categoria">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Cerca</button>
            </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Azioni</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                  <tr>
                    <td>{{ $category->name }}</td>
                    <td>X</td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection
