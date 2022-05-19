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
<div class="navbar bg-gradient-to-tr bg-emerald-500 text-white shadow-md rounded-sm">
  <div class="navbar-start">
    <div class="dropdown">
      <label tabindex="0" class="btn btn-ghost lg:hidden">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </label>
      <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow-md border-slate-400 bg-white text-slate-900 opacity-100 rounded-box w-52">
        <li tabindex="0">
          <a class="justify-between">
            Data Master
            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z"/></svg>
          </a>
          <ul class="p-2 bg-white text-slate-900 ml-4">
            <li><a>Kurikulum</a></li>
            <li><a>Tahun Ajaran</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <a class="btn btn-ghost normal-case text-xl">ARS-FKUnjani
</a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal p-0">
      <li tabindex="0">
        <a>
          Data Master
          <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>
        </a>
        <ul class="p-2 opacity-100 mt-4 shadow-md bg-white text-slate-900">
            <li><a>Kurikulum</a></li>
            <li><a>Tahun Ajaran</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="navbar-end">
    <a class="btn bg-red-500 border-0 rounded-2xl text-emerald-50 hover:bg-red-400 hover:opacity-80 ease-in-out duration-500">LogOut</a>
  </div>
</div>
<!-- end navbar -->
<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>