@extends('master.tahfidz')
@section('content')

<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Data Hafalan Santri Tahfidz 1</h1>

      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Data Hafalan Santri Tahfidz 1</a></li>
          <li class="breadcrumb-item active">Admin</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data setoran hafalan santri program tahfidz 1 ponpes sunan pandanaran</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-head-fixed table-hover table-bordered">
            <thead class="text-center">
            <tr>
              <th>No</th>
              <th>Tanggal</th>
              <th>Nama</th>
              <th>Point</th>
              <th>Juz </th>
              <th>Surah</th>
              <th>Ayat</th>
            </tr>
            </thead>
            <tbody>
                <?php $no=1;?>
                @foreach ($santri as $santri)
            <tr>
                <td>{{ $no }}</td>
                <td></td>
                <td>{{ $santri->nama_santri}}</td>
                <form action="" method="post" autocomplete="on">
                <td>
                    <select class="form-control" style="width: 100%;" name="point">
                        <option selected>Pilih Point</option>
                        <option value="20">20</option>
                        <option value="40">40</option>
                        <option value="60">60</option>
                        <option value="80">80</option>
                        <option value="100">100</option>
                        <option value="120">120</option>
                        <option value="140">140</option>
                        <option value="160">160</option>
                        <option value="180">180</option>
                        <option value="200">200</option>
                        <option value="220">220</option>
                        <option value="240">240</option>
                        <option value="260">260</option>
                        <option value="280">280</option>
                        <option value="300">300</option>
                        <option value="320">320</option>
                        <option value="340">340</option>
                        <option value="360">360</option>
                        <option value="380">380</option>
                        <option value="400">400</option>
                        <option value="420">420</option>
                        <option value="440">440</option>
                        <option value="460">460</option>
                        <option value="480">480</option>
                        <option value="500">500</option>
                        <option value="520">520</option>
                        <option value="540">540</option>
                        <option value="560">560</option>
                        <option value="580">580</option>
                        <option value="600">600</option>

                    </select>
                </td>
                <td>
                    <select class="form-control" style="width: 100%;" name="juz" >
                        <option selected>Pilih Juz</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                    </select>
                </td>
                <td>
                    <select class="form-control" style="width: 100%;" name="surah" >
                        <option selected>Pilih Surah</option>
                        <option value="al-Fatihah">al-Fatihah</option>
                        <option value="al-Baqarah">al-Baqarah</option>
                        <option value="an-Nisa">an-Nisa</option>
                        <option value="al-Maidah">al-Maidah</option>
                        <option value="al-Anam">al-Anam</option>
                        <option value="al-Araf">al-Araf</option>
                        <option value="al-Anfal">al-Anfal</option>
                        <option value="at-Taubah">at-Taubah</option>
                        <option value="Yunus">Yunus</option>
                        <option value="ar-Rad">ar-Rad</option>
                        <option value="Ibrahim">Ibrahim</option>
                        <option value="al-Hijr">al-Hijr</option>
                        <option value="an-Nahl">an-Nahl</option>
                        <option value="al-Isra">al-Isra</option>
                        <option value="al-Kahf">al-Kahf</option>
                        <option value="Maryam">Maryam</option>
                        <option value="Taha">Taha</option>
                        <option value="al-Anbiya">al-Anbiya</option>
                        <option value="al-Hajj">al-hajj</option>
                        <option value="al-Muminun">al-Muminun</option>
                        <option value="an-Nur">an-Nur</option>
                        <option value="al-Furqan">al-Furqan</option>
                        <option value="asy-Syuara">asy-Syuara</option>
                        <option value="an-Naml">an-Naml</option>
                        <option value="al-Qasas">al-Qasas</option>
                        <option value="al-Ankabut">al-Ankabut</option>
                        <option value="ar-Rum">ar-Rum</option>
                        <option value="Luqman">Luqman</option>
                        <option value="as-Sajdah">as-Sajdah</option>
                        <option value="al-Ahzab">al-Ahzab</option>
                        <option value="Saba">Saba</option>
                        <option value="Fatir">Fatir</option>
                        <option value="Yasin">Yasin</option>
                        <option value="as-Saffat">as-Saffat</option>
                        <option value="Sad">Sad</option>
                        <option value="az-Zumar">az-Zumar</option>
                        <option value="Gafir">Gafir</option>
                        <option value="Fussilat">Fussilat</option>
                        <option value="asy-Syura">asy-Syura</option>
                        <option value="az-Zukhruf">az-Zukhruf</option>
                        <option value="ad-Dukhan">ad-Dukhan</option>
                        <option value="al-Jasiyah">al-Jasiyah</option>
                        <option value="al-Ahqaf">al-Ahqaf</option>
                        <option value="Muhammad">Muhammad</option>
                        <option value="al-Fath">al-Fath</option>
                        <option value="al-Hujurat">al-Hujurat</option>
                        <option value="Qaff">Qaff</option>
                        <option value="az-Zariyat">az-Zariyat</option>
                        <option value="at-Tur">at-Tur</option>
                        <option value="an-Najm">an-Najm</option>
                        <option value="al-Qamar">al-Qamar</option>
                        <option value="ar-Rahman">ar-Rahman</option>
                        <option value="al-Waqiah">al-Waqiah</option>
                        <option value="al-Hadid">al-Hadid</option>
                        <option value="al-Mujadalah">al-Mujadalah</option>
                        <option value="al-Hasyr">al-Hasyr</option>
                        <option value="al-Muntahanah">al-Muntahanah</option>
                        <option value="as-Saff">as-Saff</option>
                        <option value="al-Jumuah">al-Jumuah</option>
                        <option value="al-Munafiqun">al-Munafiqun</option>
                        <option value="at-Tagabun">at-Tagabun</option>
                        <option value="at-Talaq">at-Talaq</option>
                        <option value="at-Tahrim">at-Tahrim</option>
                        <option value="al-Mulk">al-Mulk</option>
                        <option value="al-Qalam">al-Qalam</option>
                        <option value="al-Haqqah">al-Haqqah</option>
                        <option value="al-Maarij"><al-Maarij/option>
                        <option value="Nuh">Nuh</option>
                        <option value="al-Jinn">al-Jinn</option>
                        <option value="al-Muzzammil">al-Muzzammil</option>
                        <option value="al-Muddassir">al-Muddassir</option>
                        <option value="al-Qiyamah">al-Qiyamah</option>
                        <option value="al-Insan">al-Insan</option>
                        <option value="al-Mursalat">al-Mursalat</option>
                        <option value="an-Naba">an-Naba</option>
                        <option value="an-Naziat">an-Naziat</option>
                        <option value="Abasa">Abasa</option>
                        <option value="at-Takwir">at-Takwir</option>
                        <option value="al-Infitar">al-Infitar</option>
                        <option value="al-Mutaffifin">al-Mutaffifin</option>
                        <option value="al-Insyiqaq">al-Insyiqaq</option>
                        <option value="al-Buruj">al-Buruj</option>
                        <option value="at-Tariq">at-Tariq</option>
                        <option value="al-Ala">al-Ala</option>
                        <option value="al-Gasyiyah">al-Gasyiyah</option>
                        <option value="al-Fajr">al-Fajr</option>
                        <option value="al-Balad">al-Balad</option>
                        <option value="asy-Syams">asy-Syams</option>
                        <option value="al-Lail">al-Lail</option>
                        <option value="ad-Duha">ad-Duha</option>
                        <option value="al-Insyirah">al-Insyirah</option>
                        <option value="at-Tin">at-Tin</option>
                        <option value="al-Alaq">al-Alaq</option>
                        <option value="al-Qadr">al-Qadr</option>
                        <option value="al-Bayyinah">al-Bayyinah</option>
                        <option value="az-Zalzalah">az-Zalzalah</option>
                        <option value="al-Adiyat">al-Adiyat</option>
                        <option value="al-Qoriah">al-Qoriah</option>
                        <option value="at-Takatsur">at-Takatsur</option>
                        <option value="al-Asr">al-Asr</option>
                        <option value="al-Humazah">al-Humazah</option>
                        <option value="al-Fil">al-Fil</option>
                        <option value="Quraisy">Quraisy</option>
                        <option value="al-Maun">al-Maun</option>
                        <option value="al-Kautsar">al-Kautsar</option>
                        <option value="al-Kafirun">al-Kafirun</option>
                        <option value="an-Nasr">an-Nasr</option>
                        <option value="al-Lahab">al-Lahab</option>
                        <option value="al-Ikhlas">al-Ikhlas</option>
                        <option value="al-Falaq">al-Falaq</option>
                        <option value="an-Nas">an-Nas</option>
                    </select>
                </td>
                <td>
                   <input type="number" name="ayat" required>
                </td>
            </tr>
            </tbody>
            <?php $no++ ;?>
            @endforeach
          </table>
          <br>
          <div class="col-auto">
              <button type="submit" class="btn btn-success">Update</button>
          </div>
        </form>

        </div>
    </div>
        <!-- /.card-body -

</section>
<!-- /.content -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript">
            function isi_otomatis(){
                var nim = $("#nim").val();
                $.ajax({
                    url: 'ajax.php',
                    data:"nim="+nim ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#nama').val(obj.nama);
                    $('#jeniskelamin').val(obj.jeniskelamin);
                    $('#jurusan').val(obj.jurusan);
                    $('#notelp').val(obj.notelp);
                    $('#email').val(obj.email);
                    $('#alamat').val(obj.alamat);
                });
            }
        </script>

@endsection
