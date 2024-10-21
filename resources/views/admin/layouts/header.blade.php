<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
    <div class="navbar-container d-flex content">
      <div class="bookmark-wrapper d-flex align-items-center">
        <ul class="nav navbar-nav d-xl-none">
          <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
        </ul>
      </div>
      <ul class="nav navbar-nav align-items-center ml-auto">
        <li class="nav-item dropdown dropdown-language">
            <a class="nav-link dropdown-toggle" id="dropdown-flag" href="{{ url(current_language()->icon) }}" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
                <i class="flag-icon flag-icon-{{ current_language()->icon }}"></i>
                <span class="selected-language">{{ current_language()->native_name }}</span></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-flag">
                @foreach (all_languages() as $lang)
                    <a class="dropdown-item" href="{{ route("change-language",$lang->language) }}" data-language="en">
                        <i class="flag-icon flag-icon-{{ $lang->icon }}"></i> {{ $lang->native_name }}
                    </a>
                @endforeach
            </div>
        </li>
        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
        <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon" data-feather="search"></i></a>
          <div class="search-input">
            <div class="search-input-icon"><i data-feather="search"></i></div>
            <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="-1" data-search="search">
            <div class="search-input-close"><i data-feather="x"></i></div>
            <ul class="search-list search-list-main"></ul>
          </div>
        </li>
        <li class="nav-item dropdown dropdown-notification mr-25"><a class="nav-link" href="javascript:void(0);" data-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span class="badge badge-pill badge-danger badge-up">5</span></a>
          <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
            <li class="dropdown-menu-header">
              <div class="dropdown-header d-flex">
                <h4 class="notification-title mb-0 mr-auto">{{ __("title.Notifications") }}</h4>
                <div class="badge badge-pill badge-light-primary">6 {{ __("title.new") }}</div>
              </div>
            </li>
            <li class="scrollable-container media-list">
                <a class="d-flex" href="javascript:void(0)">
                    <div class="media d-flex align-items-start">
                        <div class="media-left">
                            <div class="avatar">
                                <img src="{{ asset("assets/admin/images/avaters/avater.jpg") }}" alt="avatar" width="32" height="32">
                            </div>
                        </div>
                        <div class="media-body">
                            <p class="media-heading"><span class="font-weight-bolder">Congratulation Sam 🎉</span>winner!</p><small class="notification-text"> Won the monthly best seller badge.</small>
                        </div>
                    </div>
                </a>
            </li>
            <li class="dropdown-menu-footer"><a class="btn btn-primary btn-block" href="javascript:void(0)">{{ __("title.read_all_notification") }}</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown dropdown-user">
            <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder">{{ auth("admin")->user()->name }}</span>
                    {{-- <span class="user-status">Admin</span> --}}
                </div>
                <span class="avatar">
                    <img class="round" src="{{ asset("assets/admin/images/dashboard/profile-img.png") }}" alt="avatar" height="40" width="40">
                    <span class="avatar-status-online"></span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                <a class="dropdown-item" href="page-profile.html"><i class="mr-50" data-feather="user"></i>{{ __("title.profile") }}</a>
                <a class="dropdown-item" href="page-auth-login-v2.html"><i class="mr-50" data-feather="power"></i> {{ __("title.logout") }}</a>
            </div>
        </li>
      </ul>
    </div>
</nav>
