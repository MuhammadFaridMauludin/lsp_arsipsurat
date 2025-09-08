<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
        <h1 class="navbar-brand navbar-brand-autodark" style="margin-top: 10px">
            <a>Administrator</a>
        </h1>

        <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3">
                <!-- Home -->
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->is('arsipadmin') ? 'active' : ''); ?>" href="/arsipadmin">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M5 12l-2 0l9 -9l9 9l-2 0"/>
                                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"/>
                                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"/>
                            </svg>
                        </span>
                        <span class="nav-link-title">Arsip</span>
                    </a>
                </li>

                <!-- Data Departemen -->
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->is('kategori') ? 'active' : ''); ?>" href="/kategori">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M3 4h18v10h-18z"/>
                                <path d="M7 20h10"/>
                                <path d="M9 16v4"/>
                                <path d="M15 16v4"/>
                            </svg>
                        </span>
                        <span class="nav-link-title">Kategori</span>
                    </a>
                </li>

                <!-- Lokasi / Monitoring Presensi -->
                <li class="nav-item">
<a class="nav-link <?php echo e(request()->is('about') ? 'active' : ''); ?>" href="/about">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M3 4h18v10h-18z"/>
                                <path d="M7 20h10"/>
                                <path d="M9 16v4"/>
                                <path d="M15 16v4"/>
                            </svg>
                        </span>
                        <span class="nav-link-title">About</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>
<?php /**PATH C:\Users\Muhammad Farid M\Downloads\absensigeotaggingandselifievideo\absensita\resources\views/layouts/admin/sidebar.blade.php ENDPATH**/ ?>