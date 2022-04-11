<div class="container">
    <h3> Formulaire de commentaire :</h3>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

  <form method="post" action="{{url('/comment')}}">
    @csrf
    <input type="hidden" id="serie_id" name="serie_id" value="{{  $serie->id }}"  >
    <input type="hidden" id="title" name="title" value="{{  $serie->title }}"  >

    <div class="form-group">
        <label for="author_id">Utilisateur</label>
        <select name="author_id">
            @if(old('author_id'))
                <?php $old_author_name = \App\Models\User::where('id',old('author_id'))->first(); ?>
                <option value="{{ old('author_id') }}">
                    {{$old_author_name->name}}
                </option>
            @else
                <option value=''>Sélectionner un utilisateur</option>
            @endif
            @foreach ($users as $user)
                <option value="{{ $user->id }}">
                    {{$user->name}}
                </option>
            @endforeach
        </select>
    </div>
    <label for="content">Commentaire</label>
    <textarea id="content" name="content"  placeholder="Veuillez laisser un commentaire..." cols="30" rows="10">
    {{ old('content') }}
    </textarea>

    <label for="content">Note</label>
    <div class="star-rating">
        <input type="radio" id="5-stars" name="rating" value="5" />
        <label for="5-stars" class="star">&#9733;</label>
        <input type="radio" id="4-stars" name="rating" value="4" />
        <label for="4-stars" class="star">&#9733;</label>
        <input type="radio" id="3-stars" name="rating" value="3" />
        <label for="3-stars" class="star">&#9733;</label>
        <input type="radio" id="2-stars" name="rating" value="2" />
        <label for="2-stars" class="star">&#9733;</label>
        <input type="radio" id="1-star" name="rating" value="1" />
        <label for="1-star" class="star">&#9733;</label>
    </div>
    <br/>

    <input type="submit" value="Soumettre">

  </form>
</div>
