<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNDP x Indosat Ooredo</title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets') ?>/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets') ?>/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets') ?>/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url('assets') ?>/images/favicon/site.webmanifest">
    
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/tailwind.css?v=4">
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/styles.css?v=4">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form id="mainform" action="<?php echo site_url('participant') ?>" name="mainform" method="post">

            <div class="bg blue fixed w-full h-full"></div>

            <div class="head absolute flex justify-between pr-4 pt-6 w-full md:pt-12 md:pr-10 hidden">
                <div class="logo--left">
                    <img src="<?php echo base_url('assets') ?>/images/survey-title.png?v=2" alt="">
                </div>
                <div class="logo--right flex justify-between">
                    <div class="logo--kemenkopukm">
                        <img src="<?php echo base_url('assets') ?>/images/logo-kemenkopukm-black.png" alt="">
                    </div>
                    <div class="logo--indosat">
                        <img src="<?php echo base_url('assets') ?>/images/logo-indosat.png?v=3" alt="">
                    </div>
                    <div class="logo--undp">
                        <img src="<?php echo base_url('assets') ?>/images/logo-undp.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="wrap page--first">
                <div class="min-h-screen min-w-full flex flex-col justify-center text-white text-center">
                    <div class="head__mid absolute w-full flex justify-center items-center">
                        <div class="head__mid--zero">
                            <img src="<?php echo base_url('assets') ?>/images/logo-kemenkopukm.png" alt="">
                        </div>
                        <div class="head__mid--one">
                            <img src="<?php echo base_url('assets') ?>/images/logo-indosat.png?v=2" alt="">
                        </div>
                        <div class="head__mid--two">
                            <img src="<?php echo base_url('assets') ?>/images/logo-undp-w.png" alt="">
                        </div>
                    </div>
                    <div class="md:px-16 lg:px-60">
                        <h1 class="font-bold p-4 text-3xl leading-snug lg:text-5xl lg:leading-relaxed">SURVEI LANJUTAN DAMPAK COVID-19 TERHADAP UMKM DI INDONESIA</h1>
                        <br>
                        <button class="bg-t-red p-2 w-24 mx-auto rounded-lg font-bold btn--start lg:w-32 lg:text-xl btn__next btn__change--white">MULAI</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen h-screen min-w-full py-32 md:py-36 overflow-hidden">                    
                    <div class="content content-scroll p-7 text-center font-bold text-t-blue h-full overflow-y-scroll md:text-xl">
                        <p>Selamat <?php echo (date('H') < 10?'pagi':(date('H') < 15?'siang':'malam')) ?>, Bapak/Ibu yang kami hormati, kami dari Kementerian Koperasi dan UKM, UNDP Indonesia, dan Indosat Oooredoo. Saat ini kami sedang melakukan Survei Lanjutan Dampak COVID-19 Terhadap UMKM di Indonesia. Kami mohon kesediaan Bapak/Ibu untuk menjadi responden dalam survei ini.</p>
                        <br>
                        <p>Survei ini bertujuan untuk melihat dampak pandemi COVID-19 bagi UMKM selama tahun 2021, lebih dari satu tahun setelah pandemi dimulai. Survei ini ingin mengetahui apa strategi dan yang dipilih oleh pelaku usaha UMKM, termasuk pelaku usaha perempuan, pemuda, dan juga yang berkebutuhan khusus dalam memitigasi dampak dari pandemik terhadap usaha mereka, serta adaptasi usaha yang telah dilaksanakan. Survei ini juga ingin mengidentifikasi dampak Pandemi COVID 19 dan peluang kontribusi UMKM dalam pemulihan ekonomi yang bersifat ramah lingkungan dan inklusif. Hasil dari survei ini diharapkan dapat memberikan gambaran bagi pemangku kepentingan terkait dalam upaya memitigasi dampak pandemi COVID-19 baik dari sisi ekonomi maupun non-ekonomi bagi pelaku UMKM. </p>
                        <br>
                        <p>Survei ini bukan untuk menilai UMKM sebagai responden, jawaban responden tidak ada yang dinilai benar atau salah, melainkan diisi sesuai dengan kondisi responden. Kami menjamin seluruh informasi yang Bapak/Ibu berikan hanya dipergunakan untuk keperluan penelitian dan evaluasi program saja. Informasi yang Bapak/Ibu berikan selanjutnya akan diolah dan disusun menjadi suatu laporan yang berisi masukan dan rekomendasi kepada pihak-pihak terkait.</p>
                        <br>
                        <p>Partisipasi dalam survei ini sepenuhnya sukarela. Jika Bapak/Ibu memutuskan untuk tidak berpartisipasi, tidak akan ada konsekuensi negatif. Perlu diketahui bahwa jika Bapak/Ibu memutuskan untuk berpartisipasi, Bapak/Ibu dapat berhenti berpartisipasi kapan saja dan dapat memutuskan untuk tidak menjawab pertanyaan spesifik apa pun.</p>
                        <button class="mt-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 btn__next">SELANJUTNYA</button>
                    </div>
                </div>
            </div>
            <?php $inc = 0; ?>
            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h1 class="text-xl font-bold">Apakah Bapak/Ibu adalah pemilik usaha?</h1>
                        <div>
                            <div class="my-4">
                                <label class="flex items-center input__wrap">
                                    <input type="radio" name="q[<?php echo $inc ?>]" value="Ya" class="mr-3 hidden radio__pick" data-id="<?php echo $inc ?>" required>
                                    <span class="input__custom"></span>
                                    Ya
                                </label>
                            </div>
                            <div class="my-4">
                                <label class="flex items-center input__wrap">
                                    <input type="radio" name="q[<?php echo $inc ?>]" value="Tidak" class="mr-3 hidden radio__pick" data-id="<?php echo $inc ?>" required>
                                    <span class="input__custom"></span>
                                    Tidak
                                </label>
                            </div>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                        <button class="my-6 font-bold bg-white border-2 border-t-blue rounded-lg px-4 py-2 mx-auto block text-t-blue btn__back" data-id="<?php echo $inc ?>">KEMBALI</button>
                    </div>
                </div>
            </div>
            
            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h1 class="text-xl font-bold">Apakah Bapak/Ibu bersedia menjadi responden survei ini?</h1>
                        <div>
                            <div class="my-4">
                                <label class="flex items-center input__wrap">
                                    <input type="radio" name="q[<?php echo ++$inc ?>]" value="Ya" class="mr-3 hidden radio__pick" data-id="<?php echo $inc ?>" required>
                                    <span class="input__custom"></span>
                                    Ya
                                </label>
                            </div>
                            <div class="my-4">
                                <label class="flex items-center input__wrap">
                                    <input type="radio" name="q[<?php echo $inc ?>]" value="Tidak" class="mr-3 hidden radio__pick" data-id="<?php echo $inc ?>" required>
                                    <span class="input__custom"></span>
                                    Tidak
                                </label>
                            </div>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                        <button class="my-6 font-bold bg-white border-2 border-t-blue rounded-lg px-4 py-2 mx-auto block text-t-blue btn__back" data-id="<?php echo $inc ?>">KEMBALI</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">A. Profil Usaha</h2>
                        <h1 class="text-xl font-bold">A1. Nama Pemilik Usaha</h1>
                        <div class="my-4">
                            <label for="name" class="font-bold block">Nama</label>
                            <input type="text" name="q[<?php echo ++$inc ?>]" id="name" class="border-2 border-t-blue rounded-lg px-2 py-1 w-full mt-2 input__text" data-id="<?php echo $inc ?>">
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                        <button class="my-6 font-bold bg-white border-2 border-t-blue rounded-lg px-4 py-2 mx-auto block text-t-blue btn__back" data-id="<?php echo $inc ?>">KEMBALI</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">A. Profil Usaha</h2>
                        <h1 class="text-xl font-bold">A2. Nomor Telepon Pemilik Usaha</h1>
                        <div class="my-4">
                            <input type="number" min="0" name="q[<?php echo ++$inc ?>]" id="phone" class="border-2 border-t-blue rounded-lg px-2 py-1 w-full mt-2 input__text" data-id="<?php echo $inc ?>">
                        </div>
                        <small>1,000 responden yang beruntung dan mengisi survei ini dengan lengkap akan mendapatkan pulsa senilai Rp 25,000. Silakan isi nomor telepon Bapak/Ibu jika tertarik mengikuti undian ini. Cukup isi nama apabila tidak bersedia.</small>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form" data-id="<?php echo $inc ?>">SELANJUTNYA</button>
                        <button class="my-6 font-bold bg-white border-2 border-t-blue rounded-lg px-4 py-2 mx-auto block text-t-blue btn__back" data-id="<?php echo $inc ?>">KEMBALI</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">A. Profil Usaha</h2>
                        <h1 class="text-xl font-bold">A3. Jenis Kelamin</h1>
                        <div>
                            <div class="my-4">
                                <label class="flex items-center input__wrap">
                                    <input type="radio" value="Pria" name="q[<?php echo ++$inc ?>]" class="mr-3 hidden radio__pick" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Pria
                                </label>
                            </div>
                            <div class="my-4">
                                <label class="flex items-center input__wrap">
                                    <input type="radio" value="Wanita" name="q[<?php echo $inc ?>]" class="mr-3 hidden radio__pick" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Wanita
                                </label>
                            </div>
                            <div class="my-4">
                                <label class="flex items-center input__wrap">
                                    <input type="radio" value="Lainnya" name="q[<?php echo $inc ?>]" class="mr-3 hidden radio__pick" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Lainnya
                                </label>
                            </div>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                        <button class="my-6 font-bold bg-white border-2 border-t-blue rounded-lg px-4 py-2 mx-auto block text-t-blue btn__back" data-id="<?php echo $inc ?>">KEMBALI</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">A. Profil Usaha</h2>
                        <h1 class="text-xl font-bold">A4. Usia pemilik usaha</h1>
                        <div>
                            <select name="q[<?php echo ++$inc ?>]" class="my-4 p-2 border-2 border-t-blue rounded-lg input__dropdown" data-id="<?php echo $inc ?>">
                                <option value="" class="hidden" disabled selected>0</option>
                                <?php for ($i=10; $i <=80 ; $i++) {  ?>
                                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                        <button class="my-6 font-bold bg-white border-2 border-t-blue rounded-lg px-4 py-2 mx-auto block text-t-blue btn__back" data-id="<?php echo $inc ?>">KEMBALI</button>
                    </div>
                </div>
            </div>
            <?php 
                $this->load->view('template/radio',[
                    'title'=>'A. Profil Usaha',
                    'subtitle'=>'A5. Apakah pemilik usaha merupakan penyandang disabilitas?',
                    'inc'=>++$inc,
                    'question'=>[
                        'Ya',
                        'Tidak'
                    ],
                    'show'=>0
                ]);
            ?>

            <?php 
                $this->load->view('template/checkbox',[
                    'class'=>'',
                    'title'=>'A. Profil Usaha',
                    'subtitle'=>'A6. Disabilitas apa yang dimiliki oleh pemilik usaha?',
                    'inc'=>++$inc,
                    'question'=>[
                        'Kesulitan dalam pengelihatan',
                        'Kesulitan dalam pendengaran',
                        'Kesulitan dalam berjalan atau menaiki tangga',
                        'Kesulitan dalam menggunakan atau menggerakan tangan atau jari',
                        'Kesulitan terkait daya ingat atau konsentrasi',
                        'Kesulitan terkait masalah perilaku dan/atau emosi',
                        'Kesulitan dalam berbicara dan/atau memahami/berkomunikasi dengan orang lain',
                        'Kesulitan dalam merawat diri sendiri (seperti mandi, makan, buang air kecil, buang air besar)',
                        'Tidak tahu',
                        'Lainnya'
                    ],
                    'show'=>0
                ]);
            ?>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">A. Profil Usaha</h2>
                        <h1 class="text-xl font-bold">A7. Lokasi Usaha:</h1>
                        <div class="my-4">
                            <select id="prov_select" name="q[<?php echo ++$inc ?>]" class="border-2 border-t-blue rounded-lg w-full p-2 input__dropdown">
                                <option value="" class="hidden" disabled selected>Provinsi</option>
                                <?php foreach ($prov as $row) { ?>                                    
                                <option value="<?php echo $row->prov ?>"><?php echo $row->prov ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="my-4">
                            <select id="city_select" name="q[<?php echo ++$inc ?>]" class="border-2 border-t-blue rounded-lg w-full p-2 input__dropdown">
                                <option value="" class="hidden" disabled selected>Kabupaten/Kota</option>
                            </select>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__next__prov btn__form disabled" disabled>SELANJUTNYA</button>
                        <button class="my-6 font-bold bg-white border-2 border-t-blue rounded-lg px-4 py-2 mx-auto block text-t-blue btn__back" data-id="<?php echo $inc ?>">KEMBALI</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">A. Profil Usaha</h2>
                        <h1 class="text-xl font-bold">A8. Pada tahun berapa usaha ini mulai beroperasi?</h1>
                        <div class="my-4">
                            <select name="q[<?php echo ++$inc ?>]" class="my-4 p-2 border-2 border-t-blue rounded-lg input__dropdown" data-id="<?php echo $inc ?>">
                                <option value="" class="hidden" disabled selected>0</option>
                                <option value="under1950">< 1950</option>
                                <?php for ($i=1950; $i <=date('Y') ; $i++) {  ?>
                                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                        <button class="my-6 font-bold bg-white border-2 border-t-blue rounded-lg px-4 py-2 mx-auto block text-t-blue btn__back" data-id="<?php echo $inc ?>">KEMBALI</button>
                    </div>
                </div>
            </div>
            
            <?php 
                $this->load->view('template/checkbox',[
                    'class'=>'',
                    'title'=>'A. Profil Usaha',
                    'subtitle'=>'A9. Jenis Produk Usaha yang dilaksanakan?',
                    'inc'=>++$inc,
                    'question'=>[
                        'Furnitur',
                        'Kerajinan',
                        'Garmen',
                        'Peralatan rumah tangga & peternakan',
                        'Produk kulit (dompet & sepatu)',
                        'Fashion dan aksesoris',
                        'Makanan dan minuman',
                        'Komoditas pertanian dan perkebunan',
                        'Komoditas perikanan dan peternakan',
                        'Komponen mesin',
                        'Jasa',
                        'Lainnya'
                    ],
                    'show'=>0
                ]);
            ?>

            <?php 
                $this->load->view('template/checkbox',[
                    'class'=>'grid grid-cols-2',
                    'title'=>'A. Profil Usaha',
                    'subtitle'=>'A10. Sejak pandemi COVID-19 dimulai (Maret 2020), apakah Bapak/Ibu pernah menutup usaha? Jika Ya, pada bulan apa?',
                    'inc'=>++$inc,
                    'question'=>['Maret 2020','April 2020','Mei 2020','Juni 2020','Juli 2020','Agustus 2020','September 2020','November 2020','Desember 2020','Januari 2021','Februari 2021','Maret 2021','April 2021','Mei 2021','Juni 2021','Tidak Pernah'],
                    'show'=>0
                ]);
            ?>

            <?php 
                $this->load->view('template/radio',[
                    'title'=>'A. Profil Usaha',
                    'subtitle'=>'A11. Apa status usaha saat ini?',
                    'inc'=>++$inc,
                    'question'=>['Beroperasi','Beroperasi sebagian','Tutup sementara','Tutup permanen'],
                    'show'=>0
                ]);
            ?>

            <?php 
                $this->load->view('template/radio',[
                    'title'=>'A. Profil Usaha',
                    'subtitle'=>'A12. Apa alasan utama dari penutupan usaha saat ini?',
                    'inc'=>++$inc,
                    'question'=>['Peraturan Pemerintah','Permintaan yang menurun drastis','Ketidakcukupan uang untuk membiayai produksi','Kesulitan mengakses bahan baku','Tidak bisa mengakses pendanaan dari luar untuk membiayai produksi','Perlu mengurus rumah tangga','Lainnya'],
                    'show'=>0
                ]);
            ?>

            <?php 
                $this->load->view('template/radio',[
                    'title'=>'A. Profil Usaha',
                    'subtitle'=>'A13. Sudah berapa lama usaha Bapak/Ibu tutup sementara?',
                    'inc'=>++$inc,
                    'question'=>['Kurang dari 2 minggu','Antara 2-4 minggu','Antara 1-2 bulan','Antara 3-6 bulan','Lebih dari 6 bulan'],
                    'show'=>0
                ]);
            ?>

            <?php 
                $this->load->view('template/radio',[
                    'title'=>'A. Profil Usaha',
                    'subtitle'=>'A14. Kapan rencana usaha dibuka kembali?',
                    'inc'=>++$inc,
                    'question'=>['Dalam kurang dari 2 minggu','Dalam 2-4 minggu','Dalam 1-2 bulan dari sekarang','Dalam 3-6 bulan dari sekarang','Lebih dari 6 bulan dari sekarang','Tidak tahu'],
                    'show'=>0
                ]);
            ?>

            <?php 
                $this->load->view('template/radio',[
                    'title'=>'A. Profil Usaha',
                    'subtitle'=>'A15. Berapakah penjualan atau omzet usaha Bapak/Ibu selama satu tahun ke belakang (Juni 2020 - Juni 2021)?',
                    'inc'=>++$inc,
                    'question'=>['Kurang dari Rp 100 juta / tahun ATAU setara kurang dari Rp 300 ribu / hari ATAU Rp 8,3 juta / bulan','Antara dari Rp 100 juta / tahun s.d Rp 300 juta / tahun ATAU setara antara Rp 8,3 juta / bulan s.d Rp 25 juta / bulan','Antara dari Rp 300 juta / tahun s.d Rp 1 miliar / tahun ATAU setara antara Rp 25 juta / bulan s.d Rp 83,3 juta / bulan','Antara Rp 1 s.d 2,5 miliar / tahun','Antara Rp 2,5 s.d 4,8 miliar / tahun','Antara Rp 4,8 miliar / tahun s.d Rp 50 miliar / tahun','Lebih dari Rp 50 miliar / tahun'],
                    'show'=>0
                ]);
            ?>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">A. Profil Usaha</h2>
                        <h1 class="text-xl font-bold">A16. Berapakah jumlah pekerja Bapak/Ibu yang <u>bekerja tetap/penuh waktu</u> (termasuk pemilik/anda sendiri)?</h1>
                        <small>(tidak bisa dikosongkan, jika 0 isi dengan angka 0)</small>
                        <ul class="my-4">
                            <li class="my-2 ml-6 list-disc">
                                <div>
                                    <span class="inline-block w-14">Wanita</span>
                                    <input type="number" min="0" name="q[<?php echo ++$inc ?>][]" id="" placeholder="..." class="w-20 m-1 border-2 border-t-blue px-2 py-1 rounded-lg input__text" data-id="<?php echo $inc ?>">
                                    <span>orang</span>
                                </div>
                            </li>
                            <li class="my-2 ml-6 list-disc">
                                <div>
                                    <span class="inline-block w-14">Pria</span>
                                    <input type="number" min="0" name="q[<?php echo $inc ?>][]" id="" placeholder="..." class="w-20 m-1 border-2 border-t-blue px-2 py-1 rounded-lg input__text" data-id="<?php echo $inc ?>">
                                    <span>orang</span>
                                </div>
                            </li>
                        </ul>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                        <button class="my-6 font-bold bg-white border-2 border-t-blue rounded-lg px-4 py-2 mx-auto block text-t-blue btn__back" data-id="<?php echo $inc ?>">KEMBALI</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">A. Profil Usaha</h2>                        
                        <h1 class="text-xl font-bold">A17. Berapakah jumlah pekerja Bapak/Ibu yang bekerja lepas/paruh waktu?</h1>
                        <small>(tidak bisa dikosongkan, jika 0 isi dengan angka 0)</small>
                        <ul class="my-4">
                            <li class="my-2 ml-6 list-disc">
                                <div>
                                    <span class="inline-block w-14">Wanita</span>
                                    <input type="number" min="0" name="q[<?php echo ++$inc ?>][]" id="" placeholder="..." class="w-20 m-1 border-2 border-t-blue px-2 py-1 rounded-lg input__text" data-id="<?php echo $inc ?>">
                                    <span>orang</span>
                                </div>
                            </li>
                            <li class="my-2 ml-6 list-disc">
                                <div>
                                    <span class="inline-block w-14">Pria</span>
                                    <input type="number" min="0" name="q[<?php echo $inc ?>][]" id="" placeholder="..." class="w-20 m-1 border-2 border-t-blue px-2 py-1 rounded-lg input__text" data-id="<?php echo $inc ?>">
                                    <span>orang</span>
                                </div>
                            </li>
                        </ul>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                        <button class="my-6 font-bold bg-white border-2 border-t-blue rounded-lg px-4 py-2 mx-auto block text-t-blue btn__back" data-id="<?php echo $inc ?>">KEMBALI</button>
                    </div>
                </div>
            </div>
            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">A. Profil Usaha</h2>
                        <h1 class="text-xl font-bold">A18. Berapakah jumlah pekerja Bapak/Ibu yang memiliki disabilitas?</h1>
                        <small>(tidak bisa dikosongkan, jika 0 isi dengan angka 0)</small>
                        <ul class="my-4">
                            <li class="my-2 ml-6 list-disc">
                                <div>
                                    <span class="inline-block w-14">Wanita</span>
                                    <input type="number" min="0" name="q[<?php echo ++$inc ?>][]" id="" placeholder="..." class="w-20 m-1 border-2 border-t-blue px-2 py-1 rounded-lg input__text" data-id="<?php echo $inc ?>">
                                    <span>orang</span>
                                </div>
                            </li>
                            <li class="my-2 ml-6 list-disc">
                                <div>
                                    <span class="inline-block w-14">Pria</span>
                                    <input type="number" min="0" name="q[<?php echo $inc ?>][]" id="" placeholder="..." class="w-20 m-1 border-2 border-t-blue px-2 py-1 rounded-lg input__text" data-id="<?php echo $inc ?>">
                                    <span>orang</span>
                                </div>
                            </li>
                        </ul>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                        <button class="my-6 font-bold bg-white border-2 border-t-blue rounded-lg px-4 py-2 mx-auto block text-t-blue btn__back" data-id="<?php echo $inc ?>">KEMBALI</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">A. Profil Usaha</h2>
                        <h1 class="text-xl font-bold">A19. Sejak Januari 2021 hinga hingga saat ini, berapakah jumlah pekerja Bapak/Ibu yang dirumahkan?</h1>
                        <small>(tidak bisa dikosongkan, jika 0 isi dengan angka 0)</small>
                        <ul class="my-4">
                            <li class="my-2 ml-6 list-disc">
                                <div>
                                    <span>Wanita</span>
                                    <input type="number" min="0" name="q[<?php echo ++$inc ?>][]" placeholder="..." class="w-20 m-1 border-2 border-t-blue px-2 py-1 rounded-lg input__text" data-id="<?php echo $inc ?>">
                                    <span>orang</span>
                                </div>
                                <div>
                                    <span>Dengan disabilitas</span>
                                    <input type="number" min="0" name="q[<?php echo $inc ?>][]" placeholder="..." class="w-20 m-1 border-2 border-t-blue px-2 py-1 rounded-lg input__text"  data-id="<?php echo $inc ?>">
                                    <span>orang</span>
                                </div>
                            </li>
                            <li class="my-2 ml-6 list-disc">
                                <div>
                                    <span>Pria</span>
                                    <input type="number" min="0" name="q[<?php echo $inc ?>][]" placeholder="..." class="w-20 m-1 border-2 border-t-blue px-2 py-1 rounded-lg input__text" data-id="<?php echo $inc ?>">
                                    <span>orang</span>
                                </div>
                                <div>
                                    <span>Dengan disabilitas</span>
                                    <input type="number" min="0" name="q[<?php echo $inc ?>][]" placeholder="..." class="w-20 m-1 border-2 border-t-blue px-2 py-1 rounded-lg input__text" data-id="<?php echo $inc ?>">
                                    <span>orang</span>
                                </div>
                            </li>
                        </ul>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                        <button class="my-6 font-bold bg-white border-2 border-t-blue rounded-lg px-4 py-2 mx-auto block text-t-blue btn__back" data-id="<?php echo $inc ?>">KEMBALI</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">A. Profil Usaha</h2>
                        <h1 class="text-xl font-bold">A20. Apabila Bapak/Ibu harus merumahkan pekerja akibat pandemi, karakteristik pekerja yang mana yang menjadi prioritas utama untuk anda rumahkan:</h1>
                        <small>Urutkan pilihan jawaban dari atas ke bawah, dimana angka 1 menandakan prioritas paling tinggi dan angka 5 menandakan prioritas paling rendah.</small>
                        <div id="sort-a20">
                            <div class="my-4 flex items-center font-bold drag__a20" data-position="1">
                                <select name="q[<?php echo ++$inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__a20">
                                    <option value="" selected hidden></option>
                                    <option value="1-Pekerja Wanita">1</option>
                                    <option value="2-Pekerja Wanita">2</option>
                                    <option value="3-Pekerja Wanita">3</option>
                                    <option value="4-Pekerja Wanita">4</option>
                                    <option value="5-Pekerja Wanita">5</option>
                                </select>
                                Pekerja Wanita
                            </div>
                            <div class="my-4 flex items-center font-bold drag__a20" data-position="2">
                                <select name="q[<?php echo $inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__a20">
                                    <option value="" selected hidden></option>
                                    <option value="1-Pekerja Pria">1</option>
                                    <option value="2-Pekerja Pria">2</option>
                                    <option value="3-Pekerja Pria">3</option>
                                    <option value="4-Pekerja Pria">4</option>
                                    <option value="5-Pekerja Pria">5</option>
                                </select>
                                Pekerja Pria
                            </div>
                            <div class="my-4 flex items-center font-bold drag__a20" data-position="3">
                                <select name="q[<?php echo $inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__a20">
                                    <option value="" selected hidden></option>
                                    <option value="1-Pekerja dengan produktivitas terendah">1</option>
                                    <option value="2-Pekerja dengan produktivitas terendah">2</option>
                                    <option value="3-Pekerja dengan produktivitas terendah">3</option>
                                    <option value="4-Pekerja dengan produktivitas terendah">4</option>
                                    <option value="5-Pekerja dengan produktivitas terendah">5</option>
                                </select>
                                Pekerja dengan produktivitas terendah
                            </div>
                            <div class="my-4 flex items-center font-bold drag__a20" data-position="4">
                                <select name="q[<?php echo $inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__a20">
                                    <option value="" selected hidden></option>
                                    <option value="1-Pekerja yang tidak memiliki tanggungan">1</option>
                                    <option value="2-Pekerja yang tidak memiliki tanggungan">2</option>
                                    <option value="3-Pekerja yang tidak memiliki tanggungan">3</option>
                                    <option value="4-Pekerja yang tidak memiliki tanggungan">4</option>
                                    <option value="5-Pekerja yang tidak memiliki tanggungan">5</option>
                                </select>
                                Pekerja yang tidak memiliki tanggungan
                            </div>
                            <div class="my-4 flex items-center font-bold drag__a20" data-position="5">
                                <select name="q[<?php echo $inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__a20">
                                    <option value="" selected hidden></option>
                                    <option value="1-Pekerja yang tidak memiliki tanggungan">1</option>
                                    <option value="2-Pekerja yang tidak memiliki tanggungan">2</option>
                                    <option value="3-Pekerja yang tidak memiliki tanggungan">3</option>
                                    <option value="4-Pekerja yang tidak memiliki tanggungan">4</option>
                                    <option value="5-Pekerja yang tidak memiliki tanggungan">5</option>
                                </select>
                                Pekerja yang berdomisili jauh dari lokasi usaha anda
                            </div>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__next__a20 btn__form disabled" disabled>SELANJUTNYA</button>
                        <button class="my-6 font-bold bg-white border-2 border-t-blue rounded-lg px-4 py-2 mx-auto block text-t-blue btn__back" data-id="<?php echo $inc ?>">KEMBALI</button>
                    </div>
                </div>
            </div>
            <?php 
                $this->load->view('template/radio',[
                    'title'=>'A. Profil Usaha',
                    'subtitle'=>'A21. Apakah Bapak/Ibu tergabung dalam asosiasi/forum/komunitas usaha tertentu?',
                    'inc'=>++$inc,
                    'question'=>['Ya','Tidak'],
                    'show'=>0
                ]);
            ?>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">A. Profil Usaha</h2>
                        <h1 class="text-xl font-bold">A22. Sebutkan asosiasi/forum/komunitas usaha tempat anda bergabung?</h1>
                        <small>Jika lebih dari satu, pisah dengan tanda koma (,)</small>
                        <div class="my-4">
                            <input type="text" name="q[<?php echo ++$inc ?>]" class="w-full border-2 border-t-blue rounded-lg px-2 py-1 input__text" data-id="<?php echo $inc ?>" placeholder="Silakan isi...">
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                        <button class="my-6 font-bold bg-white border-2 border-t-blue rounded-lg px-4 py-2 mx-auto block text-t-blue btn__back" data-id="<?php echo $inc ?>">KEMBALI</button>
                    </div>
                </div>
            </div>

            <?php 
                $this->load->view('template/radio',[
                    'title'=>'A. Profil Usaha',
                    'subtitle'=>'A23. Apabila saat ini Bapak/Ibu tidak tergabung dalam asosiasi/forum/ komunitas usaha, apakah anda tertarik untuk membentuk/bergabung?',
                    'inc'=>++$inc,
                    'question'=>['Ya','Tidak'],
                    'show'=>0
                ]);
            ?>

            <!-- Part B -->
            <div class="wrap hidden part__divider">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    <div class="content p-6 text-t-blue text-center font-bold">
                        <p class="text-xl md:text-2xl">Keberlangsungan dan Adaptasi Usaha sejak Pandemi COVID-19 dimulai hingga PPKM Darurat Jawa-Bali</p>
                        <br>
                        <p class="text-base md:text-xl">Bagian ini menanyakan kondisi usaha Bapak/Ibu selama periode Pandemi COVID-19 dimulai (Maret 2020) hingga sebelum pelaksanaan PPKM Darurat Jawa Bali (akhir Juni 2021).</p>
                        
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next">SELANJUTNYA</button>
                        <button class="my-6 font-bold bg-white border-2 border-t-blue rounded-lg px-4 py-2 mx-auto block text-t-blue btn__back" data-id="b">KEMBALI</button>
                    </div>
                </div>
            </div>
            
            <?php 
                $this->load->view('template/checkbox',[
                    'title'=>'B. Keberlangsungan dan Adaptasi Usaha sejak Pandemi COVID-19 dimulai hingga PPKM Darurat Jawa-Bali',
                    'subtitle'=>'B1. Sejak pandemi COVID-19 dimulai (Maret 2020) hingga sebelum PPKM Darurat Jawa-Bali, bulan apa saja yang memberikan tantangan paling besar bagi usaha anda?',
                    'inc'=>++$inc,
                    'question'=>['Maret 2020','April 2020','Mei 2020','Juni 2020','Juli 2020','Agustus 2020','September 2020','November 2020','Desember 2020','Januari 2021','Februari 2021','Maret 2021','April 2021','Mei 2021','Juni 2021','Tidak Pernah'],
                    'class'=>'grid grid-cols-2',
                    'show'=>0
                ]);
            ?>

            <?php 
                $this->load->view('template/dropdown',[
                    'title'=>'B. Keberlangsungan dan Adaptasi Usaha sejak Pandemi COVID-19 dimulai hingga PPKM Darurat Jawa-Bali',
                    'subtitle'=>'B2. Menurut Bapak/Ibu, apakah terjadi penurunan kondisi usaha sejak pandemi COVID-19 dimulai (Maret 2020) hingga sebelum PPKM Darurat Jawa-Bali, jika dibandingkan dengan kondisi sebelum pandemi? Jika ya, seberapa besar penurunan yang terjadi?',
                    'inc'=>++$inc,
                    'question_attr'=>'class="font-bold text-t-red"',
                    'question'=>[
                        'Permintaan',
                        'Pendapatan',
                        'Nilai Aset',
                        'Keuntungan',
                    ],
                    'option'=>[
                        'Tidak menurun',
                        'Menurun kurang dari 20%',
                        'Menurun 20-50%',
                        'Menurun lebih dari 50%'
                    ],
                    'show'=>0
                ]);
            ?>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">B. Keberlangsungan dan Adaptasi Usaha Selama Pandemi COVID-19</h2>
                        <h1 class="text-xl font-bold">B3. Sejak pandemi COVID-19 dimulai (Maret 2020) hingga sebelum PPKM Darurat Jawa-Bali, adaptasi usaha apa saja yang telah diterapkan pada bisnis Bapak/Ibu selama pandemi berlangsung?</h1>
                        <small>(bisa lebih dari satu)</small>
                        <div class=" md:grid md:grid-cols-2 md:gap-x-10">
                            <div>
                                <h3 class="text-lg font-bold text-t-red my-4">Terkait pengurangan transmisi virus</h3>
                                <div class="my-4">
                                <div class="my-2 multiple__input">
                                    <label class="flex items-center input__wrap">
                                        <input value="Penggunaan alat pelindung bagi pekerja" type="checkbox" name="q[<?php echo ++$inc ?>][0][]" class="mr-3 hidden input__b3_1" data-id="<?php echo $inc ?>_0">
                                        <span class="input__custom"></span>
                                        Penggunaan alat pelindung bagi pekerja
                                    </label>
                                </div>
                                <div class="my-2 multiple__input">
                                    <label class="flex items-center input__wrap">
                                        <input value="Pengaturan ulang ruang usaha agar bisa mengakomodasi pembatasan kontak fisik" type="checkbox" name="q[<?php echo $inc ?>][0][]" class="mr-3 hidden input__b3_1" data-id="<?php echo $inc ?>_0">
                                        <span class="input__custom"></span>
                                        Pengaturan ulang ruang usaha agar bisa mengakomodasi pembatasan kontak fisik
                                    </label>
                                </div>
                                <div class="my-2 multiple__input">
                                    <label class="flex items-center input__wrap">
                                        <input value="Pengawasan kesehatan dan suhu tubuh pekerja" type="checkbox" name="q[<?php echo $inc ?>][0][]" class="mr-3 hidden input__b3_1" data-id="<?php echo $inc ?>_0">
                                        <span class="input__custom"></span>
                                        Pengawasan kesehatan dan suhu tubuh pekerja
                                    </label>
                                </div>
                                <div class="my-2 multiple__input">
                                    <label class="flex items-center input__wrap">
                                        <input value="Melaksanakan bekerja dari rumah" type="checkbox" name="q[<?php echo $inc ?>][0][]" class="mr-3 hidden input__b3_1" data-id="<?php echo $inc ?>_0">
                                        <span class="input__custom"></span>
                                        Melaksanakan bekerja dari rumah
                                    </label>
                                </div>
                                <div class="my-2 multiple__input">
                                    <label class="flex items-center input__wrap">
                                        <input value="Pembersihan rutin ruang usaha" type="checkbox" name="q[<?php echo $inc ?>][0][]" class="mr-3 hidden input__b3_1" data-id="<?php echo $inc ?>_0">
                                        <span class="input__custom"></span>
                                        Pembersihan rutin ruang usaha
                                    </label>
                                </div>
                                <div class="my-2 multiple__input">
                                    <label class="flex items-center input__wrap">
                                        <input value="Tidak melaksanakan" type="checkbox" name="q[<?php echo $inc ?>][0][]" class="mr-3 hidden input__b3_1" data-id="<?php echo $inc ?>_0">
                                        <span class="input__custom"></span>
                                        Tidak melaksanakan
                                    </label>
                                </div>
                                <div class="my-2 multiple__input">
                                    <label class="flex items-center input__wrap">
                                        <input value="Lainnya" type="checkbox" name="q[<?php echo $inc ?>][0][]" class="mr-3 last hidden input__b3_1 input__b3_1_last" data-id="<?php echo $inc ?>_0">
                                        <span class="input__custom"></span>
                                        Lainnya
                                    </label>
                                    <div class="flex-none">
                                        <input type="text" name="q[<?php echo $inc ?>][0][]" id="" placeholder="..." class="border-2 border-t-blue rounded-lg p-2 ml-6 my-2 w-10/12 lg:w-11/12 input__text input__others input__others__b3_1" data-id="<?php echo $inc ?>_0">
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-t-red my-4">Terkait strategi dan operasional usaha</h3>
                                <div class="my-4">
                                    <div class="my-2 multiple__input">
                                        <label class="flex items-center input__wrap">
                                            <input value="Mengurangi jumlah produksi" type="checkbox" name="q[<?php echo $inc ?>][1][]" class="mr-3 hidden input__b3_2" data-id="<?php echo $inc ?>_1">
                                            <span class="input__custom"></span>
                                            Mengurangi jumlah produksi
                                        </label>
                                    </div>
                                    <div class="my-2 multiple__input">
                                        <label class="flex items-center input__wrap">
                                            <input value="Diversifikasi usaha" type="checkbox" name="q[<?php echo $inc ?>][1][]" class="mr-3 hidden input__b3_2" data-id="<?php echo $inc ?>_1">
                                            <span class="input__custom"></span>
                                            Diversifikasi usaha
                                        </label>
                                    </div>
                                    <div class="my-2 multiple__input">
                                        <label class="flex items-center input__wrap">
                                            <input value="Bergabung ke toko online seperti Shopee/Tokopedia" type="checkbox" name="q[<?php echo $inc ?>][1][]" class="mr-3 hidden input__b3_2" data-id="<?php echo $inc ?>_1">
                                            <span class="input__custom"></span>
                                            Bergabung ke toko online seperti Shopee/Tokopedia
                                        </label>
                                    </div>
                                    <div class="my-2 multiple__input">
                                        <label class="flex items-center input__wrap">
                                            <input value="Modifikasi teknik produksi dan/atau komposisi bahan baku" type="checkbox" name="q[<?php echo $inc ?>][1][]" class="mr-3 hidden input__b3_2" data-id="<?php echo $inc ?>_1">
                                            <span class="input__custom"></span>
                                            Modifikasi teknik produksi dan/atau komposisi bahan baku
                                        </label>
                                    </div>
                                    <div class="my-2 multiple__input">
                                        <label class="flex items-center input__wrap">
                                            <input value="Memberi diskon/hadiah" type="checkbox" name="q[<?php echo $inc ?>][1][]" class="mr-3 hidden input__b3_2" data-id="<?php echo $inc ?>_1">
                                            <span class="input__custom"></span>
                                            Memberi diskon/hadiah
                                        </label>
                                    </div>
                                    <div class="my-2 multiple__input">
                                        <label class="flex items-center input__wrap">
                                            <input value="Menggencarkan promosi pada media online" type="checkbox" name="q[<?php echo $inc ?>][1][]" class="mr-3 hidden input__b3_2" data-id="<?php echo $inc ?>_1">
                                            <span class="input__custom"></span>
                                            Menggencarkan promosi pada media online
                                        </label>
                                    </div>
                                    <div class="my-2 multiple__input">
                                        <label class="flex items-center input__wrap">
                                            <input value="Lainnya" type="checkbox" name="q[<?php echo $inc ?>][1][]" class="mr-3 last hidden input__b3_2 input__b3_2_last" data-id="<?php echo $inc ?>_1">
                                            <span class="input__custom"></span>
                                            Lainnya
                                        </label>
                                        <div class="flex-none">
                                            <input type="text" name="q[<?php echo $inc ?>][1][]" id="" placeholder="..." class="border-2 border-t-blue rounded-lg p-2 ml-6 my-2 w-10/12 lg:w-11/12 input__text input__others input__others__b3_2" data-id="<?php echo $inc ?>_1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-t-red my-4">Terkait keuangan usaha</h3>
                                <div class="my-4">
                                    <div class="my-2 multiple__input">
                                        <label class="flex items-center input__wrap">
                                            <input value="Merumahkan pekerja" type="checkbox" name="q[<?php echo $inc ?>][2][]" class="mr-3 hidden input__b3_3" data-id="<?php echo $inc ?>_2">
                                            <span class="input__custom"></span>
                                            Merumahkan pekerja
                                        </label>
                                    </div>
                                    <div class="my-2 multiple__input">
                                        <label class="flex items-center input__wrap">
                                            <input value="Mengubah status pekerja menjadi pekerja lepas" type="checkbox" name="q[<?php echo $inc ?>][2][]" class="mr-3 hidden input__b3_3" data-id="<?php echo $inc ?>_2">
                                            <span class="input__custom"></span>
                                            Mengubah status pekerja menjadi pekerja lepas
                                        </label>
                                    </div>
                                    <div class="my-2 multiple__input">
                                        <label class="flex items-center input__wrap">
                                            <input value="Mengurangi biaya utilitas" type="checkbox" name="q[<?php echo $inc ?>][2][]" class="mr-3 hidden input__b3_3" data-id="<?php echo $inc ?>_2">
                                            <span class="input__custom"></span>
                                            Mengurangi biaya utilitas
                                        </label>
                                    </div>
                                    <div class="my-2 multiple__input">
                                        <label class="flex items-center input__wrap">
                                            <input value="Mengurangi biaya sewa tanah/bangunan" type="checkbox" name="q[<?php echo $inc ?>][2][]" class="mr-3 hidden input__b3_3" data-id="<?php echo $inc ?>_2">
                                            <span class="input__custom"></span>
                                            Mengurangi biaya sewa tanah/bangunan
                                        </label>
                                    </div>
                                    <div class="my-2 multiple__input">
                                        <label class="flex items-center input__wrap">
                                            <input value="Mengurangi gaji/bonus pekerja" type="checkbox" name="q[<?php echo $inc ?>][2][]" class="mr-3 hidden input__b3_3" data-id="<?php echo $inc ?>_2">
                                            <span class="input__custom"></span>
                                            Mengurangi gaji/bonus pekerja
                                        </label>
                                    </div>
                                    <div class="my-2 multiple__input">
                                        <label class="flex items-center input__wrap">
                                            <input value="Mengurangi fasilitas khusus pekerja berkebutuhan khusus" type="checkbox" name="q[<?php echo $inc ?>][2][]" class="mr-3 hidden input__b3_3" data-id="<?php echo $inc ?>_2">
                                            <span class="input__custom"></span>
                                            Mengurangi fasilitas khusus pekerja berkebutuhan khusus
                                        </label>
                                    </div>
                                    <div class="my-2 multiple__input">
                                        <label class="flex items-center input__wrap">
                                            <input value="Tidak melaksanakan" type="checkbox" name="q[<?php echo $inc ?>][2][]" class="mr-3 hidden input__b3_3" data-id="<?php echo $inc ?>_2">
                                            <span class="input__custom"></span>
                                            Tidak melaksanakan
                                        </label>
                                    </div>
                                    <div class="my-2 multiple__input">
                                        <label class="flex items-center input__wrap">
                                            <input value="Lainnya" type="checkbox" name="q[<?php echo $inc ?>][2][]" class="mr-3 last hidden input__b3_3 input__b3_3_last" data-id="<?php echo $inc ?>_2">
                                            <span class="input__custom"></span>
                                            Lainnya
                                        </label>
                                        <div class="flex-none">
                                            <input type="text" name="q[<?php echo $inc ?>][2][]" id="" placeholder="..." class="border-2 border-t-blue rounded-lg p-2 ml-6 my-2 w-10/12 lg:w-11/12 input__text input__others input__others__b3_3" data-id="<?php echo $inc ?>_2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__next__b3 btn__form disabled" disabled>SELANJUTNYA</button>
                        <button class="my-6 font-bold bg-white border-2 border-t-blue rounded-lg px-4 py-2 mx-auto block text-t-blue btn__back" data-id="<?php echo $inc ?>">KEMBALI</button>
                    </div>
                </div>
            </div>
            <?php 
                $this->load->view('template/radio',[
                    'title'=>'B. Keberlangsungan dan Adaptasi Usaha sejak Pandemi COVID-19 dimulai hingga PPKM Darurat Jawa-Bali',
                    'subtitle'=>'B4. Sejak pandemi COVID-19 dimulai (Maret 2020) hingga sebelum PPKM Darurat Jawa-Bali, apakah Bapak/Ibu meminta/mendapatkan bantuan untuk usaha dari pihak lain selama pandemi?',
                    'inc'=>++$inc,
                    'question'=>[
                        'Ya, dari pemerintah',
                        'Ya, dari selain pemerintah (keluarga, tetangga, teman, asosiasi usaha)',
                        'Ya, dari keduanya',
                        'Tidak sama sekali'
                    ],
                    'show'=>0
                ]);
            ?>

            <?php 
                $this->load->view('template/checkbox',[
                    'class'=>'',
                    'title'=>'B. Keberlangsungan dan Adaptasi Usaha sejak Pandemi COVID-19 dimulai hingga PPKM Darurat Jawa-Bali',
                    'subtitle'=>'B5. Sejak pandemi COVID-19 dimulai (Maret 2020) hingga sebelum PPKM Darurat Jawa-Bali, bantuan keuangan apa yang usaha Bapak/Ibu peroleh dari pemerintah?',
                    'inc'=>++$inc,
                    'question'=>[
                        'Bantuan Produktif Usaha Mikro (BPUM)',
                        'Bantuan Modal bagi Wirausaha Difabel',
                        'Subsidi bunga',
                        'PPh Final UMKM ditanggung pemerintah',
                        'Pembiayaan investasi kepada koperasi melalui Lembaga pengelola dana bergulir KUMKM',
                        'Bantuan penyerapan barang UMKM',
                        'Perpanjangan grace period (masa leluasa) untuk meminjam dari bank',
                        'Tidak menerima',
                        'Lainnya'
                    ],
                    'show'=>0
                ]);
            ?>

            <?php 
                $this->load->view('template/checkbox',[
                    'class'=>'',
                    'title'=>'B. Keberlangsungan dan Adaptasi Usaha sejak Pandemi COVID-19 dimulai hingga PPKM Darurat Jawa-Bali',
                    'subtitle'=>'B6. Sejak pandemi COVID-19 dimulai (Maret 2020) hingga sebelum PPKM Darurat Jawa-Bali, bantuan non-keuangan apa yang usaha Bapak/Ibu peroleh dari pemerintah?',
                    'inc'=>++$inc,
                    'question'=>[
                        'Pelatihan usaha melalui webinar',
                        'Akses terhadap barang input domestik/barang import',
                        'Kemudahan akses ke pasar',
                        'Kemudahan pendistribusian barang',
                        'Tidak menerima',
                        'Lainnya'
                    ],
                    'show'=>0
                ]);
            ?>

            <?php 
                $this->load->view('template/radio',[
                    'title'=>'B. Keberlangsungan dan Adaptasi Usaha sejak Pandemi COVID-19 dimulai hingga PPKM Darurat Jawa-Bali',
                    'subtitle'=>'B7. Sejak pandemi COVID-19 dimulai (Maret 2020) hingga sebelum PPKM Darurat Jawa-Bali, apakah Bapak/Ibu/pekerja usaha merasa tidak Bahagia atau tertekan sehingga mengganggu kegiatan sehari-hari?',
                    'inc'=>++$inc,
                    'question'=>[
                        'Ya',
                        'Tidak',
                    ],
                    'show'=>0
                ]);
            ?>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">B. Keberlangsungan dan Adaptasi Usaha Selama Pandemi COVID-19</h2>
                        <h1 class="text-xl font-bold">B8. Menurut Bapak/Ibu, berapa bulan usaha Bapak/Ibu diperkirakan dapat bertahan dalam kondisi sebelum PPKM Darurat Jawa-Bali?</h1>
                        <div class="my-4">
                            <input type="number" min="0" name="q[<?php echo ++$inc ?>]" placeholder="..." class="border-2 border-t-blue rounded-lg w-20 px-2 py-1 mr-1 input__text" data-id="<?php echo $inc ?>">
                            bulan
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                        <button class="my-6 font-bold bg-white border-2 border-t-blue rounded-lg px-4 py-2 mx-auto block text-t-blue btn__back" data-id="<?php echo $inc ?>">KEMBALI</button>
                    </div>
                </div>
            </div>

            <!-- Part C -->
            <div class="wrap hidden part__divider">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    <div class="content p-6 text-t-blue text-center font-bold">
                        <p class="text-xl md:text-2xl">Keberlangsungan dan Adaptasi Usaha Selama PPKM Darurat Jawa-Bali</p>
                        <br>
                        <p class="text-base md:text-xl">Bagian ini menanyakan kondisi usaha Bapak/Ibu selama periode PPKM Darurat Jawa-Bali yang dimulai pada tanggal 3 Juli 2021 dan diakhiri pada tanggal 20 Juli 2021.</p>
                        
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next">SELANJUTNYA</button>
                        <button class="my-6 font-bold bg-white border-2 border-t-blue rounded-lg px-4 py-2 mx-auto block text-t-blue btn__back" data-id="c">KEMBALI</button>
                    </div>
                </div>
            </div>

            <?php 
                $this->load->view('template/dropdown',[
                    'title'=>'C. Keberlangsungan dan Adaptasi Usaha Selama PPKM Darurat Jawa-Bali',
                    'subtitle'=>'C1. Menurut Bapak/Ibu, apakah terjadi penurunan kondisi usaha selama periode PPKM Darurat Jawa-Bali, jika dibandingkan dengan bulan Juni 2021? Jika ya, seberapa besar penurunan yang terjadi?',
                    'inc'=>++$inc,
                    'question_attr'=>'class="font-bold text-t-red"',
                    'question'=>[
                        'Permintaan',
                        'Pendapatan',
                        'Nilai Aset',
                        'Keuntungan',
                    ],
                    'option'=>[
                        'Tidak menurun',
                        'Menurun kurang dari 20%',
                        'Menurun 20-50%',
                        'Menurun lebih dari 50%'
                    ],
                    'show'=>0
                ]);
            ?>

            <?php 
                $this->load->view('template/radio',[
                    'title'=>'C. Keberlangsungan dan Adaptasi Usaha Selama PPKM Darurat Jawa-Bali',
                    'subtitle'=>'C2. Selama periode PPKM Darurat Jawa-Bali, pilih tantangan operasional yang paling sulit dihadapi oleh usaha Bapak/Ibu sebagai akibat dari pandemi:',
                    'inc'=>++$inc,
                    'question'=>[
                        'Kesulitan memperoleh akses bahan baku dari dalam negeri',
                        'Kesulitan memperolah akses bahan baku dari luar negeri',
                        'Penurunan tingkat penurunan permintaan produk usaha dari dalam negeri',
                        'Penurunan tingkat penurunan permintaan produk usaha dari luar negeri',
                        'Kesulitan menentukan harga produk',
                        'Kesulitan mendistribusikan produk usaha',
                        'Kesulitan memasarkan/mempromosikan produk usaha',
                        'Kesulitan mendapat akses pendanaan usaha',
                        'Tidak ada tantangan usaha',
                        'Lainnya'
                    ],
                    'show'=>0
                ]);
            ?>

            <?php 
                $this->load->view('template/radio',[
                    'title'=>'C. Keberlangsungan dan Adaptasi Usaha Selama PPKM Darurat Jawa-Bali',
                    'subtitle'=>'C3. Selama periode PPKM Darurat Jawa-Bali, pilih tantangan keuangan apa yang paling sulit dihadapi oleh usaha Bapak/Ibu sebagai akibat dari pandemi:',
                    'inc'=>++$inc,
                    'question'=>[
                        'Gaji pekerja, asuransi, BPJS',
                        'Pengeluaran tetap (contoh: biaya sewa)',
                        'Pembayaran utang usaha',
                        'Tidak ada tantangan keuangan',
                        'Lainnya'
                    ],
                    'show'=>0
                ]);
            ?>

            <?php 
                $this->load->view('template/radio',[
                    'title'=>'C. Keberlangsungan dan Adaptasi Usaha Selama PPKM Darurat Jawa-Bali',
                    'subtitle'=>'C4. Selama periode PPKM Darurat Jawa-Bali, apa yang paling membantu usaha Bapak/Ibu agar tetap bertahan atau menjadi lebih baik?',
                    'inc'=>++$inc,
                    'question'=>[
                        'Pemasaran melalui daring/online',
                        'Bantuan dari pemerintah',
                        'Bantuan dari keluarga/rekan/teman',
                        'Bantuan dari komunitas usaha',
                        'Peningkatan jumlah permintaan',
                        'Akses bahan baku yang lebih baik',
                        'Tidak ada yang membantu',
                        'Lainnya'
                    ],
                    'show'=>0
                ]);
            ?>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">C. Keberlangsungan dan Adaptasi Usaha Selama PPKM Darurat Jawa-Bali</h2>
                        <h1 class="text-xl font-bold">C5. Pilih 3 dan urutkan bantuan yang dianggap paling dibutuhkan oleh usaha Bapak/Ibu?</h1>
                        <div id="sort-c5">
                            <div class="my-4 flex items-center drag__c5" data-position="1">
                                <select name="q[<?php echo ++$inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__c5">
                                    <option value="" selected></option>
                                    <option value="1-Penangguhan pajak">1</option>
                                    <option value="2-Penangguhan pajak">2</option>
                                    <option value="3-Penangguhan pajak">3</option>
                                </select>
                                Penangguhan pajak
                            </div>
                            <div class="my-4 flex items-center drag__c5" data-position="2">
                                <select name="q[<?php echo $inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__c5">
                                    <option value="" selected></option>
                                    <option value="1-Pemberian modal kerja/bantuan likuiditas dari pemerintah">1</option>
                                    <option value="2-Pemberian modal kerja/bantuan likuiditas dari pemerintah">2</option>
                                    <option value="3-Pemberian modal kerja/bantuan likuiditas dari pemerintah">3</option>
                                </select>
                                Pemberian modal kerja/bantuan likuiditas dari pemerintah
                            </div>
                            <div class="my-4 flex items-center drag__c5" data-position="3">
                                <select name="q[<?php echo $inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__c5">
                                    <option value="" selected></option>
                                    <option value="1-Subsidi biaya listrik">1</option>
                                    <option value="2-Subsidi biaya listrik">2</option>
                                    <option value="3-Subsidi biaya listrik">3</option>
                                </select>
                                Subsidi biaya listrik
                            </div>
                            <div class="my-4 flex items-center drag__c5" data-position="4">
                                <select name="q[<?php echo $inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__c5">
                                    <option value="" selected></option>
                                    <option value="1-Pelatihan usaha melalui webinar/tatap muka terkait e-commerce dan pemasaran online">1</option>
                                    <option value="2-Pelatihan usaha melalui webinar/tatap muka terkait e-commerce dan pemasaran online">2</option>
                                    <option value="3-Pelatihan usaha melalui webinar/tatap muka terkait e-commerce dan pemasaran online">3</option>
                                </select>
                                Pelatihan usaha melalui webinar/tatap muka terkait e-commerce dan pemasaran online
                            </div>
                            <div class="my-4 flex items-center drag__c5" data-position="5">
                                <select name="q[<?php echo $inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__c5">
                                    <option value="" selected></option>
                                    <option value="1-Akses terhadap barang input domestik/barang impor">1</option>
                                    <option value="2-Akses terhadap barang input domestik/barang impor">2</option>
                                    <option value="3-Akses terhadap barang input domestik/barang impor">3</option>
                                </select>
                                Akses terhadap barang input domestik/barang impor
                            </div>
                            <div class="my-4 flex items-center drag__c5" data-position="6">
                                <select name="q[<?php echo $inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__c5">
                                    <option value="" selected></option>
                                    <option value="1-Kemudahan akses ke pasar">1</option>
                                    <option value="2-Kemudahan akses ke pasar">2</option>
                                    <option value="3-Kemudahan akses ke pasar">3</option>
                                </select>
                                Kemudahan akses ke pasar
                            </div>
                            <div class="my-4 flex items-center drag__c5" data-position="7">
                                <select name="q[<?php echo $inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__c5">
                                    <option value="" selected></option>
                                    <option value="1-Kemudahan pendistribusian barang">1</option>
                                    <option value="2-Kemudahan pendistribusian barang">2</option>
                                    <option value="3-Kemudahan pendistribusian barang">3</option>
                                </select>
                                Kemudahan pendistribusian barang
                            </div>
                            <div class="my-4 flex items-center flex-wrap drag__c5" data-position="8">
                                <select name="q[<?php echo $inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__c5 input__c5__last">
                                    <option value="" selected></option>
                                    <option value="1-Lainnya">1</option>
                                    <option value="2-Lainnya">2</option>
                                    <option value="3-Lainnya">3</option>
                                </select>
                                Lainnya
                                <div class="w-full">
                                    <input type="text" name="q[<?php echo $inc ?>][]" id="" placeholder="..." class="border-2 border-t-blue rounded-lg px-2 py-1 ml-14 my-1 w-4/5 lg:w-11/12 input__text input__others input__others__c5">
                                </div>
                            </div>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__next__c5 btn__form disabled" disabled>SELANJUTNYA</button>
                        <button class="my-6 font-bold bg-white border-2 border-t-blue rounded-lg px-4 py-2 mx-auto block text-t-blue btn__back" data-id="<?php echo $inc ?>">KEMBALI</button>
                    </div>
                </div>
            </div>

            <!-- Part D -->
            <div class="wrap hidden part__divider">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    <div class="content p-6 text-t-blue text-center font-bold">
                        <p class="text-xl md:text-2xl">Usaha Ramah Lingkungan</p>
                        <br>
                        <p class="text-base md:text-xl">Bagian ini menanyakan pendapat dan upaya dari usaha Bapak/Ibu terkait usaha ramah lingkungan.</p>
                        
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next">SELANJUTNYA</button>
                        <button class="my-6 font-bold bg-white border-2 border-t-blue rounded-lg px-4 py-2 mx-auto block text-t-blue btn__back" data-id="d">KEMBALI</button>
                    </div>
                </div>
            </div>

            <?php 
                $this->load->view('template/checkbox',[
                    'class'=>'',
                    'title'=>'D. Usaha Ramah Lingkungan',
                    'subtitle'=>'D1. Mana saja dari hal-hal berikut yang sudah diterapkan pada usaha Bapak/Ibu?',
                    'inc'=>++$inc,
                    'question'=>[
                        'Melaksanakan proses recycle/pengolahan kembali',
                        'Melaksanakan proses reuse/penggunaan kembali',
                        'Mengurangi penggunaan kemasan sekali pakai',
                        'Melakukan efisiensi penggunaan air',
                        'Memilah limbah usaha',
                        'Menggunakan alat produksi (lampu, mesin) yang hemat energi',
                        'Mematikan peralatan usaha (lampu, mesin, komputer) ketika tidak digunakan',
                        'Menggunakan energi terbarukan/ramah lingkungan dalam aktivitas usaha',
                        'Membeli bahan baku yang merupakan hasil recycle atau limbah dari usaha lain',
                        'Membeli bahan baku dari penjual yang lokasinya dekat','Tidak melakukan','Lainnya'
                    ],
                    'show'=>0
                ]);
            ?>

            <?php 
                $this->load->view('template/dropdown',[
                    'title'=>'D. Usaha Ramah Lingkungan',
                    'subtitle'=>'D2. Seberapa setuju Bapak/Ibu dengan pernyataan di bawah ini?',
                    'question_attr'=>'',
                    'inc'=>++$inc,
                    'question'=>[
                        'Pengelolaan lingkungan yang baik merupakan bagian penting dari pengelolaan usaha',
                        'Pelaku usaha memiliki tanggung jawab dalam menggunakan energi secara efisien',
                        'Pelaku usaha memiliki tanggung jawab dalam mengurangi sampah yang mereka produksi',
                        'Melaksanakan praktik ramah lingkungan akan menguntungkan usaha saya di jangka panjang',
                    ],
                    'option'=>[
                        'Sangat Tidak Setuju',
                        'Tidak Setuju',
                        'Setuju',
                        'Sangat Setuju'
                    ],
                    'show'=>0
                ]);
            ?>
                            
            <?php 
                $this->load->view('template/radio',[
                    'title'=>'D. Usaha Ramah Lingkungan',
                    'subtitle'=>'D3. Menurut Bapak/Ibu, apa yang menjadi tantangan dalam melaksanakan praktik ramah lingkungan pada usaha Bapak/Ibu?',
                    'inc'=>++$inc,
                    'question'=>[
                        'Banyak prioritas lain dalam usaha',
                        'Kapasitas terbatas (sumber daya, waktu, dan pemahaman)',
                        'Kurangnya kesadaran akan manfaat dan pentingnya menjaga lingkungan',
                        'Biaya yang tinggi untuk menjalankan praktik ramah lingkungan',
                        'Usaha terlalu kecil untuk memiliki dampak terhadap lingkungan',
                        'Tidak ada tantangan',
                        'Lainnya',
                    ],
                    'show'=>0
                ]);
            ?>

            <?php 
                $this->load->view('template/radio',[
                    'title'=>'D. Usaha Ramah Lingkungan',
                    'subtitle'=>'D4. Menurut Bapak/Ibu, dukungan apa yang paling bermanfaat dalam meningkatkan jumlah usaha yang melakukan praktik ramah lingkungan?',
                    'inc'=>++$inc,
                    'question'=>[
                        'Perluasan informasi melalui media daring',
                        'Lokakarya dari institusi/asosiasi penggerak praktik ramah lingkungan',
                        'Subsidi/kemudahan pajak bagi usaha yang melaksanakan praktik ramah lingkungan',
                        'Pengembangan sertifikasi ramah lingkungan bagi usaha kecil, mikro, dan menengah',
                        'Penyediaan wadah atau lokasi untuk pemilahan dan daur ulang limbah usaha',
                        'Lainnya'
                    ],
                    'show'=>0
                ]);
            ?>

            <!-- Part E -->
            <div class="wrap hidden part__divider">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    <div class="content p-6 text-t-blue text-center font-bold">
                        <p class="text-xl md:text-2xl">Usaha Ramah Perempuan dan Penyandang Disabilitas</p>
                        <br>
                        <p class="text-base md:text-xl">Bagian ini menanyakan pendapat dan upaya dari usaha Bapak/Ibu terkait usaha ramah penyandang disabilitas dan perempuan.</p>
                        
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next">SELANJUTNYA</button>
                        <button class="my-6 font-bold bg-white border-2 border-t-blue rounded-lg px-4 py-2 mx-auto block text-t-blue btn__back" data-id="e">KEMBALI</button>
                    </div>
                </div>
            </div>

            <?php 
                $this->load->view('template/checkbox',[
                    'class'=>'',
                    'title'=>'E. Usaha Ramah Perempuan dan Penyandang Disabilitas',
                    'subtitle'=>'E1. Mana saja dari hal-hal berikut yang sudah diterapkan pada usaha Bapak/Ibu?',
                    'inc'=>++$inc,
                    'question'=>[
                        'Menyediakan toilet ramah penyandang disabilitas',
                        'Menyediakan ramp/jalur khusus pada lokasi usaha untuk mengakomodasi mobilitas penyandang disabilitas',
                        'Menyediakan ruang menyusui',
                        'Memiliki kebijakan untuk secara khusus merekrut penyandang disabilitas',
                        'Memiliki kebijakan untuk secara khusus merekrut perempuan',
                        'Memiliki kebijakan yang mengakomodasi cuti haid/melahirkan',
                        'Memiliki kebijakan yang mengakomodasi jam kerja fleksibel bagi ibu yang memiliki anak',
                        'Tidak melakukan',
                        'Lainnya',
                    ],
                    'show'=>0
                ]);
            ?>

            <?php 
                $this->load->view('template/dropdown',[
                    'title'=>'E. Usaha Ramah Perempuan dan Penyandang Disabilitas',
                    'subtitle'=>'E2. Seberapa setuju Bapak/Ibu dengan pernyataan di bawah ini?',
                    'question_attr'=>'',
                    'inc'=>++$inc,
                    'question'=>[
                        'Pelaku usaha memiliki tanggung jawab dalam melibatkan pekerja perempuan dan penyandang disabilitas dalam kegiatan usaha',
                        'Pelaku usaha memiliki tanggung jawab dalam memberikan perlakuan yang sama bagi pekerja perempuan dan penyandang disabilitas',
                        'Mengakomodasi keperluan perempuan dan penyandang disabilitas akan menguntungkan usaha saya di jangka panjang',
                    ],
                    'option'=>[
                        'Sangat Tidak Setuju',
                        'Tidak Setuju',
                        'Setuju',
                        'Sangat Setuju'
                    ],
                    'show'=>0
                ]);
            ?>

            <?php 
                $this->load->view('template/radio',[
                    'title'=>'E. Usaha Ramah Perempuan dan Penyandang Disabilitas',
                    'subtitle'=>'E3. Menurut Bapak/Ibu, apa yang menjadi tantangan utama dalam melaksanakan praktik ramah perempuan dan penyandang disabilitas pada usaha Bapak/Ibu?',
                    'inc'=>++$inc,
                    'question'=>[
                        'Banyak prioritas lain dalam usaha',
                        'Kapasitas terbatas (sumber daya, waktu, dan pemahaman)',
                        'Kurangnya kesadaran akan pentingnya praktik ramah penyandang disabilitas dan perempuan',
                        'Biaya yang tinggi untuk menjalankan praktik ramah penyandang disabilitas dan perempuan',
                        'Lainnya',
                    ],
                    'show'=>0
                ]);
            ?>

            <?php 
                $this->load->view('template/radio',[
                    'title'=>'E. Usaha Ramah Perempuan dan Penyandang Disabilitas',
                    'subtitle'=>'E4. Menurut Bapak/Ibu, bantuan mana saja di bawah ini yang paling bermanfaat dalam meningkatkan jumlah usaha yang melakukan praktik ramah perempuan dan penyandang disabilitas?',
                    'inc'=>++$inc,
                    'question'=>[
                        'Perluasan informasi melalui media daring',
                        'Lokakarya dari institusi/asosiasi penggerak praktik ramah penyandang disabilitas dan perempuan',
                        'Subsidi/kemudahan pajak bagi usaha yang melaksanakan praktik ramah penyandang disabilitas dan perempuan',
                        'Lainnya',
                    ],
                    'button_class'=>'btn__change--blue',
                    'show'=>0
                ]);
            ?>

            <div class="wrap last--page hidden">
                <div class="min-h-screen min-w-full flex flex-col justify-center text-white text-center">
                    <div class="head__mid absolute w-full flex justify-center items-center">
                        <div class="head__mid--zero">
                            <img src="<?php echo base_url('assets') ?>/images/logo-kemenkopukm.png" alt="">
                        </div>
                        <div class="head__mid--one">
                            <img src="<?php echo base_url('assets') ?>/images/logo-indosat.png?v=2" alt="">
                        </div>
                        <div class="head__mid--two">
                            <img src="<?php echo base_url('assets') ?>/images/logo-undp-w.png" alt="">
                        </div>
                    </div>
                    <div class="md:px-16 lg:px-60">
                        <h1 class="font-bold p-4 text-3xl leading-snug lg:text-5xl lg:leading-relaxed">Terima kasih sudah mengikuti survei ini!</h1>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="<?php echo base_url('assets') ?>/js/jquery-3.5.1.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/js/jquery-ui.min.js"></script>
    <?php $this->load->view('script_view') ?>
</body>
</html>