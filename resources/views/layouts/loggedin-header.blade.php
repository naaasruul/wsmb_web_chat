<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">My Chat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('chat')}}">Chat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('profile')}}">Profile</a>
        </li>
        <li class="nav-item">
          <form action="{{route('logout')}}" method="post">
            @csrf
            <button type="submit" class="nav-link">Logout</button>
          </form>
        </li>

      </ul>
      <div class="d-flex align-items-center gap-2">
          <p>{{Auth()->user()->username}}</p>
          <img class="rounded-circle" src="https://via.placeholder.com/50" alt="">
      </div>
    </div>
  </div>
</nav>