<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
        <div class ="row">
            <div class ="col-8">
                <h2 class="my-3">from Tambah Data Komik</h2>
                <form action="/books/save" methode="post">
                <?= csrf_field(); ?>
                    <div class="row mb-3">
                        <label for="Judul" class ="col-sm-2 col-form-label">Judul</label>
                        <div class="col=sm-10">
                            <input type="judul" class="form-control" id="judul" name="judul" autofocus>
                        </div>
                    </div>
                    <div>
                    <div class="row mb-3">
                        <label for="penulis" class ="col-sm-2 col-form-label">penulis</label>
                        <div class="col=sm-10">
                            <input type="penulis" class="form-control" id="penulis" name="penulis" autofocus>
                        </div>
                    </div>
                    <div>
                    <div class="row mb-3">
                        <label for="penerbit" class ="col-sm-2 col-form-label">penerbit</label>
                        <div class="col=sm-10">
                            <input type="penerbit" class="form-control" id="penerbit" name="penerbit" autofocus>
                        </div>
                    </div>
                    <div>
                    <div class="row mb-3">
                        <label for="sampul" class ="col-sm-2 col-form-label">sampul</label>
                        <div class="col=sm-10">
                            <input type="sampul" class="form-control" id="sampul" name="sampul" autofocus>
                        </div>
                    </div>
                

                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>

            </div>
        </div>
    </div>

<?= $this->endSection();?>