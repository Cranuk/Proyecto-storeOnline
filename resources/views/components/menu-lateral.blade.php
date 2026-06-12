<nav>
    <div class="logo-box sidebar-toggle">
        <div class="logo-image">
            <span class="material-symbols-outlined icon-big">
                store
            </span>
        </div>
        <span class="logo-title">Store</span>
    </div>

    <div class="menu-items">
        <ul class="nav-links">
            <li>
                <a href="/" title="Dashboard">
                    <span class="material-symbols-outlined icon-medium">
                        analytics
                    </span>
                    <span class="link-name">Tablero</span>
                </a>
            </li>
            <li>
                <a href="{{ route('sales') }}" title="Ventas">
                    <span class="material-symbols-outlined icon-medium">
                        point_of_sale
                    </span>
                    <span class="link-name">Ventas</span>
                </a>
            </li>
            <li>
                <a href="{{ route('supplies') }}" title="Insumos">
                    <span class="material-symbols-outlined icon-medium">
                        trolley
                    </span>
                    <span class="link-name">Insumos</span>
                </a>
            </li>
            <li>
                <a href="{{ route('products') }}" title="Productos">
                    <span class="material-symbols-outlined icon-medium">
                        inventory_2
                    </span>
                    <span class="link-name">Productos</span>
                </a>
            </li>
            <li>
                <a href="{{ route('offers') }}" title="Ofertas">
                    <span class="material-symbols-outlined icon-medium">
                        percent_discount
                    </span>
                    <span class="link-name">Ofertas</span>
                </a>
            </li>
            <li>
                <a href="{{ route('paymentMethods') }}" title="Medios de pago">
                    <span class="material-symbols-outlined icon-medium">
                        payments
                    </span>
                    <span class="link-name">Medios de pago</span>
                </a>
            </li>
            <li class="mode">
                <button id="theme-toggle" class="mode-toggle-btn" title="Cambiar modo">
                    <span id="theme-icon" class="material-symbols-outlined icon-medium">
                        sunny
                    </span>
                    <span id="theme-text" class="link-name">Modo Oscuro</span>
                </button>
            </li>
        </ul>
    </div>
</nav>
