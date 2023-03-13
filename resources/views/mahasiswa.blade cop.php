<div class="container text-center mt-3 pt-3 bg-white">
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nama }}</h1>
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nilai }}</h1>
    <br>
    @if (($nilai >= 0) and ($nilai < 50)) 
    <div class="alert alert-danger d-inline-block">Maaf, anda tidak lulus</div>
    @elseif (($nilai >= 50) and ($nilai <= 100)) 
    <div class="alert alert-success d-inline-block">Selamat, anda lulus</div>
    @else
    <div class="alert alert-dark d-inline-block">Nilai tidak valid</div>
    @endif
</div>