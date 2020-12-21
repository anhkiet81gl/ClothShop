@if(Auth::user()->role_id > 0)
<li class="active">
    <a href="{!! route('dashboard') !!}"><i class="fa fa-user"></i><span>Dashboard</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-user"></i><span>Tài khoản</span></a>
</li>

<li class="{{ Request::is('customers*') ? 'active' : '' }}">
    <a href="{{ route('customers.index') }}"><i class="fa fa-edit"></i><span>Khách hàng</span></a>
</li>

<li class="{{ Request::is('orders*') ? 'active' : '' }}">
    <a href="{{ route('orders.index') }}"><i class="fa fa-edit"></i><span>Đơn hàng</span></a>
</li>

<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{{ route('categories.index') }}"><i class="fa fa-edit"></i><span>Loại sản phẩm</span></a>
</li>

<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{{ route('products.index') }}"><i class="fa fa-edit"></i><span>Sản phẩm</span></a>
</li>

<li class="{{ Request::is('orderStatuses*') ? 'active' : '' }}">
    <a href="{{ route('orderStatuses.index') }}"><i class="fa fa-edit"></i><span>Trạng thái đơn hàng</span></a>
</li>

<li class="{{ Request::is('deliveries*') ? 'active' : '' }}">
    <a href="{{ route('deliveries.index') }}"><i class="fa fa-edit"></i><span>Deliveries</span></a>
</li>

<li class="{{ Request::is('banners*') ? 'active' : '' }}">
    <a href="{{ route('banners.index') }}"><i class="fa fa-edit"></i><span>Banners</span></a>
</li>

<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>
@else


@endif


