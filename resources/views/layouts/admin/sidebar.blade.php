<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="logo-icon">
            <img src="assets5/images/logo.png" class="logo-img" alt="">
        </div>
        <div class="logo-name flex-grow-1">
            <h5 class="mb-0">Honda</h5>
        </div>
        <div class="sidebar-close">
            <span class="material-icons-outlined">close</span>
        </div>
    </div>
    <div class="sidebar-nav">
        <!--navigation-->
        <ul class="metismenu" id="sidenav">
            <li>
                <a href="{{ url('/admin') }}" id="dashboard">
                    <div class="parent-icon"><i class="material-icons-outlined">home</i></div>
                    <div class="menu-title">Home</div>
                </a>
            </li>
            <li class="menu-label">Menu</li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="material-icons-outlined">shopping_bag</i></div>
                    <div class="menu-title">Gallery</div>
                </a>
                <ul>
                    <li>
                        <a href="{{ route('gallery.index') }}">
                            <i class="material-icons-outlined">arrow_right</i> Add Gallery
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="material-icons-outlined">event</i></div>
                    <div class="menu-title">Booking Service</div>
                </a>
                <ul>
                    <li>
                        <a href="{{ route('booking_service.create') }}">
                            <i class="material-icons-outlined">arrow_right</i> Tambah Booking
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!--end navigation-->
    </div>
</aside>
