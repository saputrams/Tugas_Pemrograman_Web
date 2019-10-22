<?php require_once 'kiri.php' ?>
<h3>Pembayaran Travel</h3>
<br>
<hr/>
<form class="needs-validation" novalidate>
    <div class="row">
        <div class="col-md-6 mb-3">
        <label for="firstName">Nama Awal</label>
        <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
        <div class="invalid-feedback">
            Nama Awal Harus Diisi
        </div>
        </div>
        <div class="col-md-6 mb-3">
        <label for="lastName">Nama Terakhir</label>
        <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
        <div class="invalid-feedback">
            Nama Terakhir Harus Diisi
        </div>
        </div>
    </div>

    <div class="mb-3">
        <label for="username">Username</label>
        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">@</span>
        </div>
        <input type="text" class="form-control" id="username" placeholder="Username" required>
        <div class="invalid-feedback" style="width: 100%;">
            Username Harus Diisi
        </div>
        </div>
    </div>

    <div class="mb-3">
        <label for="email">Email <span class="text-muted">(Optional)</span></label>
        <input type="email" class="form-control" id="email" placeholder="you@example.com">
        <div class="invalid-feedback">
        Email Tidak Valid
        </div>
    </div>

    <div class="mb-3">
        <label for="address">Alamat</label>
        <input type="text" class="form-control" id="address"  required>
        <div class="invalid-feedback">
        Masukan Alamaat Lengkap
        </div>
    </div>

    <div class="row">
        <div class="col-md-5 mb-3">
        <label for="country">Negara</label>
        <select class="custom-select d-block w-100" id="country" required>
            <option value="">--Pilih--</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Singapura">Singapura</option>
        </select>
        <div class="invalid-feedback">
            Negara Harus Dipilih
        </div>
        </div>
        <div class="col-md-4 mb-3">
        <label for="state">Kota</label>
        <select class="custom-select d-block w-100" id="state" required>
            <option value="">--Pilih--</option>
            <option value="Garut">Garut</option>
            <option value="Bandung">Bandung</option>
            <option value="Jakarta">Jakarta</option>
        </select>
        <div class="invalid-feedback">
            Kota Harus Dipilih
        </div>
        </div>
        <div class="col-md-3 mb-3">
        <label for="zip">Kode Pos</label>
        <input type="number" class="form-control" id="zip" placeholder="" required>
        <div class="invalid-feedback">
            Kode Pos Harus Diisi
        </div>
        </div>
    </div>
    <hr class="mb-4">
    <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="same-address">
        <label class="custom-control-label" for="same-address">Pembayaran Dilakukan Sekarang?</label>
    </div>
    <hr class="mb-4">

    <h4 class="mb-3">Pembayaran</h4>

    <div class="d-block my-3">
        <div class="custom-control custom-radio">
        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
        <label class="custom-control-label" for="credit">Credit card</label>
        </div>
        <div class="custom-control custom-radio">
        <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
        <label class="custom-control-label" for="debit">Debit card</label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
        <label for="cc-name">Jumlah Pembayaran</label>
        <input type="number" class="form-control" id="cc-name" placeholder="" required>
        <small class="text-muted">Masukan Jumlah Pembayaran Disini</small>
        <div class="invalid-feedback">
            Jumlah Pembayaran Harus Diisi
        </div>
        </div>
    </div>
    <hr class="mb-4">
    <button class="btn btn-primary btn-lg btn-block" type="submit">Lanjutkan Pembayaran</button>
</form>
<script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
<?php require_once 'bawah.php' ?>