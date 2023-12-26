<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{ route('client.home') }}" style="color: black;">
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
                    <a href="{{ route('client.card.card') }}" class="dropdown-toggle no-arrow">
                        <span class="micon fa fa-credit-card" style="color: cornflowerblue;"></span>
                        <span class="mtext">
                            Credit Card
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('client.ticket.ticket') }}" class="dropdown-toggle no-arrow">
                        <span class="micon fa fa-ticket" style="color: cornflowerblue;"></span>
                        <span class="mtext">
                            Ticket
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('client.bill.bill') }}" class="dropdown-toggle no-arrow">
                        <span class="micon fa fa-list" style="color: cornflowerblue;"></span>
                        <span class="mtext">
                            Bill
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
