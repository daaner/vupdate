<div id="skin-select">
  <a href="/" id="logo">
    @include('helpers.logo')
  </a>

  <a id="toggle">
    <span class="entypo-menu"></span>
  </a>

  @include('helpers.search')

  <div class="skin-part">
    <div id="tree-wrap">
      <div class="side-bar">
        @include('menus.widget')
        @include('menus.designkit')
        @include('menus.component')
        @include('menus.statistic')
      </div>
    </div>
  </div>
</div>
