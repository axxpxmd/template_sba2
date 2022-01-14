<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <div class="row ">
        <li type="none" class="mr-1 ml-2 fs-13 font-weight-bold">
            <i class="fa fa-calendar-alt mr-2"></i>
            <a id="hari"></a>
            ,
            <a id="tanggal"></a>
            <a id="bulan"></a>
            <a id="tahun"></a>
            /
        </li>
        <li type="none" class="fs-13 font-weight-bold">
            <a id="jam"></a>
            :
            <a id="menit"></a>
            :
            <a id="detik"></a>
        </li>
    </div>
    <!-- Nav -->
    <ul class="navbar-nav ml-auto">
        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger badge-counter">1+</span>
            </a>
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">Alerts Center</h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-warning">
                            <i class="fas fa-exclamation-triangle text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 2, 2019</div>
                        Spending Alert: We've noticed unusually high spending for your account.
                    </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
            </div>
        </li>
        <!-- Nav Item - Messages -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <span class="badge badge-danger badge-counter">1</span>
            </a>
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">Message Center</h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                            alt="...">
                        <div class="status-indicator bg-success"></div>
                    </div>
                    <div>
                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                    </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
            </div>
        </li>
        <div class="topbar-divider d-none d-sm-block"></div>
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">User</span>
                <img class="img-profile rounded-circle" src="{{ asset('images/default.png') }}">
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
<script>
    // Hours
    window.setTimeout("waktu()", 1000);

    function addZero(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }

    function waktu() {
        var waktu = new Date();
        setTimeout("waktu()", 1000);
        document.getElementById("jam").innerHTML = addZero(waktu.getHours());
        document.getElementById("menit").innerHTML = addZero(waktu.getMinutes());
        document.getElementById("detik").innerHTML = addZero(waktu.getSeconds());
    }

    // Day
    arrHari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"]
    Hari = new Date().getDay();
    document.getElementById("hari").innerHTML = arrHari[Hari];

    // Date
    Tanggal = new Date().getDate();
    document.getElementById("tanggal").innerHTML = Tanggal;

    // Month
    arrbulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
    Bulan = new Date().getMonth();
    document.getElementById("bulan").innerHTML = arrbulan[Bulan];

    // Year
    Tahun = new Date().getFullYear();
    document.getElementById("tahun").innerHTML = Tahun;

</script>