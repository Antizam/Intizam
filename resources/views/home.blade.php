@extends('layouts.app')
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<style>
.sidebar {
  height: 100%; /* Full-height: remove this if you want "auto" height */
  width: 15%; /* Set the width of the sidebar */
  position: fixed; /* Fixed Sidebar (stay in place on scroll) */
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #0c8676;
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 50px;
}
/* The navigation menu links */
.sidebar a {
  padding: 15px 15px 15px 16px;
  text-decoration: none;
  font-size: 16px;
  color: white;
  display: block;
}
/* When you mouse over the navigation links, change their color */
.sidebar a:hover {
  color:white;
    text-decoration:none;
    cursor:pointer;

}
.main {
  margin-left: 250px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}
/* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
@media screen and (max-height: 400px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>

@section('content')
<body>

<div class="sidebar">
<a href="#home"><i class="fas fa-home"></i>  Home</a>
<a href="#profile"><i class="fas fa-user"></i>  Profile</a>
  <a href="#student"><i class="fas fa-users"></i>  Students</a>
  <a href="#Leaving_schedule"><i class="far fa-clock"></i>  Leaving Schedule</a>
  <a href="#Screening_table"><i class="fas fa-tv"></i>  Screen Table</a>
</div>

<div class="main">
  <p>This the screen size is 700px or less.</p>
</div>

</body>
@endsection