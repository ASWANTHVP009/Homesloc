<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/admin/dashboard" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
            </ul>
        </li>
        <?php
        $admin = \App\Models\Admin::where('id', Auth::user()->id)
            ->select('user_group_id')
            ->first();
        ?>

        @if ($admin && $admin->user_group_id == 1)
            <li class="nav-item">
                <a href="{{ route('admin.mainbanner.list') }}" class="nav-link">
                    <i class="fas fa-puzzle-piece"></i>
                    <p>Main Banners</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.banner.list') }}" class="nav-link">
                    <i class="fas fa-puzzle-piece"></i>
                    <p>Banners</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.amentity.list') }}" class="nav-link">
                    <i class="fab fa-buffer"></i>
                    <p>Amentities</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.type.list') }}" class="nav-link">
                    <i class="fab fa-typo3"></i>
                    <p>Hotel Types</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.menu.list') }}" class="nav-link">
                    <i class="fas fa-bars"></i>
                    <p>Menu</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.request.list') }}" class="nav-link">
                    <i class="fas fa-headset"></i>
                    <p>Seller Callback Request</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.newsletter.list') }}" class="nav-link">
                    <i class="fas fa-paper-plane"></i>
                    <p>Subscription</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.customer.list') }}" class="nav-link">
                    <i class="fas fa-users"></i>
                    <p>Customers</p>
                </a>
            </li>


            <li class="nav-item">
                <a href="{{ route('admin.group.list') }}" class="nav-link">
                    <i class="fas fa-users-cog"></i>
                    <p>User Groups</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.seller.list') }}" class="nav-link">
                    <i class="fas fa-user"></i>
                    <p>Users</p>
                </a>
            </li>
        @endif
        <li class="nav-item">
            <a href="{{ route('admin.product.list') }}" class="nav-link">
                <i class="fas fa-building"></i>
                <p>Properties</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.order.list') }}" class="nav-link">
                <i class="fas fa-shopping-cart"></i>
                <p>Orders</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/logout" class="nav-link">
                <i class="fas fa-sign-out-alt"></i>
                <p>
                    Logout
                </p>
            </a>
        </li>







    </ul>
</nav>
