<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>
            <a href = "{{ route('home') }}">Home</a>
        </li>
        <li><a href = "{{ route('contact') }}">contact</a></li>
        <li>
            <a href = "{{ route('blog-post',['id' => 1]) }}">Blog Post</a>
        </li>

    </ul>
   @yield('content') 
</body>
</html>