<div id="skin-select">
  <div id="logo">
    @include('helpers.logo')
  </div>

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
