<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Symfony\Component\CssSelector\Node\FunctionNode;

class CreateSistaqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('password');
            $table->enum('status',['admin','penyimak','user']);
            $table->timestamps();
        });

        Schema::create('data_santri', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_santri');
            $table->integer('nisn');
            $table->string('tempat_lahir');
            $table->dateTime('tgl_lahir');
            $table->enum('jenis_kelamin', ['laki-laki','perempuan']);
            $table->string('nama_ortu');
            $table->integer('no_hp');
            $table->string('foto');
            $table->string('alamat');
            $table->enum('program', ['tahfidz 1','tahfidz 2','tahfidz 3']);
            $table->string('username');
            $table->string('password');
            $table->timestamps();
        });

        Schema::create('data_penyimak', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nama_penyimak');
            $table->integer('nip');
            $table->integer('no_hp');
            $table->string('foto');
            $table->string('alamat');
            $table->enum('program', ['tahfidz 1','tahfidz 2','tahfidz 3']);
            $table->string('username');
            $table->string('password');
            $table->timestamps();
        });

        Schema::create('data_tahfidz', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nama_santri');
            $table->dateTime('tanggal');
            $table->enum('juz', ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30']);
            $table->enum('surah', ['al-Fatihah','al-Baqarah','ali-Imran','an-Nisa','al-Maidah','al-Anam','al-Araf','al-Anfal','at-Taubah','Yunus','Hud','Yusuf','ar-Rad','Ibrahim','al-Hijr','an-Nahl','al-Isra','al-Kahf','Maryam','Taha','al-Anbiya','al-Hajj','al-Muminun','an-Nur','al-Furqan','asy-Syuara','an-Naml','al-Qasas','al-Ankabut','ar-Rum','Luqman','as-Sajdah','al-Ahzab','Saba','Fatir','Yasin','as-Saffat','Sad','az-Zumar','Gafir','Fussilat','asy-Syura','az-Zukhruf','ad-Dukhan','al-Jasiyah','al-Ahqaf','Muhammad','al-Fath','al-Hujurat','Qaf','az-Zariyat','at-Tur','an-Najm','al-Qamar','ar-Rahman','al-Waqiah','al-Hadid','al-Mujadalah','al-Hasyr','al-Mumtahanah','as-Saff','al-Jumuah','al-Munafiqun','at-Tagabun','at-Talaq','at-Tahrim','al-Mulk','al-Qalam','al-Haqqah','al-Maarij','Nuh','al-Jinn','al-Muzzammil','al-Muddassir','al-Qiyamah','al-Insan','al-Mursalat','an-Naba','an-Naziat','Abasa','at-Takwir','al-Infitar','al-Mutaffifin','al-Insyiqaq','al-Buruj','at-Tariq','al-Ala','al-Gasyiyah','al-Fajr','al-Balad','asy-Syams','al-Lail','ad-Duha','al-Insyirah','at-Tin','al-Alaq','al-Qadr','al-Bayyinah','az-Zalzalah','al-Adiyat','al-Qoriah','at-Takatsur','al-Asr','al-Humazah','al-Fil','Quraisy','al-Maun','al-Kautsar','al-Kafirun','an-Nasr','al-Lahab','al-Ikhlas','al-Falaq','an-Nas']);
            $table->string('ayat');
            $table->string('point');
        });

        Schema::create('data_presensi', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nama_santri');
            $table->dateTime('tanggal');
            $table->enum('absensi', ['Hadir','Izin','Sakit','Alfa']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sistaq');
    }
}
