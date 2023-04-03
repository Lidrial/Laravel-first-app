<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title>Mon mini-blog</title>
    </head>

    <body>
        @extends("layouts.app")
        @section("title", "Tous les articles")
        @section("content")

        <h1>Nos articles</h1>

        <p>
            <a href="{{ route('posts.create') }}" title="Créer un article">Créer un nouvel article</a>
        </p>

        <table border="1">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th colspan="2" >Opérations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>
                        <a href="{{ route('posts.show', $post) }}" title="Lire l'article" >{{ $post->title }}</a>
                    </td>
                    <td>
                        <a href="{{ route('posts.edit', $post) }}" title="Modifier l'article" >{{ $post->title }}</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('posts.destroy', $post) }}">
                            <!-- CSRF token -->
                            @csrf
                            @method("DELETE")
                            <input type="submit" value="x Supprimer">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endsection

    </body>
</html> 