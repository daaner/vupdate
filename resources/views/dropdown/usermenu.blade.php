@if (auth()->user())
  <li>
    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
      <img
      alt="Avatar"
      class="admin-pic img-circle"
      src="{{ auth()->user()->avatar_url_or_blank }}" title="{{ auth()->user()->name }}">
      Hi, {{ auth()->user()->name }}
      <b class="caret"></b>
    </a>

    <ul style="margin-top:14px;" role="menu" class="dropdown-setting dropdown-menu">
      <li>
        <a href="#">
          <span class="entypo-user"></span>
          &#160;&#160;My Profile
        </a>
      </li>

      <li>
        <a href="#">
          <span class="entypo-vcard"></span>
          &#160;&#160;Account Setting
        </a>
      </li>

      <li>
        <a href="#">
          <span class="entypo-lifebuoy"></span>
          &#160;&#160;Help
        </a>
      </li>

      <li class="divider"></li>

      <li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          <span class="entypo-logout"></span>
          &#160;&#160;Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>

      </li>
    </ul>
  </li>
@else
  <li>
    <a href="{{ route('login') }}">Login</a>
  </li>

  <li>
    <a href="{{ route('register') }}">Register</a>
  </li>
@endif
