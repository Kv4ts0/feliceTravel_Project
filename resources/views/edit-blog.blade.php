<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/adminconsole.css">
    <title>Edit Blogs</title>
</head>
<body>
    <div class="heading">
        <h1>Edit Blogs</h1>
    </div>
    <div class="outer-wrapper">
    <div class="table-wrapper">
    <form action="{{ route('blog.update',['id' => $blog->id]) }}" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="blog_id" value="{{$blog->id}}" />
    @csrf
    <table>
        <thead>
            <th>Date Added</th>
            <th>Name</th>
            <th>Description</th>
            <th>Blog Image</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td><input type="text" name="blogname" id="blogname" value=" {{ $blog->blogname }} "/></td></td>
                <td><textarea name="blogdescription" id="blogdescription" >{{ $blog->blogdescription }}</textarea></td>
                <td><img width="100px" height="100px" src="/storage/blog/{{$blog->blogimage}}" alt=""><input type="file" name="blogimage" placeholder="blogimage"></td>
                <td><button class="btn btn-success">Save</button><br><button class="btn btn-danger">Cancel</button></td>
            </tr>
        </tbody>
    </div>
</div>
</body>
</html>