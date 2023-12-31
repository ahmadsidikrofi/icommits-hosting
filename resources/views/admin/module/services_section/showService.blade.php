@extends('partials.admin')

@section('css')
    <link rel="stylesheet" href="/css/toastr.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
    crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        new DataTable('#hero');
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/js/toastr.js"></script>
    <script>
        @if (Session::has('addSS'))
            toastr.success('Service berhasil ditambah')
        @endif
    </script>
    <script>
        @if (Session::has('editSS'))
            toastr.success('Edit Service berhasil dilakukan')
        @endif
    </script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('.delete-confirm').click(function (e) {
            var Service = $(this).attr('data-slug');
            e.preventDefault()
            Swal.fire({
                title: 'Yakin Ingin Di Hapus?',
                text: "Service akan dihapus",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#11111',
                confirmButtonText: 'Hapus Sekarang!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = '/admin/delete/service-section/'+Service+''
                    Swal.fire(
                    'Sukses Terhapus!',
                    'Service berhasil dihapus',
                    'BERHASIL'
                    )
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    {
                        Swal.fire(
                        'Gajadi',
                        'Service masih ada disini',
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
            <h4 class="page-title">Services Section</h4>
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
                    <a href="">Service Section</a>
                </li>
            </ul>

        </div>
        <div class="card">
            <div class="card-header">
                <div class="row ">
                    <div class="col-sm-8">
                        <div class="card-title"> Kumpulan Service </div>
                    </div>
                    <div class="col mt-3">
                        <a class="btn btn-primary text-white float-right" href="/admin/create/service">Tambah Service</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table display nowrap" id="hero">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Service Title</th>
                                <th>Service Price</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($showServices as $service)
                                <tr>
                                    <td data-header="No">{{ $no++ }}</td>
                                    <td> {{ $service->services_title }} </td>
                                    <td> {{ $service->services_price }} </td>
                                    <td>
                                        <a class="btn btn-sm btn-warning text-white" data-toggle="modal" data-placement="top" title="Edit" data-target="#editService{{ $service->slug }}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href="/admin/delete/service-section/{{ $service->slug }}" type="submit" class="btn btn-danger btn-sm delete-confirm" data-toggle="tooltip" data-placement="top" title="Hapus" data-slug="{{ $service->slug }}"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                                <div class="modal fade" id="editService{{ $service->slug }}" tabindex="-1" role="dialog"
                                    aria-labelledby="modalSayaLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg border-0" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalSayaLabel">Edit Service Section</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/admin/edit/service-section/{{ $service->id }}" method="post">
                                                    @csrf
                                                    @method('put')
                                                    <div class="form-group">
                                                        <label>Section Title</label>
                                                        @if ( $service->section_title < 1 )
                                                            <p class="text-danger fw-bold">Silahkan edit Section Title pada service pertama</p>
                                                            <label>Service Name</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" name="services_title" autocomplete='off' value="{{ $service->services_title }}"
                                                                    class="form-control
                                                                @error('services_title') is-invalid @enderror"
                                                                    required>
                                                                @error('services_title')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                            <label>Service Description</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" name="services_deskripsi" autocomplete='off' maxlength="66" value="{{ $service->services_deskripsi }}"
                                                                    class="form-control
                                                                @error('services_deskripsi') is-invalid @enderror"
                                                                required>
                                                            @error('services_deskripsi')
                                                                    <span class="invalid-feedback" role="alert">
                                                           <strong>{{ $message }}</strong>
                                                      </span>
                                                                @enderror
                                                            </div>
                                                            <label>Service Price</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" name="services_price" autocomplete='off' value="{{ $service->services_price }}"
                                                                    class="form-control
                                                                @error('services_price') is-invalid @enderror"
                                                                    required>
                                                                @error('services_price')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        @else
                                                            <div class="input-group mb-3">
                                                                <input type="text" name="section_title" autocomplete='off' value="{{ $service->section_title }}" class="form-control  @error('section_title') is-invalid @enderror" >
                                                                @error('section_title')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                            <label>Service Name</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" name="services_title" autocomplete='off' value="{{ $service->services_title }}"
                                                                    class="form-control
                                                                @error('services_title') is-invalid @enderror"
                                                                    required>
                                                                @error('services_title')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                            <label>Service Description</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" name="services_deskripsi" autocomplete='off' maxlength="66" value="{{ $service->services_deskripsi }}"
                                                                    class="form-control
                                                                @error('services_deskripsi') is-invalid @enderror"
                                                                    required>
                                                                @error('services_deskripsi')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                            <label>Service Price</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" name="services_price" autocomplete='off' value="{{ $service->services_price }}"
                                                                    class="form-control
                                                                @error('services_price') is-invalid @enderror"
                                                                    required>
                                                                @error('services_price')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-dark"
                                                            data-dismiss="modal">Tutup</button>
                                                        <button type="submit" class="btn btn-warning text-white">Simpan
                                                            Perubahan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


<script>
    $(document).ready(function() {
        $('.menu-navbar').select2();
    });
</script>
<script>
    $(document).ready(function() {
        $('.menu_submenu').select2();
    });
</script>



{{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('.delete-confirm').click(function (e) {
        var pertanyaan = $(this).attr('data-id');
        e.preventDefault()
        Swal.fire({
            title: 'Yakin Ingin Di Hapus?',
            text: "Pertanyaan akan dihapus",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#11111',
            confirmButtonText: 'Hapus Sekarang!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = '/admin/hapus/tanya/'+pertanyaan+''
                Swal.fire(
                'Sukses Terhapus!',
                'Pertanyaan berhasil dihapus',
                'BERHASIL'
                )
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                {
                    Swal.fire(
                    'Gajadi',
                    'Pertanyaan masih ada disini',
                    'error'
                    )
                }
            }
        })
    });
</script> --}}
