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
                <a href="{{ route('admin.banner.list') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>Banners</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.amentity.list') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>Amentities</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.type.list') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>Hotel Types</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.menu.list') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>Menu</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.request.list') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>Seller Callback Request</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.customer.list') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>Customers</p>
                </a>
            </li>


            <li class="nav-item">
                <a href="{{ route('admin.group.list') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>User Groups</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.seller.list') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>Users</p>
                </a>
            </li>
        @endif
        <li class="nav-item">
            <a href="{{ route('admin.product.list') }}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>Properties</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.order.list') }}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>Orders</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/logout" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Logout
                </p>
            </a>
        </li>







    </ul>
</nav>
