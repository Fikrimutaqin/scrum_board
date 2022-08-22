<!--Siderbar-->
<div class="col-lg-2 dashboard-padding-none d-none d-sm-none d-lg-block">
    <section class="dashboard-sidebar-wrappe">
        <div class="dashboard-bio-profile row">
            <div class="col-md-4">
                <a href="#">
                    <img class="img-fluid rounded-circle" src="{{ URL::to('assets/dashboard/images/pp.png') }}" />
                </a>
            </div>
            <div class="col-md-8">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <p class="dashboard-label-fullname">Hi! {!! Str::limit(Session::get('dataUsers')->fullname, 15, ' ...') !!}</p>
                </div>
            </div>
        </div>
        <div class="dashboard-menus">
            <p class="dashboard-menu-headline">Menu</p>
            <ul class="dashboard-menu-list list-group">
                @if (!empty($menu))
                    @foreach ($menu as $menus)
                        <li class="list-group-item py-3 {{ request()->is($menus['slug']) ? 'active' : '' }}">
                            <a href="{{ $menus['url'] }}">
                                <i class="{{ $menus['icon'] }}"></i> &nbsp;&nbsp; {{ $menus['title'] }}
                            </a>
                        </li>
                    @endforeach
                @else
                    <p>Menu empty</p>
                @endif
            </ul>
        </div>
    </section>
</div>
<!--EndSidebar-->
