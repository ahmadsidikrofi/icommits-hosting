<div class="modal fade" id="tambahMenu" tabindex="-1" role="dialog"
aria-labelledby="modalSayaLabel" aria-hidden="true">
<div class="modal-dialog modal-lg border-0" role="document">
    <div class="modal-content">
        <div class="modal-header ">
            <h5 class="modal-title" id="modalSayaLabel">Buat Menu Navbar Baru</h5>
            <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="/admin/tambah/menu-navbar" method="post">
                @csrf
                <div class="form-group">
                    <label>Nama Menu</label>
                    <div class="input-group mb-3">
                        <input type="text" name="nama_menu" autocomplete='off' class="form-control
                        @error('nama_menu') is-invalid @enderror" required>
                        @error('nama_menu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <label for="tipe_menu">Tipe Menu</label>
                    <div class="input-group mb-3">
                        <select class="form-control get-tipe" name="tipe_menu" id="tipe_menu">
                            <option value="">Pilih Tipenya</option>
                            <option value="link">Link</option>
                            <option value="sub_menu">Sub Menu</option>
                        </select>
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


