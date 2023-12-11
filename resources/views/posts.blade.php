<!DOCTYPE html>
<html lang="en">
<head>
  <title>posts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('includes.nav')

<div class="container">
  <h2>POSTS STORE</h2>
  <h2> WELCOME!! </h2>
  <p>The table-hover class enables a hover state on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Post Title</th>
        <th>Description</th>
        <th>Author</th>
        <th>Published</th>
      </tr>
    </thead>
    <tbody>
 <!-- we have to add table fields -->
    @foreach($posts as $post)
      <tr>
        <td>{{$post->title}}</td>
        <td>{{$post->description}}</td>
        <td>{{$post->Author}}</td>
        <td>{{$post->Published}}</td>

        <td>
            @if($post->published)
                Yes
            @else
                No
            @endif
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
