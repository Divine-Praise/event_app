<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="index.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>

                <div class="sb-sidenav-menu-heading">Interface</div>

                <a class="nav-link collapsed" href="#"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseEvent" aria-expanded="false" aria-controls="collapseEvent">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Events
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseEvent" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="event-create.php">Create Event</a>
                        <a class="nav-link" href="event.php">View Event</a>
                    </nav>
                </div>

                <!-- <a class="nav-link collapsed" href="#"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseProducts" aria-expanded="false" aria-controls="collapseProducts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Products
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseProducts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="products-create.php">Create Products</a>
                        <a class="nav-link" href="products.php">View Products</a>
                    </nav>
                </div> -->

                <div class="sb-sidenav-menu-heading">manage users</div>

                <!-- <a class="nav-link collapsed" href="#"
                data-bs-toggle="collapse"
                data-bs-target="#collapseCustomer"
                aria-expanded="false" aria-controls="collapseCustomer">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Customer
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseCustomer" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="customers-create.php">Add Customer</a>
                        <a class="nav-link" href="customers.php">View Customer</a>
                    </nav>
                </div> -->

                <a class="nav-link collapsed" href="#"
                data-bs-toggle="collapse"
                data-bs-target="#collapseAdmins"
                aria-expanded="false" aria-controls="collapseAdmins">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Admins/Staff
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseAdmins" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="admins-create.php">Add Admin</a>
                        <a class="nav-link" href="admins.php">View Admins</a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Administrator <?= $_SESSION['loggedInUser']['name']; ?>
        </div>
    </nav>
 </div>