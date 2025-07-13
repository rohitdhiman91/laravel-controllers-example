<!DOCTYPE html>
<html>
<head>
    <title>All Posts</title>
</head>
<body>
    <h1>Blog Posts</h1>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ url('/posts/' . $post['id']) }}">{{ $post['title'] }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
