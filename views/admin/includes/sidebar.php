<nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <a href="#" class="nav-link">
                            <div class="profile-image">
                                <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="profile image">
                                <div class="dot-indicator bg-success"></div>
                            </div>
                            <div class="text-wrapper">
                                <p class="profile-name">Allen Moreno</p>
                                <p class="designation">Administrator</p>
                            </div>
                            <div class="icon-container">
                                <i class="icon-bubbles"></i>
                                <div class="dot-indicator bg-danger"></div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item nav-category">
                        <span class="nav-link">Dashboard</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home">
                            <span class="menu-title">Dashboard</span>
                            <i class="icon-screen-desktop menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item nav-category"><span class="nav-link">UI Elements</span></li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                            <span class="menu-title">Basic UI Elements</span>
                            <i class="icon-layers menu-icon"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/icons/simple-line-icons.html">
                            <span class="menu-title">Icons</span>
                            <i class="icon-globe menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/forms/basic_elements.html">
                            <span class="menu-title">Form Elements</span>
                            <i class="icon-book-open menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/charts/chartist.html">
                            <span class="menu-title">Charts</span>
                            <i class="icon-chart menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/tables/basic-table.html">
                            <span class="menu-title">Tables</span>
                            <i class="icon-grid menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item nav-category"><span class="nav-link">Administrator</span></li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url()?>/UserController/logout">
                            <span class="menu-title">Logout</span>
                            <i class="icon-logout menu-icon"></i>
                        </a>
                    </li>
                </ul>
            </nav>