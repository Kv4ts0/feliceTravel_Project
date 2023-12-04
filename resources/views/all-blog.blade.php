<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/adminconsole.css">
    <title>All Blogs</title>
</head>
<body>
    <div class="heading">
        <a style="text-decoration: none;" href="/blog/all">
        <h1>Blog table</h1>
        </a>
        <div class="filter">
        <form action="{{ route('blogs.all') }}">
            <tr>
                <td><input type="number" name="id" value="{{ $filters['id'] }}" placeholder="ID"></td>
                <td colspan="2"><input type="text" value="{{ $filters['blogname'] }}"  name="blogname" placeholder="Enter the Blog name"></td>
                <td><button class="btn btn-success" type="submit">Search</button></td>
            </tr>
        </form>
</div>
    </div>
    
    <div class="outer-wrapper blog-wrapper">
    <div class="table-wrapper .blog-wrapper">
    <form action="/blog/add" method="POST" enctype="multipart/form-data">
    @csrf
    <table class="blog-table">
        </form>
        <thead>
            <th>Date Added</th>
            <th>Name</th>
            <th>Description</th>
            <th>Blog Image</th>
            <th>Actions</th>
        </thead>
        <tr>
            <form action="{{ route('blogs.add') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <td></td>
                <td><input type="text" name="blogname" placeholder="Blog name"></td>
                <td><textarea name="blogdescription" placeholder="Blog description"></textarea></td>
                <td><input class="form-control" type="file" name="blogimage" placeholder="blogimage"></td>  
                <td><button class="btn btn-success" type="submit">Add</button></td>
                <td>#</td>
            </tr>
            </form>
        @foreach($blogs as $bl)
        <tbody>
            <tr>
                <td>{{$bl->created_at}}</td>
                <td>{{$bl->blogname}}</td>
                <td><pre>{{$bl->blogdescription}}</pre></td>
                <td><img width=100px height="100px" src="/storage/blog/{{$bl->blogimage}}" alt=""></td>
                <td>
                    <form action="{{ route('blogs.delete') }}" method="POST">
                    @csrf
                        <input type="hidden" name="blog_id" value="{{ $bl->id }}" />
                        <button class="btn btn-danger">Delete</button>
                    </form>
                    <a href="/blog/edit/{{ $bl->id}}" class="btn btn-primary">Edit</a>
                    
                </td>
                

            </tr>
            @endforeach
        </tbody>
        
        
    </table>
    </form>
</body>
</html>