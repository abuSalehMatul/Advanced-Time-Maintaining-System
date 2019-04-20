
<style>
.highlight{
    font-size: 1.2rem;
    font-weight: 800;
    color: red !important;
}
/* #top-nav{
  position: fixed;
  top:0;
  background: burlywood;
} */
</style>
<nav class="header__row" id="top-nav">
    <ul class="header__row__item_left">
      <li><a href="index.html"><img src="{{asset('image/Logo 2 .png')}}" width="120px" height="90px" alt=""></a></li>
      <li class="highlight"><a href="feature-list.html" style="color:darkgreen">How it works</a></li>
      <li class="highlight"><a href="{{url('user_register_form')}}" style="color:darkgreen">Join Free now</a></li>
    </ul>
    <div id="newUserHeader" class="header__row__item_right">
      <li class="highlight"><a href="{{url('/login')}}" class="btn btn-success" style="color:white;font-weight:600;font-size:1.2rem;">Log in</a></li>
      <a href="signup.html">
        <a href="{{url('user_register_form')}}" class="btn btn-info" style="color:white;font-weight:600;font-size:1.2rem;">Sign up 
        </a>
      </a>
    </div>
   
</nav>