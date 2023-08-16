@extends('partials.admin')

@section('css')
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
    <link rel="stylesheet" href="/css/toastr.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets/admin/assets/js/plugin/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.js') }}"></script>
    <script src="{{ asset('js/delete.js') }}"></script>
    <script>
        new DataTable('#hero');
    </script>
@endsection

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Hero</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="/admin/dashboard">
                        <i class="fa-solid fa-house-chimney"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li class="nav-item">
                    <a href="/admin/module">Module</a>
                </li>
                <li class="separator">
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li class="nav-item">
                    <a href="">Hero</a>
                </li>
            </ul>

        </div>
        <div class="card">
            <div class="card-header">
                <div class="row ">
                    <div class="col-sm-8">
                        <div class="card-title"> Kumpulan Hero </div>
                    </div>
                    <div class="col mt-3">
                        <a class="btn btn-primary text-white float-right" href="{{ route('hero.create') }}">Tambah Hero</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table display nowrap" id="hero">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title Hero</th>
                                <th>Link Button</th>
                                <th>Background Hero</th>
                                <th>Right Hero</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                                @foreach ($hero as $item)
                                        <tr>
                                            <td data-header="No">{{ $no++ }}</td>
                                            <td data-header="Judul Hero"> {{ $item->title_hero }}</td>
                                            <td data-header="Get Started"> {{ $item->link_button}} </td>
                                            <td data-header="Background Hero">
                                                @if ($item->image_background)
                                                <img src="/image/hero/{{ $item->image_background }}" alt="avatar"
                                                    class="rounded img-fluid shadow-lg"
                                                    id="image_preview" height="20" width="100">
                                                @else
                                                    <img src="/image/hero/hero-default.jpg" alt="avatar"
                                                    class="rounded img-fluid shadow-lg"
                                                    id="image_preview" height="20" width="100">
                                                @endif
                                            </td>
                                            <td data-header="Right Hero">
                                                @if ($item->image_right)
                                                <img src="/image/hero/{{ $item->image_right }}" alt="avatar"
                                                    class="rounded img-fluid shadow-lg my-1" height="10" width="100"
                                                    id="heroRight_preview">
                                                @else
                                                    <img src="/image/hero/hero-right.png" alt="avatar"
                                                    class="rounded img-fluid shadow-lg my-1" height="10" width="100"
                                                    id="heroRight_preview">
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('hero.edit', $item->id) }}"
                                                    class="btn btn-sm btn-warning text-white" data-toggle="tooltip"
                                                    data-placement="top" title="Edit"><i
                                                        class="fa-solid fa-pen-to-square"></i> </a>
                                                <a href="/admin/hapus/hero/{{ $item->id }}" type="submit" class="btn btn-danger btn-sm delete-confirm"
                                                    data-toggle="tooltip" data-placement="top" title="Hapus" data-id="{{ $item->id }}"><i
                                                        class="fa-solid fa-trash"></i></a>
                                            </td>
                                        </tr>
                                @endforeach
                        </tbody>
                    </table> 

                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('.delete-confirm').click(function (e) {
            var hero = $(this).attr('data-id');
            e.preventDefault()
            Swal.fire({
                title: 'Yakin Ingin Di Hapus?',
                text: "Hero akan dihapus",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#11111',
                confirmButtonText: 'Hapus Sekarang!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = '/admin/hapus/hero/'+hero+''
                    Swal.fire(
                    'Sukses Terhapus!',
                    'Hero berhasil dihapus',
                    'BERHASIL'
                    )
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    {
                        Swal.fire(
                        'Gajadi',
                        'Hero masih ada disini',
                        'error'
                        )
                    }
                }
            })
        });
    </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/js/toastr.js"></script>
    <script>
        @if (Session::has('editHero'))
            toastr.success('Edit Hero berhasil dilakukan')
        @endif
        @if (Session::has('addHero'))
            toastr.success('Hero berhasil ditambah')
        @endif
    </script>
@endsection
