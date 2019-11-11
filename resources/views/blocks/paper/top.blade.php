<div class="col-sm-7 col-auto">
  <h2 class="tittle-content-header">
    <i class="icon-media-record"></i>
    @yield('title', config('app.name', 'Apricot'))
  </h2>
</div>

<div class="col-sm-3">
  <div class="devider-vertical visible-lg"></div>
  <div class="tittle-middle-header">
    <div class="alert">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <span class="tittle-alert entypo-info-circled"></span>
      @if (auth()->user())
        Welcome back,&nbsp;
        <strong>{{ auth()->user()->name }}!</strong>
      @else
        <a href="{{ route('login') }}">Login</a> or
        <a href="{{ route('register') }}">register</a>
      @endif
    </div>
  </div>
</div>

<div class="col-sm-2">
  <div class="devider-vertical visible-lg"></div>
  <div class="btn-group btn-wigdet pull-right visible-lg">
    <div class="btn">
      Widget</div>
      <button data-toggle="dropdown" class="btn dropdown-toggle" type="button">
        <span class="caret"></span>
        <span class="sr-only">Toggle Dropdown</span>
      </button>
      <ul role="menu" class="dropdown-menu">
        <li>
          <a href="#">
            <span class="entypo-plus-circled margin-iconic"></span>Add New
          </a>
        </li>
        <li>
          <a href="#">
            <span class="entypo-heart margin-iconic"></span>Favorite
          </a>
        </li>
        <li>
          <a href="#">
            <span class="entypo-cog margin-iconic"></span>Setting
          </a>
        </li>
      </ul>
    </div>
  </div>
