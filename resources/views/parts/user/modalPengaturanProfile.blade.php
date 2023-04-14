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
            <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Foto Profile</label>
              <input type="file" class="form-control" name="foto_profile">
            </div>
            <div class="mb-3">
              <label class="form-label">Nama lengkap</label>
              <input type="text" name="nama_lengkap" class="form-control" value="{{Auth::user()->name}}">
            </div>
            <div class="mb-3">
              <label class="form-label">Tanggal lahir</label>
              <input type="date" class="form-control" name="tanggal_lahir">
            </div>
            <div class="mb-3">
              <label class="form-label">NIK</label>
              <input type="text" class="form-control" name="NIK" disabled readonly>
            </div>
            <div class="mb-3">
              <label class="form-label mb-3">Jenis kelamin</label><br>
                <div class="form-check form-check-inline mb-3">
                    <input class="form-check-input" type="radio" name="gender" value="Laki-laki">
                    <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline mb-3">
                    <input class="form-check-input" type="radio" name="gender" value="Perempuan">
                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                </div>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nomor telpon</label>
              <input type="text" class="form-control" name="Nomor_telpon" value="{{Auth::user()->phone_number}}">
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" name="email" value="{{Auth::user()->email}}" disabled readonly>
            </div>
            <div class="mb-3">
              <label class="form-label">Berat badan</label>
              <input type="text" class="form-control" name="berat_badan" placeholder="masukan berat badan...">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tinggi badan</label>
              <input type="text" class="form-control" name="tinggi_badan" placeholder="masukan tinggi badan...">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>