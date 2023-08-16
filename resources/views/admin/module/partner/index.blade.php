@extends('partials.admin')

@section('css')
    <link rel="stylesheet" href="/css/toastr.css">
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
    crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets/admin/assets/js/plugin/datatables/datatables.min.js') }}"></script>
    <script>
        new DataTable('#partner');
    </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="/js/toastr.js"></script>
        <script>
            @if (Session::has('editPartner'))
            toastr.success('Edit Partner berhasil dilakukan')
            @endif
            @if (Session::has('addPartner'))
            toastr.success('Partner berhasil ditambah')
            @endif
        </script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $('.delete-confirm').click(function (e) {
                var partner = $(this).attr('data-id');
                e.preventDefault()
                Swal.fire({
                    title: 'Yakin Ingin Di Hapus?',
                    text: "Partner akan dihapus",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#11111',
                    confirmButtonText: 'Hapus Sekarang!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = '/admin/hapus/partner/'+partner+''
                        Swal.fire(
                        'Sukses Terhapus!',
                        'Partner berhasil dihapus',
                        'BERHASIL'
                        )
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        {
                            Swal.fire(
                            'Gajadi',
                            'Partner masih ada disini',
                            'error'
                            )
                        }
                    }
                })
            });
        </script>
@endsection

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Partner</h4>
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
                    <a href="">Partner</a>
                </li>
            </ul>

        </div>
        <div class="card">
            <div class="card-header">
                <div class="row ">
                    <div class="col-sm-8">
                        <div class="card-title"> Jumlah partner saat ini: {{ $total }} </div>
                    </div>
                    <div class="col mt-3">
                        <a class="btn btn-primary text-white float-right" href="{{ route('partner.create') }}">Tambah Partner</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="partner">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Partner</th>
                                <th>Logo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($partner as $item)
                                <tr>
                                    <td data-header="No">{{ $no++ }}</td>
                                    <td data-header="nama_partner">{{ $item->nama_partner }}</td>
                                    <td data-header="logo"><img src="/image/partner/{{ $item->logo }}"
                                            class="img-responsive w-50 h-50"> </td>
                                    <td>
                                        <a href="{{ route('partner.edit', $item->id) }}" class="btn btn-sm btn-warning text-white"
                                            data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                class="fa-solid fa-pen-to-square"></i> </a>
                                        <a href="/admin/hapus/partner/{{ $item->id }}" type="submit" class="btn btn-danger btn-sm delete-confirm"
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
@endsection
