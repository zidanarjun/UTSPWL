<!DOCTYPE html>
<html lang="en" data-theme="synthwave">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    {{-- Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- Daisy --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    @include('uts.components.navbar')
    <main>
        <div class="flex justify-center mt-6 mb-6">
            <h1 class="text-4xl">Kelompok 3</h1>
        </div>
        <div class="p-5 flex flex-wrap justify-evenly gap-5 mb-10">
            {{-- Card --}}
            <div class="card w-96 bg-base-100 shadow-xl">
                <div class="card-body"> 
                    <h2 class="card-title">
                        <div class="badge badge-secondary">1</div>
                        Mahasiswa
                    </h2>
                    <table>
                        <tr>
                            <td>NAMA</td>
                            <td>: Wildan Aziz Muhammad</td>
                        </tr>
                        <tr>
                            <td>NIM</td>
                            <t0d>: 22104410066</t0d>
                        </tr>
                        <tr>
                            <td>JURUSAN</td>
                            <td>: Teknik Informatika</td>
                        </tr>
                        <tr>
                            <td>SEMESTER</td>
                            <td>: 4</td>
                        </tr>
                    </table>
                </div>
            </div>
            {{-- End Card --}}
            {{-- Card --}}
            <div class="card w-96 bg-base-100 shadow-xl">
                <div class="card-body"> 
                    <h2 class="card-title">
                        <div class="badge badge-secondary">2</div>
                        Mahasiswa
                    </h2>
                    <table>
                        <tr>
                            <td>NAMA</td>
                            <td>: Firman Sukma Adiningrat</td>
                        </tr>
                        <tr>
                            <td>NIM</td>
                            <td>: 22104410079</td>
                        </tr>
                        <tr>
                            <td>JURUSAN</td>
                            <td>: Teknik Informatika</td>
                        </tr>
                        <tr>
                            <td>SEMESTER</td>
                            <td>: 4</td>
                        </tr>
                    </table>
                </div>
            </div>
            {{-- End Card --}}
            {{-- Card --}}
            <div class="card w-96 bg-base-100 shadow-xl">
                <div class="card-body"> 
                    <h2 class="card-title">
                        <div class="badge badge-secondary">3</div>
                        Mahasiswa
                    </h2>
                    <table>
                        <tr>
                            <td>NAMA</td>
                            <td>: Zidan Arjun Prayoga</td>
                        </tr>
                        <tr>
                            <td>NIM</td>
                            <td>: 22104410104</td>
                        </tr>
                        <tr>
                            <td>JURUSAN</td>
                            <td>: Teknik Informatika</td>
                        </tr>
                        <tr>
                            <td>SEMESTER</td>
                            <td>: 4</td>
                        </tr>
                    </table>
                </div>
            </div>
            {{-- End Card --}}
            {{-- Card --}}
            <div class="card w-96 bg-base-100 shadow-xl">
                <div class="card-body"> 
                    <h2 class="card-title">
                        <div class="badge badge-secondary">4</div>
                        Mahasiswa
                    </h2>
                    <table>
                        <tr>
                            <td>NAMA</td>
                            <td>: Aurel Dhea Fernanda Putra</td>
                        </tr>
                        <tr>
                            <td>NIM</td>
                            <td>: 22104410120</td>
                        </tr>
                        <tr>
                            <td>JURUSAN</td>
                            <td>: Teknik Informatika</td>
                        </tr>
                        <tr>
                            <td>SEMESTER</td>
                            <td>: 4</td>
                        </tr>
                    </table>
                </div>
            </div>
            {{-- End Card --}}
            {{-- Card --}}
            <div class="card w-96 bg-base-100 shadow-xl">
                <div class="card-body"> 
                    <h2 class="card-title">
                        <div class="badge badge-secondary">5</div>
                        Mahasiswa
                    </h2>
                    <table>
                        <tr>
                            <td>NAMA</td>
                            <td>: Lutfi Hanif Faizin</td>
                        </tr>
                        <tr>
                            <td>NIM</td>
                            <td>: 22104410109</td>
                        </tr>
                        <tr>
                            <td>JURUSAN</td>
                            <td>: Teknik Informatika</td>
                        </tr>
                        <tr>
                            <td>SEMESTER</td>
                            <td>: 4</td>
                        </tr>
                    </table>
                </div>
            </div>
            {{-- End Card --}}
        </div>
    </main>
</body>

</html>
