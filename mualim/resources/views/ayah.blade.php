@extends('master')

@section('content')

<section id="content-1">
    <div class="col-md-12 col-sm-12 col-xs-12 box-1-alquran">
        <p class="text-title-box">3 Total Ayah</p>
        <br>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 5px;padding: 0px;">
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding-left: 0px;">
                <input class="form-control urutkan" type="text" placeholder="Search">
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding-left: 5px;">
                <select id="" class="form-control urutkan">
                    <option value="" selected>Sort</option>
                    <option value="">Number</option>
                    <option value="">Page</option>
                    <option value="">Juz</option>
                    <option value="">Ayah</option>
                </select>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-4 col-xs-6" align="right" style="padding-right: 0px;margin-bottom: 5px;">
                <a class="btn btn-primary" href="/ayah_add">Add</a>
            </div>
        </div>
        <p>
            <table class="table table-striped table-bordered">
            <thead">
              <tr>
                <th>No.</th>
                <th width="10%">Surah</th>
                <th>Page</th>
                <th>Juz</th>
                <th>Ayah</th>
                <th>Arab</th>
                <th>Latin</th>
                <th>Indonesian</th>
                <th>Tafsir</th>
                <th width="10%">Opsi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Al-Fathihah</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ</td>
                <td>bismi <strong>al</strong>l<u>aa</u>hi <strong>al</strong>rra<u>h</u>m<u>aa</u>ni <strong>al</strong>rra<u>h</u>iim<strong>i</strong></td>
                <td>Dengan menyebut nama Allah Yang Maha Pengasih lagi Maha Penyayang</td>
                <td>"Surah al-Fatihah dimulai dengan Basmalah\n\nAda beberapa pendapat ulama berkenaan dengan Basmalah yang terdapat pada permulaan surah Al-Fatihah. Di antara pendapat-pendapat itu, yang termasyhur ialah:\n\n1.Basmalah adalah ayat tersendiri, diturunkan Allah untuk jadi kepala masing-masing surah, dan pembatas antara satu surah dengan surah yang lain. Jadi dia bukanlah satu ayat dari al-Fatihah atau dari surah yang lain, yang dimulai dengan Basmalah itu. Ini pendapat Imam Malik beserta ahli qiraah dan fuqaha (ahli fikih) Medinah, Basrah dan Syam, dan juga pendapat Imam Abu Hanifah dan pengikut-pengikutnya. Sebab itu menurut Imam Abu Hanifah, Basmalah itu tidak dikeraskan membacanya dalam salat, bahkan Imam Malik tidak membaca Basmalah sama sekali.\n\nHadis Nabi saw:\n\nDari Anas bin Malik, dia berkata, \"Saya salat di belakang Nabi saw, Abu Bakar, Umar dan Usman. Mereka memulai dengan al-hamdulillahi rabbil 'alamin, tidak menyebut Bismillahirrahmanirrahim di awal bacaan, dan tidak pula di akhirnya.\"(Riwayat al-Bukhari dan Muslim).\n\n2.Basmalah adalah salah satu ayat dari al-Fatihah, dan pada surah an-Naml/27:30, /27:30) yang dimulai dengan Basmalah. Ini adalah pendapat Imam Syafi'i beserta ahli qiraah Mekah dan Kufah. Sebab itu menurut mereka Basmalah itu dibaca dengan suara keras dalam salat (jahar). Dalil-dalil yang menunjukkan hal itu antara lain Hadis Nabi saw: \n\nDari Ibnu 'Abbas, ia berkata, Rasulullah saw mengeraskan bacaan Bismillahirrahmanirrahim. (Riwayat al-hakim dalam al-Mustadrak dan menurutnya, hadis ini sahih)\n\nDari Ummu Salamah, katanya, Rasulullah saw berhenti berkali-kali dalam bacaanya Bismillahirrahmanirrahim, al-hamdulillahi Rabbil- 'alamin, ar-Rahmanir-rahim, Maliki Yaumid-din. (Riwayat Ahmad, Abu Daud, Ibnu Khuzaimah dan al-hakim. Menurut ad-Daruqutni, sanad hadis ini sahih).\n\nAbu Hurairah juga salat dan mengeraskan bacaan basmalah. Setelah selesai salat, dia berkata, \"Saya ini adalah orang yang salatnya paling mirip dengan Rasulullah.\" Muawiyah juga pernah salat di Medinah tanpa mengeraskan suara basmalah. Ia diprotes oleh para sahabat lain yang hadir disitu. Akhirnya pada salat berikutnya Muawiyah mengeraskan bacaan basmalah. \n\nKalau kita perhatikan bahwa sahabat-sahabat Rasulullah saw telah sependapat menuliskan Basmalah pada permulaan surah dari surah Al-Qur'an, kecuali surah at-Taubah (karena memang dari semula turunnya tidak dimulai dengan Basmalah) dan bahwa Rasulullah saw melarang menuliskan sesuatu yang bukan Al-Qur'an agar tidak bercampur aduk dengan Al-Qur'an, sehingga mereka tidak menuliskan 'amin pada akhir surah al-Fatihah, maka Basmalah itu adalah salah satu ayat dari Al-Qur'an. Dengan kata lain, bahwa \"basmalah-basmalah\" yang terdapat di dalam Al-Qur'an adalah ayat-ayat Al-Qur'an, lepas dari pendapat apakah satu ayat dari al-Fatihah atau dari surah lain, yang dimulai dengan Basmalah atau tidak.\n\nSebagaimana disebutkan di atas bahwa surah al-Fatihah itu terdiri dari tujuh ayat. Mereka yang berpendapat bahwa Basmalah itu tidak termasuk satu ayat dari al-Fatihah, memandang:\n\nadalah salah satu ayat, dengan demikian ayat-ayat al-Fatihah itu tetap tujuh.\n\n\"Dengan nama Allah\" maksudnya \"Dengan nama Allah saya baca atau saya mulai\". Seakan-akan Nabi berkata, \"Saya baca surah ini dengan menyebut nama Allah, bukan dengan menyebut nama saya sendiri, sebab ia wahyu dari Tuhan, bukan dari saya sendiri.\" Maka Basmalah di sini mengandung arti bahwa Al-Qur'an itu wahyu dari Allah, bukan karangan Muhammad saw dan Muhammad itu hanyalah seorang Pesuruh Allah yang dapat perintah menyampaikan Al-Qur'an kepada manusia.\n\nMakna kata Allah \n\nAllah adalah nama bagi Zat yang ada dengan sendirinya (wajibul-wujud). Kata \"Allah\" hanya dipakai oleh bangsa Arab kepada Tuhan yang sebenarnya, yang berhak disembah, yang mempunyai sifat-sifat kesempurnaan. Mereka tidak memakai kata itu untuk tuhan-tuhan atau dewa-dewa mereka yang lain. \n\nHikmah Membaca Basmalah\n\nSeorang yang selalu membaca Basmalah sebelum melakukan pekerjaan yang penting, berarti ia selalu mengingat Allah pada setiap pekerjaannya. Dengan demikian ia akan melakukan pekerjaan tersebut dengan selalu memperhatikan norma-norma Allah dan tidak merugikan orang lain. Dampaknya, pekerjaan yang dilakukannya akan berbuah sebagai amalan ukhrawi. \n\nSeorang Muslim diperintahkan membaca Basmalah pada waktu mengerjakan sesuatu yang baik. Yang demikian itu untuk mengingatkan bahwa sesuatu yang dikerjakan adalah karena perintah Allah, atau karena telah diizinkan-Nya. Maka karena Allah dia mengerjakan pekerjaan itu dan kepada-Nya dia meminta pertolongan agar pekerjaan terlaksana dengan baik dan berhasil.\n\nNabi saw bersabda:\n\n\"Setiap pekerjaan penting yang tidak dimulai dengan menyebut Basmalah adalah buntung (kurang berkahnya).\" (Riwayat Abdul-Qadir ar-Rahawi).\n\nOrang Arab sebelum datang Islam mengerjakan sesuatu dengan menyebut al-Lata dan al-'Uzza, nama-nama berhala mereka. Sebab itu, Allah mengajarkan kepada penganut-penganut agama Islam yang telah mengesakan-Nya, agar mereka mengerjakan sesuatu dengan menyebut nama Allah.",</td>
                <td align="center">
                    <a href="#" class="btn btn-warning btn-sm">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a> 
                    <a href="#" class="btn btn-danger btn-sm">
                        <span class="glyphicon glyphicon-trash"></span>
                    </a>
                </td>
              </tr>
            </tbody>
            </table>
        </p>
    </div>
</section>

@endsection