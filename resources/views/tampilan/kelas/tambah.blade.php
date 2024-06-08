@extends('struktur.dasar')
@section('konten')
    <div class="container">
        <h1 class="h3 font-weight-bold mb-4" style="color: rgb(191, 49, 49)">Buat Kelas</h1>
        <form
            class="font-weight-bold mb-4 px-4 py-4"
            enctype="multipart/form-data"
            method="post"
            style="background-color: white; color: rgb(191, 49, 49)"
        >
            @csrf
            <div class="form-group">
                <label for="masukan-nama-kelas">Nama Kelas</label>
                <input
                    class="form-control"
                    id="masukan-nama-kelas"
                    name="nama-kelas"
                    required
                    style="color: rgb(191, 49, 49)"
                    type="text"
                >
            </div>
            <div class="form-group">
                <label for="masukan-nama-singkat">Nama Singkat</label>
                <input
                    class="form-control"
                    id="masukan-nama-singkat"
                    name="nama-singkat"
                    required
                    style="color: rgb(191, 49, 49)"
                    type="text"
                >
            </div>
            <div class="form-group">
                <label for="pemilih-tingkat-kelas">Tingkat Kelas</label>
                <select
                    class="form-control"
                    id="pemilih-tingkat-kelas"
                    name="tingkat-kelas"
                    required
                    style="color: rgb(191, 49, 49)"
                >
                    <option selected>Pilih Tingkatan Kelas</option>
                    <option>Beginner</option>
                    <option>Intermediate</option>
                    <option>Advanced</option>
                    <option>Expert</option>
                    <option>Professional</option>
                </select>
            </div>
            <div class="form-group">
                <label for="area-teks-deskripsi">Deskripsi</label>
                <textarea
                    class="form-control"
                    id="area-teks-deskripsi"
                    name="deskripsi"
                    required
                    rows="3"
                    style="color: rgb(191, 49, 49);"
                ></textarea>
            </div>
            <div class="form-group">
                <label for="masukan-sampul">Sampul</label>
                <div class="input-group">
                    <input
                        class="form-control form-control-file"
                        id="masukan-sampul"
                        name="sampul"
                        style="color: rgb(191, 49, 49)"
                        type="file"
                    >
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="fas fa-image" style="color: rgb(191, 49, 49)"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="masukan-silabus">Silabus</label>
                <div class="input-group">
                    <input
                        accept="application/pdf"
                        class="form-control form-control-file"
                        id="masukan-silabus"
                        name="silabus"
                        style="color: rgb(191, 49, 49)"
                        type="file"
                    >
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="far fa-file-pdf" style="color: rgb(191, 49, 49)"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="justify-content-center row">
                <button
                    class="btn btn-light btn-md font-weight-bold mb-3 mt-3"
                    style="background-color: rgb(191, 49, 49); color: white"
                    type="submit"
                >Buat Kelas</button>
            </div>
        </form>
    </div>
@endsection
