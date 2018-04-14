@extends('../layouts.app')
@section('content')
<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="row">
        <div class="form-control">
        <form method="POST">
            {{csrf_field()}}

            <div class="form-group">
                <div class="col-lg-6">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="My title">
                    <small id="helpId" class="text-muted">Help text</small>
                </div>
                <div class="col-lg-6">
                    <label for="content">Content</label>
                    <input type="text" name="content" id="content" class="form-control" placeholder="My content">
                    <small id="helpId" class="text-muted">Help text</small>
                </div>
                <div class="form-group">
                  <label for="categorie">Categorie</label>
                  <select class="form-control" name="categorie" id="categorie">
                      @foreach($categories as $categorie)
                        <option value="{{ $categorie['id'] }}">{{ $categorie['name']}}</option>
                      @endforeach
                  </select>
                </div>
            </div>
            <button action="submit" class="btn btn-primary">Envoyer</button>
        </form>
        </div>
    </div>
</div>

@endsection