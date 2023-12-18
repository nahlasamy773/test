
<!-- need to be enhamnced -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Posts store </a>
    </div>
    <ul class="nav navbar-nav">

      <li class="active"><a href="{{ route('posts')}}">Home</a></li>

      <li><a href="{{ route('createpost')}}">Insert Post </a></li>
      <li><a href="{{ route('trashed')}}">Trashed</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
  </div>
</nav>
