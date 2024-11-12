<!-- resources/views/posts/index.blade.php -->
<h1 style="color: green; text-align: center;">Lista de Posts</h1>
<ul>
    @foreach($posts as $post)
        <li style="font-style: italic;"><strong>{{ $post->title }}</strong>: {{ $post->content }}</li>
    @endforeach
</ul>
