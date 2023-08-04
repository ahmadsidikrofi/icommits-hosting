<div class="modal fade" id="tambahPertanyaan" tabindex="-1" role="dialog"
aria-labelledby="modalSayaLabel" aria-hidden="true">
<div class="modal-dialog modal-lg border-0" role="document">
    <div class="modal-content">
        <div class="modal-header ">
            <h5 class="modal-title" id="modalSayaLabel">Buat Pertanyaan Baru</h5>
            <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('qna.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Pertanyaan</label>
                    <div class="input-group mb-3">
                        <input type="text" name="pertanyaan" autocomplete='off' class="form-control
                        @error('pertanyaan') is-invalid @enderror" required>
                        @error('pertanyaan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <label>Jawaban</label>
                    <div class="input-group mb-3">
                        <input type="text" name="jawaban" autocomplete='off' class="form-control
                        @error('jawaban') is-invalid @enderror" required>
                        @error('jawaban')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <label>Choose Navbar's Menu</label>
                        <div class="input-group ">
                            <div class="col">
                                <select class="form-control menu-navbar" name="menu_navbar" id="menu_navbar">
                                    <option disabled selected> -- Please Choose -- </option>
                                    @foreach ( $menuNavbar as $menu )
                                        @if ($menu->tipe_menu === "link")
                                            <option value="{{ $menu->id }}">{{ $menu->nama_menu }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            @error('menu_navbar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    <label>Choose Navbar's SubMenu</label>
                        <div class="input-group ">
                            <div class="col">
                                <select class="form-control menu_submenu" name="submenu_navbar" id="submenu_navbar">
                                    <option disabled selected> -- Please Choose -- </option>
                                    @foreach ($subMenuNavbar as $subMenu)
                                        <option value="{{ $subMenu->id }}" data-slug="{{ $subMenu->slug }}">{{ $subMenu->nama_sub_menu }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('submenu_navbar')
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


