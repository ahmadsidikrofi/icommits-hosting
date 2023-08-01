<div class="modal fade" id="tambahSubMenu" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg border-0" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalSayaLabel">Tambah Data Sub Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/admin/submenu/create/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nama SubMenu</label>
                        <div class="input-group">
                            <input type="hidden" name="id_menu_navbar" value="{{ $menuNavbar->id }}">
                            <input type="text" placeholder="Masukkan Nama SubMenu"
                                name="nama_sub_menu" autocomplete='off'
                                class="form-control @error('nama_sub_menu') is-invalid @enderror" required>
                            @error('nama_sub_menu')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <div class="input-group ">
                            <input type="text" value="{{ old('deskripsi') }}" placeholder="Masukkan deskripsi"
                                name="deskripsi" autocomplete='off'
                                class="form-control @error('deskripsi') is-invalid @enderror" required>
                            @error('deskripsi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Link</label>
                        <select class="form-control" name="link" id="link">
                            <option value="" selected disabled>-- Pilih Link --</option>
                            <option value="/hostingUnlimited" >Hosting Unlimited</option>
                            <option value="/promoKeren">Promo</option>
                            <option value="/domain">Domain</option>
                        </select>
                        {{-- <div class="input-group ">
                            <input type="text" placeholder="Masukkan link"
                                name="link" autocomplete='off'
                                class="form-control @error('link') is-invalid @enderror" required>
                            @error('link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> --}}
                    </div>
                    <div class="form-group">
                        <label>Icon</label>
                        <div class="input-group ">
                            <input type="file" placeholder="Beri icon"
                                name="image" class="form-control @error('image') is-invalid @enderror">
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary text-white">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
