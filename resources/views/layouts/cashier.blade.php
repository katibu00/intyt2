<li class="menu-item "><a class="menu-link" href="{{ route('cashier.home') }}">
        <div>Home</div>
    </a></li>
<li class="menu-item {{ $route == 'sales.index' ? 'current' : '' }} {{ $route == 'credit.index' ? 'current' : '' }}">
    <a class="menu-link" href="#">
        <div>Sales</div>
    </a>
    <ul class="sub-menu-container">
        <li
            class="menu-item {{ $route == 'sales.index' ? 'current' : '' }}">
            <a class="menu-link" href="{{ route('sales.index') }}">
                <div><i class="icon-wpforms"></i>Sales</div>
            </a>
        </li>
        <li
            class="menu-item {{ $route == 'credit.index' ? 'current' : '' }}">
            <a class="menu-link" href="{{ route('credit.index') }}">
                <div>Credit Sales</div>
            </a>
        </li>

    </ul>
</li>
<li class="menu-item {{ $route == 'expense.index' ? 'current' : '' }} "><a
    class="menu-link" href="{{ route('expense.index') }}">
    <div>Expense</div>
</a></li>

<li class="menu-item {{ $route == 'returns' ? 'current' : '' }}"><a
        class="menu-link" href="{{ route('returns') }}">
        <div>Returns</div>
    </a></li>

<li class="menu-item {{ $route == 'estimate.index' ? 'current' : '' }} {{ $route == 'estimate.all.index' ? 'current' : '' }}">
    <a class="menu-link" href="#">
        <div>Estimate</div>
    </a>
    <ul class="sub-menu-container">
        <li
            class="menu-item {{ $route == 'estimate.index' ? 'current' : '' }}">
            <a class="menu-link" href="{{ route('estimate.index') }}">
                <div><i class="icon-wpforms"></i>New</div>
            </a>
        </li>
        <li
            class="menu-item {{ $route == 'estimate.all.index' ? 'current' : '' }}">
            <a class="menu-link" href="{{ route('estimate.all.index') }}">
                <div>All</div>
            </a>
        </li>
    </ul>
</li>
<li class="menu-item {{ $route == 'customers.index' ? 'current' : '' }}"><a
    class="menu-link" href="{{ route('customers.index') }}">
    <div>Customers</div>
</a></li>