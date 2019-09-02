    <!DOCTYPE html>
    <html lang="en">

    <head>
      <style>
        body {
          background: rgb(236, 236, 236);
        }

        .text {
          margin-left: 10px;
        }

        p {
          font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
          font-size: 20px;
          width: 99%;
          background: rgb(74, 74, 221);
          padding: 6px;
          margin: 15px 0;
          margin-right: 5px;
          border-radius: 5px;
          color: white;
        }

        label {
          font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .form-control {
          font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .row {
          background: whitesmoke;
          padding: 5px;
          width: 97%;
          border-radius: 5px;
        }

        #inputTanggalLahir {
          cursor: pointer;
        }

        #inputTanggalSurat {
          cursor: pointer;
        }

        #select {
          cursor: pointer;
        }

        #tombol-login {
          width: 100px;
          height: 35px;
          margin-bottom: 10px;
          margin-left: 240px;
        }

        #tombol-login1 {
          width: 100px;
          height: 35px;
          margin-bottom: 10px;
          margin-left: 2px;
        }

        #inputTanggal {
          cursor: pointer;
        }
      </style>
    </head>

    <body>

      <div class="container">
        <div class="text">
          <p>Surat Masuk</p>
        </div>
        <div class="row" style="margin:auto;">
          <div class="col-sm">
            <form>
              <div class="form-group row">
                <label for="inputNumber" class="col-sm-4 col-form-label">No</label>
                <div class="col-sm-7">
                  <input type="number" class="form-control" id="inputNumber">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputTaggalLahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-5">
                  <input type="date" class="form-control" id="inputTanggalLahir">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputSuratDari" class="col-sm-4 col-form-label">Surat dari</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" id="inputSuratDari">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputTanggalSurat" class="col-sm-4 col-form-label">Tanggal Surat</label>
                <div class="col-sm-5">
                  <input type="date" class="form-control" id="inputTanggalSurat">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputNomorSurat" class="col-sm-4 col-form-label">Nomor Surat</label>
                <div class="col-sm-7">
                  <input type="number" class="form-control" id="inputNomorSurat">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputNomorSurat" class="col-sm-4 col-form-label">Subjek</label>
                <div class="col-sm-8">
                  <select class="col-sm-7 custom-select" id="select">
                    <option value="">Undangan</option>
                    <option value="">Pemberitahuan</option>
                    <option value="">Permohonan</option>
                    <option value="">Penawaran</option>
                    <option value="">Kerjasama</option>
                  </select>
                </div>
              </div>
          </div>
          <div class="col-sm">
            <div class="form-group row">
              <label for="exampleFormControlTextarea1" class="col-sm-5 col-form-label">Perihal</label>
              <div class="col-sm-7">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputDiterukanKepada" class="col-sm-5 col-form-label">Diteruskan Kepada</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="inputDiterukanKepada">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputTempat" class="col-sm-5 col-form-label">Tempat Pelaksanaan</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="inputTempat">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputTanggal" class="col-sm-5 col-form-label">Tanggal Pelaksanaan</label>
              <div class="col-sm-5">
                <input type="date" class="form-control" id="inputTanggal">
              </div>
            </div>
            <div class="form-group row">
              <label for="exampleFormControlTextarea1" class="col-sm-5 col-form-label">Keterangan</label>
              <div class="col-sm-7">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
            </div>
            <button type="button" id="tombol-login" class="btn btn-primary btn-sm">Upload</button>
            <button type="button" id="tombol-login1" class="btn btn-secondary btn-sm">Download</button>
            </form>
          </div>
        </div>
      </div>

    </body>

    </html>