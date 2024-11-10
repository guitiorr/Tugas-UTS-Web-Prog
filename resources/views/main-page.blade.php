<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Main Page</title>
</head>
<body>
    <x-nav-bar></x-nav-bar>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <div class="grid grid-cols-2 gap-4 border border-black p-4">
        @foreach ($posts as $post)
            <div class="col-span-1 text-center border-b border-gray-300 p-2">
                <a href="/post/{{ $post->id }}">{{ $post->title }}</a>
            </div>
            <div class="col-span-1 text-center border-b border-gray-300 p-2">
                {{ $post->body }}
            </div>
        @endforeach
    </div>

    <div class="mt-4">
        {{ $posts->links() }}
    </div>


</body>
</html>
