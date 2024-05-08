<!DOCTYPE html>
<html lang="en" data-theme="synthwave">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
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
            <h1 class="text-4xl">Form Input Data Mahasiswa</h1>
        </div>
        <div class="flex justify-center flex-col items-center px-[30%]">
            <form action="" method="POST" class="w-full">
                @csrf
                @if (Session::has('pass-key'))
                    <div role="alert" class="alert alert-success mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>{{ session('pass-key') }}</span>
                    </div>
                @endif
                <div class="mb-2 w-full">
                    <input type="text" placeholder="Nama Lengkap" class="input input-bordered w-full"
                        id="nama_lengkap" name="nama_lengkap" />
                </div>
                <div class="mb-2 w-full">
                    <input type="text" placeholder="NIM" class="input input-bordered w-full" id="nim"
                        name="nim" />
                </div>
                <div class="mb-2 w-full">
                    <input type="text" placeholder="Jurusan" class="input input-bordered w-full" id="jurusan"
                        name="jurusan" />
                </div>
                <div class="mb-2 w-full">
                    <input type="text" placeholder="Alamat" class="input input-bordered w-full" id="alamat"
                        name="alamat" />
                </div>
                <div class="mb-2 w-full">
                    <input type="text" placeholder="No Telp." class="input input-bordered w-full" id="telp"
                        name="telp" />
                </div>
                <div class="mb-2 w-full">
                    <input type="text" placeholder="Semester" class="input input-bordered w-full" id="semester"
                        name="semester" />
                </div>
                <div class="mb-2 w-full flex justify-end">
                    <button class="btn btn-sm btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <div class="flex justify-center mt-10 flex-col items-center w-full">
            <div class="w-full flex justify-center">
                <h1 class="text-4xl">List Data Mahasiswa Baru</h1>
            </div>
            <div class="mt-10 flex justify-around w-full">
                @if (Session::has('mhs'))
                    {{-- Card --}}
                    <div class="card w-96 bg-base-100 shadow-xl">
                        <div class="card-body">
                            <h2 class="card-title">Card title!</h2>
                            <p>If a dog chews shoes whose shoes does he choose?</p>
                            <div class="card-actions justify-end">
                                <button class="btn btn-primary">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    {{-- End Card --}}
                    @else
                    <div role="alert" class="alert alert-info max-w-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span>Tidak Ada Data Mahasiswa</span>
                      </div>
                @endif
            </div>
        </div>
    </main>

</body>

</html>
