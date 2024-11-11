<!-- resources/views/posts/index.blade.php -->
<h1>Lista de Posts</h1>
<ul>
    @foreach($posts as $post)
        <li>{{ $post->title }}</li>
    @endforeach
</ul>
