   <div class="modal fade" id="modalSettingProfile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <div class="modal-top">
              <h1 class="modal-title fs-5 mb-2 fw-bold" id="exampleModalLabel">Ubah Profile</h1>
              <h2 class="modal-title fs-6 mb-2 fw-regular" id="exampleModalLabel">Informasi Personal tidak dapat diubah karena profil telah diverifikasi. Untuk informasi lebih lanjut, Hubungi CS.</h2>
            </div>
            <button type="button" class="btn-close d-flex align-self-start mt-0" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/updateProfile" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3">
              <label class="form-label">Nama lengkap</label>
              <input type="text" name="nama_lengkap" class="form-control" value="{{Auth::user()->name}}" disabled>
            </div>
            <div class="mb-3">
              <label class="form-label">Tanggal lahir</label>
              @if(!empty($infoProfile->tanggal_lahir))
                <input type="date" class="form-control" name="tanggal_lahir" value="{{ $infoProfile->tanggal_lahir }}">
              @else
                <input type="date" class="form-control" name="tanggal_lahir" placeholder="Masukan tanggal lahir...">
              @endif
            </div>
             @if(Auth::user()->role->name == 'Pasien')
            <div class="mb-3">
              <label class="form-label">NIK</label>
              <input type="text" class="form-control" name="NIK" disabled readonly placeholder="{{ $infoProfile ? 'Silahkan upload foto KTP...' : 'Harap melakukan verifikasi terlebih dahulu' }}" disabled value="{{ $infoProfile ? $infoProfile->NIK : '' }}">
            </div>
            @else
            <div class="mb-3">
              <label class="form-label">Nomor STR</label>
              <input type="text" class="form-control" name="nomor_str" disabled readonly placeholder="{{ $infoProfile ? 'Silahkan upload Surat STR...' : 'Harap melakukan verifikasi terlebih dahulu' }}" disabled value="{{ $infoProfile ? $infoProfile->nomor_str : '' }}">
            </div>
            @endif
            <div class="mb-3">
              <label class="form-label mb-3">Jenis kelamin</label><br>
              @if(!empty($infoProfile->jenis_kelamin))
                <div class="form-check form-check-inline mb-3">
                <!-- cek jenis kelamin pria -->
                  <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" <?php if($infoProfile->jenis_kelamin=='Laki-laki') echo 'checked'?>>
                  <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                </div>
                <!-- cek jenis kelamin perempuan -->
                <div class="form-check form-check-inline mb-3">
                  <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" <?php if($infoProfile->jenis_kelamin=='Perempuan') echo 'checked'?>>
                  <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                </div>
              @else
                <div class="form-check form-check-inline mb-3">
                    <input class="form-check-input" type="radio" name="gender" value="Laki-laki">
                    <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline mb-3">
                    <input class="form-check-input" type="radio" name="gender" value="Perempuan">
                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                </div>
              @endif 
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nomor telpon</label>
              <input type="text" class="form-control" name="Nomor_telpon" value="{{Auth::user()->phone_number}}" disabled>
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" name="email" value="{{Auth::user()->email}}" disabled readonly>
            </div>
            <div class="mb-3">
              <label class="form-label">Berat badan</label>
              @if(!empty($infoProfile->berat_badan))
                <input type="text" class="form-control" name="berat_badan" value="{{ $infoProfile->berat_badan }}">
              @else
                <input type="text" class="form-control" name="berat_badan" placeholder="masukan berat badan...">
              @endif
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tinggi badan</label>
              @if(!empty($infoProfile->tinggi_badan))
                <input type="text" class="form-control" name="tinggi_badan" placeholder="masukan tinggi badan..." value="{{ $infoProfile->tinggi_badan }}">
              @else
                <input type="text" class="form-control" name="tinggi_badan" placeholder="masukan tinggi badan...">
              @endif
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>