<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{ route('home.home') }}" style="color: black;">
            CityCard
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <a href="{{ route('home.trantsport.transport') }}" class="dropdown-toggle no-arrow">
                        <span class="micon fa fa-bus" style="color: cornflowerblue;"></span>
                        <span class="mtext">
                            Transport
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('home.city.city') }}" class="dropdown-toggle no-arrow">
                        <span class="micon fa fa-sitemap"  style="color: cornflowerblue;"></span>
                        <span class="mtext">
                            City
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('home.type.type') }}" class="dropdown-toggle no-arrow">
                        <span class="micon fa fa-ticket" style="color: cornflowerblue;"></span>
                        <span class="mtext">
                            Type ticket
                        </span>
                    </a>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
            </ul>
        </div>
    </div>
</div>
