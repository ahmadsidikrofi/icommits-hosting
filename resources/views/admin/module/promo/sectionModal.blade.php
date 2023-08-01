<div class="modal fade" id="sectionPromo" tabindex="-1" role="dialog"
aria-labelledby="modalSayaLabel" aria-hidden="true">
<div class="modal-dialog modal-lg border-0" role="document">
    <div class="modal-content">
        <div class="modal-header ">
            <h5 class="modal-title" id="modalSayaLabel">Buat Section Promo</h5>
            <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="/admin/promo/section" method="post">
                @csrf
                <div class="form-group">
                    <label>Section Title</label>
                    <div class="input-group mb-3">
                        <input type="text" name="title_promo" class="form-control
                        @error('title_promo') is-invalid @enderror" required>
                        @error('title_promo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <label for="tipe_menu">Section Mini Title</label>
                    <div class="input-group mb-3">
                        <input type="text" name="mini_title_promo" class="form-control
                        @error('mini_title_promo') is-invalid @enderror" required>
                        @error('mini_title_promo')
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


