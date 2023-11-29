@extends('layouts.admin')

@section('content')
    <h1>Elenco Categorie</h1>

    <div class="row">
        <div class="col-6">

            @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
            @endif

            @if (session('success'))
            <div class="alert alert-success" role="alert">
                @if (session('success'))
            </div>
            @endif

            </div>
            <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nuova Categoria" name="name">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cerca</button>
            </div>
            </form>
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
