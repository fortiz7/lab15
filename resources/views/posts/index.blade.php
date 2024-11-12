<!-- resources/views/posts/index.blade.php -->
<h1 style="color: blue; font-family: Arial, sans-serif;">Lista de Posts</h1>
<ul>
    @foreach($posts as $post)
        <li><strong>{{ $post->title }}</strong>: {{ $post->content }}</li>
    @endforeach
</ul>
