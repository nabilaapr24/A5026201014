
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Formulir Pendaftaran</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        input[type=text] {
            width:fit-content;
            padding: 4px;
            margin: 5px 0;
            box-sizing: border-box;
        }
    </style>

    <script>
        $(document).ready(function () {
            function validate() {
                var cek = true;

                var barang = $("#barang").val();
                if (barang == "") {
                    $("#warningnamawajib").show();
                    $("#warningnama").hide();
                    cek = false;
                } else if (barang.length < 10) {
                    $("#warningnamawajib").hide();
                    $("#warningnama").show();
                    cek = false;
                } else {
                    $("#warningnamawajib").hide();
                    $("#warningnama").hide();
                }


                var harga = $("#harga").val();
                var intharga = parseInt(harga);
                hargaPatt = new RegExp("^[0-9]");
                if (harga == "") {
                    $("#warninghargawajib").show();
                    $("#warningharga").hide();
                    cek = false;
                } else if (!hargaPatt.test(harga) || intharga < 5000) {
                    $("#warninghargawajib").hide();
                    $("#warningharga").show();
                    cek = false;
                } else {
                    $("#warninghargawajib").hide();
                    $("#warningharga").hide();
                }


                var jenis = $("#jenis").val();
                if (jenis == "") {
                    $("#warningjenis").show();
                    cek = false;
                } else {
                    $("#warningjenis").hide();
                }

                var kode = $("#kode").val();
                kodePatt = new RegExp("^[0-9]{10,}$")
                if (kode == "") {
                    $("#warningkodewajib").show();
                    $("#warningkode").hide();
                    cek = false;
                } else if (!kodePatt.test(kode)) {
                    $("#warningkodewajib").hide();
                    $("#warningkode").show();
                    cek = false;
                } else {
                    $("#warningkodewajib").hide();
                    $("#warningkode").hide();
                }

                return cek;
            }

            $("form").submit(function (event) {
                if (validate() == false) {
                    event.preventDefault();
                }
            });
            $("form").reset(function (e) {
                e.removeClass("btn-active");
            });
        });

    </script>
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col md-2 offset-md-1">
                <div class="card card-body">
                    <p>Nabila Aprilia Putri<br>April<br>5026201014</p>
                    <div align="center">
                        <h1>Form Input Data Barang</h1>
                    </div><br>
                    <form action="https://my.its.ac.id">
                        <div style="margin-left: 100pt;">
                        <div class="form-group">
                            <label>Nama Barang   : </label>
                            <input id="barang" type="text" placeholder="Masukkan nama barang"><br>
                            <div id="warningnamawajib" class="collapse text-danger">
                                <p>Bagian ini wajib diisi</p>
                            </div>
                            <div id="warningnama" class="collapse text-danger">
                                <p>Minimal diisi 10 karakter</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Harga    : </label>
                            <input id="harga" type="text" placeholder="Masukkan harga"><br>
                            <div id="warningharga" class="collapse text-danger">
                                <p>Harga minimal adalah 5000, harus berupa angka</p>
                            </div>
                            <div id="warninghargawajib" class="collapse text-danger">
                                <p>Bagian ini wajib diisi</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Jenis Barang : </label>
                            <select id="jenis" aria-placeholder="Jenis Barang">
                                <option value=""> </option>
                                <option value="Makanan">Makanan</option>
                                <option value="Minuman">Minuman</option>
                                <option value="Lainnya">Lainnya</option>
                            </select><br>
                            <div id="warningjenis" class="collapse text-danger">
                                <p>Bagian ini wajib diisi</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Kode Barcode : </label>
                            <input id="kode" type="text" placeholder="Masukkan barcode"><br>
                            <div id="warningkode" class="collapse text-danger">
                                <p>Minimal memuat 10 digit angka, tidak boleh ada huruf</p>
                            </div>
                            <div id="warningkodewajib" class="collapse text-danger">
                                <p>Bagian ini wajib diisi</p>
                            </div>
                        </div>
                    </div>
                    <div align="center">
                        <button class="btn btn-primary" type="submit"> Submit </button>
                        <button class="btn btn-success" type="reset"> Reset </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>