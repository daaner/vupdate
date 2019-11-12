<nav role="navigation" class="navbar navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle" type="button">
        <span class="entypo-menu"></span>
      </button>
      <button class="navbar-toggle toggle-menu-mobile toggle-left" type="button">
        <span class="entypo-list-add"></span>
      </button>


      <div id="logo-mobile" class="visible-xs">
        @include('helpers.logo')
      </div>

    </div>


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <alert-component />
        </li>

        @include('dropdown.conversation')
        @include('dropdown.tooltitle')

        <li>
          <a href="#">
            <i data-toggle="tooltip" data-placement="bottom" title="Help" style="font-size:20px;" class="icon-help tooltitle"></i>
          </a>
        </li>
      </ul>

      @include('helpers.top_widget')

      <ul style="margin-right:0;" class="nav navbar-nav navbar-right">
        @include('dropdown.usermenu')

        <li>
          @include('dropdown.settings')
        </li>

        <li class="hidden-xs">
          <a class="toggle-left" href="#">
            <span style="font-size:20px;" class="entypo-list-add"></span>
          </a>
        </li>
      </ul>

    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
