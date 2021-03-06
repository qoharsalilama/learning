

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <title>Penyesuaian Masa Kerja</title>
</head>

<body>
    <section class="foto">
        <div class="container-fluid pl-2 pr-5 py-3">
            <div class="row justify-content-center">
                <div class="col-md-4 signup-img" style="background-image: url('img/rahmanto.jpg'); background-position: center;">
                <!-- <div class="signup-img"> -->
                    <!-- <img src="img/rahmanto.jpg" class="img-fluid"> -->
                    
                </div>

                <div class="col-md-8">
                    <form>
                        <div class="form-row border border-info rounded-bottom mb-n1 pt-2">
                            <div class="form-group col-md-3">
                                <label for="nip">NIP</label>
                                <input type="text" class="form-control text-center"  id="nip" placeholder="199309072019031014">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="RAHMANTO TUNGGALI" style="text-transform: uppercase;">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="gelar">Gelar</label>
                                <input type="text" class="form-control" id="gelar" placeholder="S.Pd.">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tglLahir">Tempat, Tanggal Lahir</label>
                                <input type="text" class="form-control" id="tglLahir" placeholder="Bone Bolango, 7 September 1993">
                            </div>
                        </div>
                        <div class="form-row mb-n1 pt-3">
                            <div class="form-group col-md-3 pt-2 pb-3 border border-info rounded-left">
                                <label for="noSD">No. Ijazah SD</label>
                                <input type="text" class="form-control" id="noSD" placeholder="16 OA oa 015xxx">
                                <label for="tglSD">Tanggal</label>
                                <input type="date" class="form-control" id="tglSD">
                            </div>
                            <div class="form-group col-md-3 pt-2 pb-3 border-top border-bottom border-right border-info">
                                <label for="noSMP">No. Ijazah SMP</label>
                                <input type="text" class="form-control" id="noSD" placeholder="16 OB ob 015xxx">
                            
                            
                                <label for="tglSMP">Tanggal</label>
                                <input type="date" class="form-control" id="tglSMP">
                            </div>
                        
                            <div class="form-group col-md-3 pt-2 pb-3 border-top border-bottom border-info">
                                <label for="noSMA">No. Ijazah SMA</label>
                                <input type="text" class="form-control" id="noSMA" placeholder="16 OG og 015xxx">
                            
                            
                                <label for="tglSMA">Tanggal</label>
                                <input type="date" class="form-control" id="tglSMA">
                            </div>
                            <div class="form-group col-md-3 pt-2 pb-3 border border-info rounded-right">
                                <label for="noS1">No. Ijazah S1</label>
                                <input type="text" class="form-control" id="noS1" placeholder="16 OB ob 015xxx">
                            
                                <label for="tglS1">Tanggal</label>
                                <input type="date" class="form-control" id="tglS1">
                            </div>
                        </div>
                        <div class="form-row mb-n1">
                            <div class="form-group col-md-6 pt-2 pb-3 border-top border-bottom border-left border-info rounded-left">
                                <label for="noFirst">No. SK Pertama</label>
                                <input type="text" class="form-control" id="noFirst" placeholder="SK Kontrak Pertama">
                            
                                <label for="tglFirst">Tanggal</label>
                                <input type="date" class="form-control" id="tglFirst">
                            </div>
                            <div class="form-group col-md-6 pt-2 pb-3 border border-info rounded-right">
                                <label for="noLast">No. SK Terakhir</label>
                                <input type="text" class="form-control" id="noLast" placeholder="SK Kontrak Terakhir">
                            
                                <label for="tglLast">Tanggal</label>
                                <input type="date" class="form-control" id="tglLast">
                            </div>
                        </div>

                        <div class="form-row border-top border-left border-right border-info pt-2 rounded-top">
                            <div class="form-group col-md-10   ">
                                <label for="jabatan1">Jabatan dan Instansi 1</label>
                                <input type="text" class="form-control" id="jabatan1" placeholder="Tenaga Administrasi pada MTsN 1 Bone Bolango">
                            </div>
                            <div class="form-group col-md-1   ">
                                <label for="tahun1">Tahun</label>
                                <select class="form-control" name="tahun1" id="tahun1">
                                    <?php for($i = 0; $i < 11; $i++) : ?>
                                    <option value="<?php $i; ?>"><?= $i; ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="form-group col-md-1   ">
                                <label for="bulan1">Bulan</label>
                                <select class="form-control" name="bulan1" id="bulan1">
                                    <?php for($i = 0; $i < 12; $i++) : ?>
                                    <option value="<?php $i; ?>"><?= $i; ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-row border-left border-right border-info"> 
                            <div class="form-group col-md-10">
                                <label for="jabatan2">Jabatan dan Instansi 2</label>
                                <input type="text" class="form-control" id="jabatan2" placeholder="Tenaga Administrasi pada MTsN 1 Bone Bolango">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="tahun2">Tahun</label>
                                <select class="form-control" name="tahun2" id="tahun2">
                                    <?php for($i = 0; $i < 11; $i++) : ?>
                                    <option value="<?php $i; ?>"><?= $i; ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="form-group col-md-1">
                                <label for="bulan2">Bulan</label>
                                <select class="form-control" name="bulan2" id="bulan2">
                                    <?php for($i = 0; $i < 12; $i++) : ?>
                                    <option value="<?php $i; ?>"><?= $i; ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-row border-left border-right border-bottom border-info rounded-bottom"> 
                            <div class="form-group col-md-10">
                                <label for="jabatan3">Jabatan dan Instansi 3</label>
                                <input type="text" class="form-control" id="jabatan3" placeholder="Tenaga Administrasi pada MTsN 1 Bone Bolango">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="tahun3">Tahun</label>
                                <select class="form-control" name="tahun3" id="tahun3">
                                    <?php for($i = 0; $i < 11; $i++) : ?>
                                    <option value="<?php $i; ?>"><?= $i; ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="form-group col-md-1">
                                <label for="bulan3">Bulan</label>
                                <select class="form-control" name="bulan3" id="bulan3">
                                    <?php for($i = 0; $i < 12; $i++) : ?>
                                    <option value="<?php $i; ?>"><?= $i; ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <button type="reset" class="btn btn-secondary btn-block btn-sm col-md-6 mt-2">Reset</button>
                            <button type="submit" class="btn btn-success btn-block btn-sm col-md-6 mt-2">Daftar</button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    
</body>

</html>
