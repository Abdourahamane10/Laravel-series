<h3> Commentaires :</h3>
  <div>

  <table>
    <tr>
      <th>Auteur</th>
      <th>Commentaire</th>
      <th>Note</th>
      <th>Date</th>
    </tr>
    @foreach ( $comments as $comment )
    <tr>
      <td>{{ $comment->author->name }}</td>
      <td>{{ $comment->content }}</td>
      <td>{{ $comment->rating }}</td>
      <td>{{ $comment->date }}</td>
    </tr>
    @endforeach
  </table>
  </div>
