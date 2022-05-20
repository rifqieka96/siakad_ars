<!doctype html>
<html data-theme="cupcake">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="dist/output.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.15.0/dist/full.css" rel="stylesheet" type="text/css" />

</head>
<body>
<!-- Navbar -->
<div class="navbar sticky bg-gradient-to-br  from-emerald-400 to-teal-500 text-white shadow-md rounded-sm backdrop-filter backdrop-blur-lg bg-opacity-30">
  <div class="navbar-start">
    <div class="dropdown">
      <label tabindex="0" class="btn btn-ghost lg:hidden">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </label>
      <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 text-sm shadow-md border-slate-400 bg-zinc-100 text-slate-900 opacity-100 rounded-box w-52">
        <li tabindex="0">
          <a class="justify-between">
            Data Master
            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z"/></svg>
          </a>
          <ul class="p-2 bg-zinc-100 text-slate-900 ml-4 shadow-md shadow-inherit font-normal">
            <li><a>Kurikulum</a></li>
            <li><a>Tahun Ajaran</a></li>
            <li><a>Kelas</a></li>
            <li><a>Ruang Kelas</a></li>
          </ul>
        </li>
        <li tabindex="0">
          <a class="justify-between">
          Data Mahasiswa
            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z"/></svg>
          </a>
          <ul class="p-2 bg-zinc-100 text-slate-900 ml-4 font-normal">
            <li><a>Mahasiswa</a></li>
            <li><a>Pembagian Kelas</a></li>
            <li><a>Nilai</a></li>
            <li><a>Dosen Wali</a></li>
            <li><a>Transaksi KRS</a></li>
            <li><a>Presensi Kehadiran</a></li>
          </ul>
        </li>
        <li tabindex="0">
          <a class="justify-between">
          Data Dosen
            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z"/></svg>
          </a>
          <ul class="p-2 bg-zinc-100 text-slate-900 ml-4 font-normal">
            <li><a>Dosen</a></li>
            <li><a>Riwayat Pendidikan</a></li>
            <li><a>Jadwal Dosen</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <a class="btn btn-ghost normal-case text-xl">ARS-FKUnjani
</a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal p-0 font-semibold text-sm ">
      <li tabindex="0">
        <a>
          Data Master
          <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>
        </a>
        <ul class="p-2 opacity-100 mt-4 shadow-md bg-zinc-100 text-slate-900 font-normal">
            <li><a>Kurikulum</a></li>
            <li><a>Tahun Ajaran</a></li>
            <li><a>Kelas</a></li>
            <li><a>Ruang Kelas</a></li>
        </ul>
      </li>
      <li tabindex="0">
        <a>
          Data Mahasiswa
          <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>
        </a>
        <ul class="p-2 opacity-100 mt-4 shadow-md bg-zinc-100 text-slate-900 font-normal">
            <li><a>Mahasiswa</a></li>
            <li><a>Pembagian Kelas</a></li>
            <li><a>Nilai</a></li>
            <li><a>Transaksi KRS</a></li>
            <li><a>Presensi Kehadiran</a></li>
        </ul>
      </li>
      <li tabindex="0">
        <a>
        Data Dosen
          <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>
        </a>
        <ul class="p-2 opacity-100 mt-4 shadow-md bg-zinc-100 text-slate-900 font-normal">
            <li><a>Dosen</a></li>
            <li><a>Riwayat Pendidikan</a></li>
            <li><a>Jadwal Dosen</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="navbar-end">
    <a class="btn bg-red-500 border-0 rounded-2xl text-emerald-50 hover:bg-red-400 hover:opacity-80 ease-in-out duration-500">LogOut</a>
  </div>
</div>

<!-- end navbar -->
<!-- breadcrumb -->
<div class="container mx-auto mt-5">
<div class="text-sm breadcrumbs ">
  <ul class="justify-end font-extralight text-slate-400">
    <li><a>Home</a></li> 
    <li><a href="index.php">Beranda</a></li> 
  </ul>
  </div>

  <!-- end -->
<!-- Alert -->
<div class="container mx-auto mt-5">
<div class="alert bg-rose-500 shadow-lg rounded-tl-none rounded-bl-3xl rounded-tr-3xl rounded-br-none">
  <div>
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current flex-shrink-0 w-10 h-6 text-white"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
    <div>
      <h2 class="font-bold text-slate-100 text-2xl">Visi Prodi ARS FKUnjani</h2>
      <div class="text-sm text-justify text-slate-300 font-semibold"><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident quas dignissimos dolore magnam. Laudantium voluptatem eos ab ut repellendus beatae eaque ipsum, deleniti explicabo quam, vero corrupti nobis ducimus esse, corporis itaque dolorem unde neque? Magnam maiores laudantium rerum assumenda, delectus, explicabo vitae quod error, illum animi provident et quidem pariatur laboriosam itaque nemo corrupti. Praesentium voluptatem vitae voluptatum blanditiis accusantium omnis minima sit perferendis exercitationem. Modi voluptates tempore id molestiae culpa inventore, nisi recusandae dicta magni suscipit. Reiciendis ipsam minus at officiis odio consectetur. Vel quibusdam sunt dicta rerum temporibus, quasi eaque. Quos asperiores voluptate dolorem culpa fugit unde.</p></div>
    </div>
  </div>
</div>
</div>
<!-- end alert -->
<!-- Card -->
<div class="container mx-auto mt-5">
<header class=" text-xl relative font-extrabold bg-blue-500 p-3 text-white rounded-lg rounded-b-none w-full -z-50"></header>
<div class="card relative bg-slate-200 -z-50 w-full bg-base-100 shadow-xl rounded-t-none">
  <div class="card-body">
    <h2 class="card-title">
      Selamat Datang 😊
    </h2>

    <p class="font-normal text-slate-400">Di Sistem Informasi Akademik Program Studi Administrasi Rumah Sakit Fakultas Kedokteran Universitas Jendral Achmad Yani</p>
    <div class="stats shadow">
  
  <div class="stat bg-slate-800 border-slate-600 dark:bg-slate-500">
    <div class="stat-figure text-primary">
    </div>
    <div class="stat-title text-white">Jumlah Mahasiswa</div>
    <div class="stat-value text-primary">350 Person</div>
  </div>
  
  <div class="stat bg-slate-800 border-slate-600 dark:bg-slate-500">
    <div class="stat-figure text-secondary">
    </div>
    <div class="stat-title text-white">Jumlah Dosen</div>
    <div class="stat-value text-secondary">20 Person</div>
  </div>
  
  <div class="stat bg-slate-800 border-slate-600 dark:bg-slate-500">
    <div class="stat-figure text-secondary">

    </div>
    <div class="stat-title text-white">Data Lulusan</div>
    <div class="stat-value text-success">20 Person</div>
  </div>
  
</div>
  </div>
</div>
</div>

<!-- end card -->
<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>