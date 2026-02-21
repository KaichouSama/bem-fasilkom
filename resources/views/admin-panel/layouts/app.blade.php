<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Admin Panel')</title>

    {{-- Core CSS --}}
    <link href="{{ asset('admin/css/styles.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="d-flex" id="wrapper">

        {{-- Sidebar --}}
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light">Admin BEM</div>

            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action p-3" href="">Dashboard</a>

                <a class="list-group-item list-group-item-action p-3" href="{{ route('hero.index') }}">Hero</a>

                <a class="list-group-item list-group-item-action p-3" href="{{ route('filosofi.index') }}">Filosofi</a>

                <a class="list-group-item list-group-item-action p-3" href="{{ route('vimi.index') }}">Visi Misi</a>

                {{-- Dropdown Struktur --}}
                <a class="list-group-item list-group-item-action p-3 d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" href="#strukturMenu" role="button" aria-expanded="false"
                    aria-controls="strukturMenu">
                    Struktur
                </a>

                <div class="collapse" id="strukturMenu">
                    <a class="list-group-item list-group-item-action ps-5" href="{{ route('bidang.index') }}">
                        Bidang
                    </a>
                    <a class="list-group-item list-group-item-action ps-5" href="">
                        Departemen
                    </a>
                    <a class="list-group-item list-group-item-action ps-5" href="">
                        Jabatan
                    </a>
                    <a class="list-group-item list-group-item-action ps-5" href="">
                        Kepengurusan
                    </a>
                </div>
                <a class="list-group-item list-group-item-action p-3" href="">Berita</a>

                <a class="list-group-item list-group-item-action p-3" href="">Kontak</a>
            </div>
        </div>

        {{-- Page Content --}}
        <div id="page-content-wrapper">

            {{-- Navbar --}}
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                </div>
            </nav>

            {{-- Dynamic Content --}}
            <div class="container-fluid py-4">
                @yield('content')
            </div>

        </div>
    </div>

    {{-- JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin/js/scripts.js') }}"></script>
</body>

</html>
