<!DOCTYPE html>
<html lang="en" data-theme="synthwave">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
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
            <h1 class="text-4xl">List Mahasiswa Kelompok 3</h1>
        </div>
        <div class="p-5 flex flex-wrap justify-evenly gap-5">
            @foreach ($mhs as $key => $value)
                {{-- Card --}}
                <div class="card w-96 bg-primary text-primary-content mb-10">
                    <div class="card-body">
                        <h2 class="card-title">
                            <div class="badge badge-secondary">{{ $key + 1 }}</div>
                            Mahasiswa
                        </h2>
                        <table>
                            <tr>
                                <td>NAMA</td>
                                <td>: {{ $value->nama_lengkap }}</td>
                            </tr>
                            <tr>
                                <td>NIM</td>
                                <td>: {{ $value->nim }}</td>
                            </tr>
                            <tr>
                                <td>JURUSAN</td>
                                <td>: {{ $value->jurusan }}</td>
                            </tr>
                            <tr>
                                <td>SEMESTER</td>
                                <td>: {{ $value->semester }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                {{-- End Card --}}
            @endforeach
        </div>
    </main>
</body>

</html>
