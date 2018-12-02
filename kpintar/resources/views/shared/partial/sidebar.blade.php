            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="{{ Route('admin.dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Riwayat Transaksi<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ Route('admin.recap-history') }}">Rekap Keuntungan</a>
                                </li>
                                <li>
                                    <a href="{{ Route('admin.history') }}">Riwayat Transaksi</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-database"></i></i> Barang<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ Route('admin.product') }}">Daftar Barang</a>
                                </li>
                                <li>
                                    <a href="{{ Route('admin.product-add') }}">Tambahkan Barang</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users"></i> Member<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ Route('admin.member') }}">Daftar Member</a>
                                </li>
                                <li>
                                    <a href="{{ Route('admin.member-add') }}">Tambahkan Member</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user-secret"></i></i> Karyawan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ Route('admin.employee') }}">Daftar Karyawan</a>
                                </li>
                                <li>
                                    <a href="{{ Route('admin.employee-add') }}">Tambahkan Karyawan</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-cogs"></i></i> Ubah Profil</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench"></i></i> Ubah Password</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>