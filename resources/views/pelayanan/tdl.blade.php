@extends('layouts.admin-layouts')
@section('title', 'Tes Daya Lihat')

@push('css')
    {{-- CSS Code Here --}}
@endpush

@section('main-header', 'Tes Daya Lihat')

@section('main-content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <p>TES DAYA LIHAT</p>
                <p>a. Tujuan tes daya lihat adalam mendeteksi secara dini kelainan daya lihat agar segera dapat dilakukan
                    tindakan lanjutan sehingga kesempatan untuk memperoleh ketajaman daya lihat menjadi lebih besar</p>
                <p>b. Jadwal tes daya lihat dilakukan setiap 6 bulan pada anak usia prasekolah umur 36 sampai 72 bulan. tes
                    ini dilaksanakan oleh tenaga kesehatan.&nbsp;</p>
                <p>c. Alat/sarana yang diperlukan adalah:&nbsp;</p>
                <p>1. Ruangan yang bersih, tenang dengan penyinaran yang baik.&nbsp;</p>
                <p>2. Dua buah kursi, 1 untuk anak dan 1 untuk pemeriksa.&nbsp;</p>
                <p>3. Poster "E" untuk digantung dan kartu "E" untuk dipegang anak.&nbsp;</p>
                <p>4. Alat Penunjuk.&nbsp;</p>
                <p>&nbsp;</p>
                <p>Cara melakukan te daya lihat :&nbsp;</p>
                <p>1. Pilih suatu ruangan yang bersih dan tenang, dengan penyinaran yang baik.&nbsp;</p>
                <p>2. Gantungkan poster "E" setinggi mata anak pada posisi duduk.&nbsp;</p>
                <p>3. Letakkan sebuah kursi sejauh 3 meter dari poster "E" menghadap ke poster "E".&nbsp;</p>
                <p>4. Letakkan sebuah kursi lainnya di samping poster "E" untuk pemeriksa.&nbsp;</p>
                <p>5. Pemeriksa memberikan kartu "E" pada anak. Latih anak dalam mengarahkan kartu "E" menghadap keatas,
                    bawah, kiri, dan kanan; sesuai yang ditunjuk Pada poster "E" oleh pemeriksa. Beri pujian setiap kali
                    anak mau melakukannya. Lakukan hal ini sampai anak dapat mengarahkan kartu "E" dengan benar.&nbsp;</p>
                <p>6. Selanjutnya, anak diminta menutup sebelah matanya dengan buku/kertas.&nbsp;</p>
                <p>7. Dengan alat penunjuk, tunjuk huruf "E" pada poster, satu persatu, mulai baris pertama sampai baris ke
                    empat atau baris "E" terkecil yang masih dapat dilihat.&nbsp;</p>
                <p>8. Puji anak setiap kali dapat mencocokkan posisi kartu "E" yang dipegangnya dengan huruf "E" pada
                    poster.&nbsp;</p>
                <p>9. Ulangi pemeriksaan tersebut pada mata satunya dengan cara yang sama sebelumnya.&nbsp;</p>
                <p>10. Tulis baris "E" terkecil yang dapat dilihat, pada kertas yang telah di sediakan :&nbsp;<br />Mata
                    Kanan : ..................... Mata Kiri : .....................</p>
                <p>&nbsp;</p>
                <p>Interprestasi :&nbsp;</p>
                <p>Anak Prasekolah umumnya tidak mengalami kesulitan melihat sampai baris ketiga pada poster "E". Bila kedua
                    mata anak tidak dapat melihat baris ketiga poster E atau tidak dapat mencocokkan arah kartu E yang
                    dipegangnya dengan arah E padabaris ketiga yang ditunjuk oleh pemeriksa, kemungkinan anak mengalami
                    gangguan daya lihat.&nbsp;</p>
                <p>&nbsp;</p>
                <p>Intervensi :&nbsp;</p>
                <p>Bila kemungkinan anak mengalami gangguan daya lihat, minta anak datang lagi untuk pemeriksaan ulang. Bila
                    pada pemeriksaan berikutnya, anak tidak dapat melihat sampai baris yang sama, atau tidak dapat melihat
                    baris yang sama dengan kedua matanya, rujuk ke rumah sakit dengan menuliskan mata yang mengalami
                    gangguan (kanan, kiri atau keduanya).&nbsp;</p>
            </div>
        </div>

        <form action="{{ route('post-tdl') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <div class="form-group">
                        <label for="exampleSelectGender">Pilih Jawaban : </label>
                        <select class="form-control" id="exampleSelectGender" name="jawaban_tdl">
                            <option selected value="">Pilih jawaban...</option>
                            <option value="YA">YA</option>
                            <option value="TIDAK">TIDAK</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <button class="btn btn-info btn-md" type="submit">
                            PROSES
                        </button>
                    </div>
                </div>
            </div>
        </form>

    </div>

@endsection

@push('js')
    {{-- JS Code Here --}}
@endpush
