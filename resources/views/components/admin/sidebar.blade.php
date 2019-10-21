<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="profile-image">
          <img class="img-xs rounded-circle" src="{{ asset('admin/images/faces/face8.jpg') }}" alt="profile image">
          <div class="dot-indicator bg-success"></div>
        </div>
        <div class="text-wrapper">
          <p class="profile-name">Allen Moreno</p>
          <p class="designation">Premium user</p>
        </div>
      </a>
    </li>
    <li class="nav-item nav-category">Main Menu</li>
    <li class="nav-item">
      <a class="nav-link" href="/admin/index">
        <i class="menu-icon typcn typcn-document-text"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#posts" aria-expanded="false" aria-controls="tags">
        <i class="menu-icon typcn typcn-coffee"></i>
        <span class="menu-title">Blogs</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="posts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('posts.index') }}">See posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('posts.create') }}">Add new post</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#tags" aria-expanded="false" aria-controls="tags">
        <i class="menu-icon typcn typcn-coffee"></i>
        <span class="menu-title">Tags</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="tags">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('tags.index') }}">See tags</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('tags.create') }}">Add new tag</a>
          </li>
        </ul>
      </div>
    </li>
  </ul>
</nav>