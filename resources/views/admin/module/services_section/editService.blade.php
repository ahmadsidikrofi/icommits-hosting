@section('css')
    <link rel="stylesheet" href="/css/toastr.css">
@endsection

<div class="modal fade" id="editService{{ $service->id }}" tabindex="-1" role="dialog"
    aria-labelledby="modalSayaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg border-0" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalSayaLabel">Buat Menu Navbar Baru</h5>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/admin/edit/menu-navbar/{{ $service->id }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label>Section Title</label>
                        <div class="input-group mb-3">
                            <input type="text" name="section_title" class="form-control
                            @error('section_title') is-invalid @enderror" value="{{ $service->section_title }}" required maxlength="30">
                            @error('section_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <hr>
                        <label>Service Title</label>
                        <div class="input-group mb-3">
                            <input type="text" name="service_title" autocomplete='off' class="form-control
                            @error('service_title') is-invalid @enderror" value="{{ $service->service_title }}" required>
                            @error('service_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-warning text-white">Simpan Perubahan</button>
                    </div>
                </form>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="/js/toastr.js"></script>
<script>
@if (Session::has('editSS'))
    toastr.success('Edit Service berhasil dilakukan')
@endif
</script>
