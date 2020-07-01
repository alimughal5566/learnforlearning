<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ __('BD') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __('Black Dashboard') }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug == 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >{{ __('Laravel Examples') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a href="{{ route('profile.edit')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('User Profile') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'users') class="active " @endif>
                            <a href="{{ route('user.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('User Management') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

{{--            ====================my working===================================--}}

            <li>
                <a data-toggle="collapse" href="#poster_colap" aria-expanded="true">
                    <i class="tim-icons icon-paper" ></i>
                    <span class="nav-link-text" >{{ __('Posters') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="poster_colap">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'Schedule') class="active " @endif>
                            <a href="{{ route('schedulePoster') }}">
                                <i class="tim-icons icon-pencil"></i>
                                <p>{{ __('Schedule') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'howitworks') class="active " @endif>
                            <a href="{{ route('howItPoster') }}">
                                <i class="tim-icons icon-pencil"></i>
                                <p>{{ __('howitworks') }}</p>
                            </a>
                        </li>

                        <li @if ($pageSlug == 'forteacher') class="active " @endif>
                            <a href="{{ route('forTeacher') }}">
                                <i class="tim-icons icon-pencil"></i>
                                <p>{{ __('forteacher') }}</p>
                            </a>
                        </li>


                        <li @if ($pageSlug == 'forstudent') class="active " @endif>
                            <a href="{{ route('forStudent') }}">
                                <i class="tim-icons icon-pencil"></i>
                                <p>{{ __('forstudent') }}</p>
                            </a>
                        </li>

                        <li @if ($pageSlug == 'forparents') class="active " @endif>
                            <a href="{{ route('forParents') }}">
                                <i class="tim-icons icon-pencil"></i>
                                <p>{{ __('ForParents') }}</p>
                            </a>
                        </li>


                    </ul>
                </div>
            </li>



            <li>
                <a data-toggle="collapse" href="#poster_colapss" aria-expanded="true">
                    <i class="tim-icons icon-single-02" ></i>
                    <span class="nav-link-text" >{{ __('Users') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="poster_colapss">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'allteachers') class="active " @endif>
                            <a href="{{ route('allTeachers') }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('Allteachers') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'allstudents') class="active " @endif>
                            <a href="{{ route('allStudents') }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('AllStudents') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'newusers') class="active " @endif>
                            <a href="{{ route('newUsers') }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('Newusers') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>



{{--            ====================my working===================================--}}

            <li @if ($pageSlug == 'icons') class="active " @endif>
                <a href="{{ route('pages.icons') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'maps') class="active " @endif>
                <a href="{{ route('pages.maps') }}">
                    <i class="tim-icons icon-pin"></i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'notifications') class="active " @endif>
                <a href="{{ route('pages.notifications') }}">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'tables') class="active " @endif>
                <a href="{{ route('pages.tables') }}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'typography') class="active " @endif>
                <a href="{{ route('pages.typography') }}">
                    <i class="tim-icons icon-align-center"></i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'rtl') class="active " @endif>
                <a href="{{ route('pages.rtl') }}">
                    <i class="tim-icons icon-world"></i>
                    <p>{{ __('RTL Support') }}</p>
                </a>
            </li>
{{--            <li class=" {{ $pageSlug == 'upgrade' ? 'active' : '' }} bg-info">--}}
{{--                <a href="{{ route('pages.upgrade') }}">--}}
{{--                    <i class="tim-icons icon-spaceship"></i>--}}
{{--                    <p>{{ __('Upgrade to PRO') }}</p>--}}
{{--                </a>--}}
{{--            </li>--}}
        </ul>
    </div>
</div>
