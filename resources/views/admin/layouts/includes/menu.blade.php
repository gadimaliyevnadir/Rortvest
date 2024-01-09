<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: white">
    <!-- Brand Logo -->
    <a href="{{ route('admin.home') }}" class="brand-link">
        <img src="/assets/images/logo/logo.png" alt="AdminLTE Logo" class="brand-image "
             style="opacity: .8">
        <span class="brand-text font-weight-light" style="color: rgb(0, 0, 0)">AdminPanel</span>
    </a>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('admin.users.index') }}" class="nav-link">
                    <i class="nav-icon far fa-user"></i>
                    <p style="color: rgb(44, 43, 43);font-size:16px;font-weight:600">
                        Admin
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link">
                    <i class="nav-icon fas fa-bars"></i>
                    <p style="color: rgb(44, 43, 43);font-size:16px;font-weight:600">
                        Haqqında
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.about.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p style="color: rgb(44, 43, 43);font-size:16px;font-weight:600">Haqqımızda</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.clients.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p style="color: rgb(44, 43, 43);font-size:16px;font-weight:600">Müştərilər</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.testimonials.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p style="color: rgb(44, 43, 43);font-size:16px;font-weight:600">Baxış İcmal</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.vacancy.index') }}" class="nav-link">
                            <i class="nav-icon fa fa-briefcase"></i>
                            <p style="color: rgb(44, 43, 43);font-size:16px;font-weight:600">
                                Vakansiyalar
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.contact') }}" class="nav-link">
                            <i class="nav-icon fa fa-phone"></i>
                            <p style="color: rgb(44, 43, 43);font-size:16px;font-weight:600">
                                Müraciət
                            </p>
                        </a>
                    </li>
                </ul>
            </li>
            
                    <li class="nav-item">
                        <a href="{{ route('admin.blogs.index') }}" class="nav-link">
                            <i class="nav-icon fa fa-briefcase"></i>
                            <p style="color: rgb(44, 43, 43);font-size:16px;font-weight:600">
                                Bloq
                            </p>
                        </a>
                    </li>
            <li class="nav-item">
                <a class="nav-link">
                    <i class="nav-icon fas fa-bars"></i>
                    <p style="color: rgb(44, 43, 43);font-size:16px;font-weight:600">
                        Ayarlar
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.settings.index') }}" class="nav-link">
                            <i class="nav-icon fa fa-setting"></i>
                            <p style="color: rgb(44, 43, 43);font-size:16px;font-weight:600">
                                Düzənləmələr
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.iframes.index') }}" class="nav-link">
                            <i class="nav-icon fa fa-map"></i>
                            <p style="color: rgb(44, 43, 43);font-size:16px;font-weight:600">
                                Xəritə
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.socialicons.index') }}" class="nav-link">
                            <i class="nav-icon far fa-slack"></i>
                            <p style="color: rgb(44, 43, 43);font-size:16px;font-weight:600">
                                Sosyal Media İcon
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.supports.index') }}" class="nav-link">
                            <i class="nav-icon fa fa-support"></i>
                            <p style="color: rgb(44, 43, 43);font-size:16px;font-weight:600">
                                Dəstək
                            </p>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="{{ route('admin.metatag.index') }}" class="nav-link">
                            <i class="nav-icon fa fa-tag"></i>
                            <p style="color: rgb(44, 43, 43);font-size:16px;font-weight:600">
                                Meta Teqlər
                            </p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link">
                    <i class="nav-icon fas fa-bars"></i>
                    <p style="color: rgb(44, 43, 43);font-size:16px;font-weight:600">
                        Kategoriyalar
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.categories.index') }}" class="nav-link">
                            <i class="nav-icon fa fa-arrow-up"></i>
                            <p style="color: rgb(44, 43, 43);font-size:16px;font-weight:600">
                                Üst Kateqoriyalar
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.bestcategory.index') }}" class="nav-link">
                            <i class="nav-icon fa fa-arrow-up"></i>
                            <p style="color: rgb(44, 43, 43);font-size:16px;font-weight:600">
                                Best Kateqoriyalar
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.subcategory.index') }}" class="nav-link">
                            <i class="nav-icon fa fa-arrow-down"></i>
                            <p style="color: rgb(44, 43, 43);font-size:16px;font-weight:600">
                                Alt Kateqoriyalar
                            </p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.tags.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-tag"></i>
                    <p style="color: rgb(44, 43, 43);font-size:16px;font-weight:600">
                        Teqlər
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.attribute.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-paperclip"></i>
                    <p style="color: rgb(44, 43, 43);font-size:16px;font-weight:600">
                        Atributlar
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.product.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-cart-plus"></i>
                    <p style="color: rgb(44, 43, 43);font-size:16px;font-weight:600">
                        Məhsullar
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link">
                    <i class="nav-icon fas fa-bars"></i>
                    <p style="color: rgb(44, 43, 43);font-size:16px;font-weight:600">
                        EXCEL
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.import-view') }}" class="nav-link">
                            <i class="nav-icon fa fa-arrow-up"></i>
                            <p style="color: rgb(44, 43, 43);font-size:16px;font-weight:600">
                                Məhsul yüklə
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.import-update') }}" class="nav-link">
                            <i class="nav-icon fa fa-arrow-up"></i>
                            <p style="color: rgb(44, 43, 43);font-size:16px;font-weight:600">
                                Məhsul Yenilə
                            </p>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item">
                <a href="{{ route('admin.sliders.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-video"></i>
                    <p style="color: rgb(44, 43, 43);font-size:16px;font-weight:600">
                        Bannerlər
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.brends.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-signature"></i>
                    <p style="color: rgb(44, 43, 43);font-size:16px;font-weight:600">
                        Brendlər
                    </p>
                </a>
            </li>


        </ul>

    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
