<div class="shop-cart user-profile-cart">
    <ul>
        <li>
            <div class="shop-cart-btn">
                <div class="avatar-xs">
                    <img class="rounded-full img-fluid" src="{{asset("images/small-avatar-1.jpg")}}" alt="Avatar image">
                </div>
            </div>
            <ul class="cart-dropdown-menu after-none p-0 notification-dropdown-menu">
                <li class="menu-heading-block d-flex align-items-center">
                    <a href="teacher-detail.html" class="avatar-sm flex-shrink-0 d-block">
                        <img class="rounded-full img-fluid" src="{{asset("images/small-avatar-1.jpg")}}" alt="Avatar image">
                    </a>
                    <div class="ml-2">
                        <h4><a href="teacher-detail.html" class="text-black">{{session('user')->name}}</a></h4>
                        <span class="d-block fs-14 lh-20">{{session('user')->email}}</span>
                    </div>
                </li>
                <li>
                    <div class="theme-picker d-flex align-items-center justify-content-center lh-40">
                        <button
                            class="theme-picker-btn dark-mode-btn w-100 font-weight-semi-bold justify-content-center"
                            title="Dark mode" >
                            <svg class="mr-1" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z">
                                </path>
                            </svg>
                            {{__("site.Dark Mode")}}
                        </button>
                        <button
                            class="theme-picker-btn light-mode-btn w-100 font-weight-semi-bold justify-content-center"
                            title="Light mode">
                            <svg class="mr-1" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round">
                                <circle cx="12" cy="12" r="5"></circle>
                                <line x1="12" y1="1" x2="12" y2="3"></line>
                                <line x1="12" y1="21" x2="12" y2="23"></line>
                                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64">
                                </line>
                                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78">
                                </line>
                                <line x1="1" y1="12" x2="3" y2="12"></line>
                                <line x1="21" y1="12" x2="23" y2="12"></line>
                                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36">
                                </line>
                                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22">
                                </line>
                            </svg>
                            {{__("site.Light Mode")}}
                        </button>
                    </div>
                </li>
                <li>
                    <ul class="generic-list-item">
                        @if(session('user')->type == 'instructor')
                        <li>
                            <a href="{{ route('mycourses.index') }}">
                                <i class="la la-file-video-o mr-1"></i> {{__("site.My courses")}}
                            </a>
                        </li>
                        <li>
                            <div class="section-block"></div>
                        </li>
                        @endif
                        <li>
                            <a href="{{ route('home') }}">
                                <i class="la la-user mr-1"></i> {{__("site.home")}}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard') }}">
                                <i class="la la-user mr-1"></i> {{__("site.dashboard")}}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('profile.index') }}">
                                <i class="la la-edit mr-1"></i> {{__("site.Edit profile")}}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route( 'profile.changeLang') }}">
                                <i class="la la-edit mr-1"></i> {{__("site.".session('user')->lang) }}
                            </a>
                        </li>
                        <li>
                            <div class="section-block"></div>
                        </li>

                        <li>
                            <a href="{{ route('logout') }}">
                                <i class="la la-power-off mr-1"></i> {{__("site.Logout")}}
                            </a>
                        </li>
                        <li>
                            <div class="section-block"></div>
                        </li>

                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div><!-- end shop-cart -->