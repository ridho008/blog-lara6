<aside id="sidebar" class="u-sidebar">
   <div class="u-sidebar-inner">
      <!-- Sidebar Header -->
      <header class="u-sidebar-header">
         <!-- Sidebar Logo -->
         <a class="u-sidebar-logo" href="index.html">
            <img class="u-sidebar-logo__icon" src="assets/svg/logo-mini.svg" alt="Awesome Icon">
            <img class="u-sidebar-logo__text" src="assets/svg/logo-text-light.svg" alt="Awesome">
         </a>
         <!-- End Sidebar Logo -->
      </header>
      <!-- End Sidebar Header -->

      <!-- Sidebar Nav -->
      <nav class="u-sidebar-nav">
         <!-- Sidebar Nav Menu -->
         <ul class="u-sidebar-nav-menu u-sidebar-nav-menu--top-level">
            <!-- Dashboard -->
            <li class="u-sidebar-nav-menu__item">
               <a class="u-sidebar-nav-menu__link" href="index.html">
                  <span class="ti-dashboard u-sidebar-nav-menu__item-icon"></span>
                  <span class="u-sidebar-nav-menu__item-title">Dashboard</span>
               </a>
            </li>
            <!-- End Dashboard -->

            <!-- UI Base -->
            <li class="u-sidebar-nav-menu__item">
               <a class="u-sidebar-nav-menu__link" href="#"
                  data-target="#menuItemUIBase">
                  <span class="ti-paint-roller u-sidebar-nav-menu__item-icon"></span>
                  <span class="u-sidebar-nav-menu__item-title">Master Data</span>
                  <span class="ti-angle-down u-sidebar-nav-menu__item-arrow"></span>
               </a>

               <ul id="menuItemUIBase" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                  <!-- Colors -->
                  <li class="u-sidebar-nav-menu__item">
                     <a class="u-sidebar-nav-menu__link" href="{{ route('categori.index') }}">
                        <span class="u-sidebar-nav-menu__item-icon">C</span>
                        <span class="u-sidebar-nav-menu__item-title">Category</span>
                     </a>
                  </li>
                  <!-- End Colors -->

                  <!-- Typography -->
                  <li class="u-sidebar-nav-menu__item">
                     <a class="u-sidebar-nav-menu__link" href="{{ route('tag.index') }}">
                        <span class="u-sidebar-nav-menu__item-icon">T</span>
                        <span class="u-sidebar-nav-menu__item-title">Tags</span>
                     </a>
                  </li>
                  <!-- End Typography -->

                  <!-- Posts -->
                  <li class="u-sidebar-nav-menu__item">
                     <a class="u-sidebar-nav-menu__link" href="{{ route('post.index') }}">
                        <span class="u-sidebar-nav-menu__item-icon">P</span>
                        <span class="u-sidebar-nav-menu__item-title">Posts</span>
                     </a>
                  </li>
                  <!-- End Posts -->

                  <!-- Users -->
                  <li class="u-sidebar-nav-menu__item">
                     <a class="u-sidebar-nav-menu__link" href="{{ route('user.index') }}">
                        <span class="u-sidebar-nav-menu__item-icon">U</span>
                        <span class="u-sidebar-nav-menu__item-title">Users</span>
                     </a>
                  </li>
                  <!-- End Users -->

                  <!-- Settings -->
                  <li class="u-sidebar-nav-menu__item">
                     <a class="u-sidebar-nav-menu__link" href="{{ route('settings.index') }}">
                        <span class="u-sidebar-nav-menu__item-icon">U</span>
                        <span class="u-sidebar-nav-menu__item-title">Settings</span>
                     </a>
                  </li>
                  <!-- End Settings -->
               </ul>
            </li>
            <!-- End UI Base -->

            <li class="u-sidebar-nav-menu__divider"></li>

            <!-- Documentation -->
            {{-- <li class="u-sidebar-nav-menu__item">
               <a class="u-sidebar-nav-menu__link" href="https://htmlstream.com/preview/awesome-dashboard-ui-kit/documentation/" target="_blank">
                  <span class="ti-files u-sidebar-nav-menu__item-icon"></span>
                  <span class="u-sidebar-nav-menu__item-title">Documentation</span>
               </a>
            </li> --}}
            <!-- End Documentation -->

            <!-- Free Download -->
            {{-- <li class="u-sidebar-nav-menu__item">
               <a class="u-sidebar-nav-menu__link" href="https://htmlstream.com/templates/awesome-dashboard-ui-kit/" target="_blank">
                  <span class="ti-save u-sidebar-nav-menu__item-icon"></span>
                  <span class="u-sidebar-nav-menu__item-title">Free Download</span>
               </a>
            </li> --}}
            <!-- End Free Download -->
         </ul>
         <!-- End Sidebar Nav Menu -->
      </nav>
      <!-- End Sidebar Nav -->
   </div>
</aside>