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
    
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/tailwind.css">
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form id="mainform" action="<?php echo site_url('participant') ?>" name="mainform" method="post">

            <div class="bg blues fixed w-full h-full"></div>

            <div class="head absolute flex justify-between pr-4 pt-6 w-full md:pt-12 md:pr-10 hidden">
                <div class="logo--left">
                    <img src="<?php echo base_url('assets') ?>/images/survey-title.png" alt="">
                </div>
                <div class="logo--right flex justify-between">
                    <div class="logo--indosat">
                        <img src="<?php echo base_url('assets') ?>/images/logo-indosat.png" alt="">
                    </div>
                    <div class="logo--undp">
                        <img src="<?php echo base_url('assets') ?>/images/logo-undp.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="wrap page--first ">
                <div class="min-h-screen min-w-full flex flex-col justify-center text-white text-center">
                    <div class="head__mid absolute w-full flex justify-center items-center">
                        <div class="head__mid--one">
                            <img src="<?php echo base_url('assets') ?>/images/logo-indosat.png" alt="">
                        </div>
                        <div class="head__mid--two">
                            <img src="<?php echo base_url('assets') ?>/images/logo-undp-w.png" alt="">
                        </div>
                    </div>
                    <div class="md:px-16 lg:px-60">
                        <h1 class="font-bold p-4 text-3xl leading-snug lg:text-5xl lg:leading-relaxed">SURVEY LANJUTAN DAMPAK COVID-19 TERHADAP UMKM DI INDONESIA</h1>
                        <br>
                        <button class="bg-t-red p-2 w-24 mx-auto rounded-lg font-bold btn--start lg:w-32 lg:text-xl btn__next btn__change--white">MULAI</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-7 text-center font-bold text-t-blue  md:text-xl">
                        <p>Selamat <?php echo (date('H') < 10?'pagi':(date('H') < 15?'siang':'malam')) ?>, Bapak/Ibu yang kami hormati, Kami dari UNDP Indonesia dan Indosat Oooredoo. Saat ini kami sedang melakukan Survei Lanjutan Dampak COVID-19 Terhadap UMKM di Indonesia. Kami mohon kesediaan Bapak/Ibu untuk menjadi responden dalam survei ini.</p>
                        <br>
                        <p>Survei ini bertujuan untuk melihat dampak pandemi COVID-19 bagi UMKM selama tahun 2021, lebih dari satu tahun setelah pandemi dimulai. Survei ini ingin mengetahui apa strategi dan yang dipilih oleh pelaku usaha UMKM, termasuk pelaku usaha perempuan, pemuda, dan juga yang berkebutuhan khusus dalam memitigasi dampak dari pandemik terhadap usaha mereka, serta adaptasi usaha yang telah dilaksanakan. Survei ini juga ingin mengidentifikasi peluang kontribusi UMKM dalam pemulihan ekonomi yang bersifat ramah lingkungan dan inklusif. Hasil dari survei ini diharapkan dapat memberikan gambaran bagi pemangku kepentingan terkait dalam upaya memitigasi dampak pandemi COVID-19 baik dari sisi ekonomi maupun non-ekonomi bagi pelaku UMKM.</p>
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
                                    <input type="radio" name="q[<?php echo $inc ?>]" value="yes" class="mr-3 hidden radio__pick" data-id="<?php echo $inc ?>" required>
                                    <span class="input__custom"></span>
                                    Ya
                                </label>
                            </div>
                            <div class="my-4">
                                <label class="flex items-center input__wrap">
                                    <input type="radio" name="q[<?php echo $inc ?>]" value="no" class="mr-3 hidden radio__pick" data-id="<?php echo $inc ?>" required>
                                    <span class="input__custom"></span>
                                    Tidak
                                </label>
                            </div>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
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
                                    <input type="radio" name="q[<?php echo ++$inc ?>]" value="yes" class="mr-3 hidden radio__pick" data-id="<?php echo $inc ?>" required>
                                    <span class="input__custom"></span>
                                    Ya
                                </label>
                            </div>
                            <div class="my-4">
                                <label class="flex items-center input__wrap">
                                    <input type="radio" name="q[<?php echo $inc ?>]" value="no" class="mr-3 hidden radio__pick" data-id="<?php echo $inc ?>" required>
                                    <span class="input__custom"></span>
                                    Tidak
                                </label>
                            </div>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
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
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">A. Profil Usaha</h2>
                        <h1 class="text-xl font-bold">A2. Nomor Telepon Pemilik Usaha</h1>
                        <div class="my-4">
                            <input type="number" name="q[<?php echo ++$inc ?>]" id="phone" class="border-2 border-t-blue rounded-lg px-2 py-1 w-full mt-2 input__text" data-id="<?php echo $inc ?>">
                        </div>
                        <small>1,000 responden yang beruntung dan mengisi survei ini dengan lengkap akan mendapatkan pulsa senilai Rp 25,000. Silakan isi nomor telepon Bapak/Ibu jika tertarik mengikuti undian ini. Cukup isi nama apabila tidak bersedia.</small>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form" data-id="<?php echo $inc ?>">SELANJUTNYA</button>
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
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">A. Profil Usaha</h2>
                        <h1 class="text-xl font-bold">A5. Apakah pemilik usaha merupakan penyandang disabilitas?</h1>
                        <div>
                            <div class="my-4">
                                <label class="flex items-center input__wrap">
                                    <input value="Ya" type="radio" name="q[<?php echo ++$inc ?>]" class="mr-3 hidden radio__pick" data-id="<?php echo $inc ?>" >
                                    <span class="input__custom"></span>
                                    Ya
                                </label>
                            </div>
                            <div class="my-4">
                                <label class="flex items-center input__wrap">
                                    <input value="Tidak" type="radio" name="q[<?php echo $inc ?>]" class="mr-3 hidden radio__pick" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Tidak
                                </label>
                            </div>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">A. Profil Usaha</h2>
                        <h1 class="text-xl font-bold">A6. Disabilitas apa yang dimiliki oleh pemilik usaha?</h1>
                        <small>(bisa lebih dari satu)</small>
                        <div class="my-4">
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Kesulitan dalam pengelihatan" type="checkbox" name="q[<?php echo ++$inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Kesulitan dalam pengelihatan
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Kesulitan dalam pendengaran" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Kesulitan dalam pendengaran
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Kesulitan dalam berjalan atau menaiki tangga" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Kesulitan dalam berjalan atau menaiki tangga
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Kesulitan dalam menggunakan atau menggerakan tangan atau jari" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Kesulitan dalam menggunakan atau menggerakan tangan atau jari
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Kesulitan terkait daya ingat atau konsentrasi" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Kesulitan terkait daya ingat atau konsentrasi
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Kesulitan terkait masalah perilaku dan/atau emosi" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Kesulitan terkait masalah perilaku dan/atau emosi
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Kesulitan dalam berbicara dan/atau memahami/berkomunikasi dengan orang lain" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Kesulitan dalam berbicara dan/atau memahami/berkomunikasi dengan orang lain
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Kesulitan dalam merawat diri sendiri (seperti mandi, makan, buang air kecil, buang air besar)" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Kesulitan dalam merawat diri sendiri (seperti mandi, makan, buang air kecil, buang air besar)
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Tidak tahu" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Tidak tahu
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Lainnya" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden last" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Lainnya
                                </label>
                                <div>
                                    <input type="text" name="q[<?php echo $inc ?>][]" id="" placeholder="..." class="border-2 border-t-blue rounded-lg p-2 mt-2 ml-6 w-4/5 lg:w-11/12 disabled input__others" data-id="<?php echo $inc ?>" disabled>
                                </div>
                            </div>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>

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
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">A. Profil Usaha</h2>
                        <h1 class="text-xl font-bold">A9. Jenis Produk Usaha yang dilaksanakan?</h1>
                        <small>(bisa lebih dari satu)</small>
                        <div class="my-4">
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Furnitur" type="checkbox" name="q[<?php echo ++$inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Furnitur
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Kerajinan" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Kerajinan
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Garmen" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Garmen
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Peralatan rumah tangga & peternakan" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Peralatan rumah tangga & peternakan
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Produk kulit (dompet & sepatu)" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Produk kulit (dompet & sepatu)
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Fashion dan aksesoris" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Fashion dan aksesoris
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Makanan dan minuman" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Makanan dan minuman
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Komoditas pertanian dan perkebunan" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Komoditas pertanian dan perkebunan
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Komoditas perikanan dan peternakan" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Komoditas perikanan dan peternakan
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Komponen mesin" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Komponen mesin
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Jasa" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Jasa
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Lainnya, sebutkan jenis produk usaha" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden last" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Lainnya, sebutkan jenis produk usaha
                                </label>
                                <div class="flex-none">
                                    <input type="text" name="q[<?php echo $inc ?>][]" id="" placeholder="..." class="input__others w-10/12 lg:w-11/12 ml-6 my-2 p-2 border-2 border-t-blue rounded-lg" data-id="<?php echo $inc ?>">
                                </div>
                            </div>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">A. Profil Usaha</h2>
                        <h1 class="text-xl font-bold">A10. Sejak pandemi COVID-19 dimulai (Maret 2020), apakah Bapak/Ibu pernah menutup usaha? Jika Ya, pada bulan apa?</h1>
                        <small>(Jawaban boleh lebih dari satu)</small>
                        <div class="my-4 grid grid-cols-2">
                            <?php ++$inc;$a10 = ['Maret 2020','April 2020','Mei 2020','Juni 2020','Juli 2020','Agustus 2020','September 2020','November 2020','Desember 2020','Januari 2021','Februari 2021','Maret 2021','April 2021','Mei 2021','Juni 2021','Tidak Pernah']; ?>
                            <?php foreach ($a10 as $row) { ?>                                
                                <div class="my-2 multiple__input">
                                    <label class="flex items-center input__wrap">
                                        <input value="<?php echo $row ?>" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                        <span class="input__custom"></span>
                                        <?php echo $row ?>
                                    </label>
                                </div>
                            <?php } ?>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>
            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">A. Profil Usaha</h2>
                        <h1 class="text-xl font-bold">A11. Apa status usaha saat ini?</h1>
                        <div class="my-4">
                            <?php ++$inc;$a11 = ['Beroperasi','Beroperasi sebagian','Tutup sementara','Tutup permanen']; ?>
                            <?php foreach ($a11 as $row) { ?>
                            <div class="my-2">
                                <label class="flex items-center input__wrap">
                                    <input value="<?php echo $row ?>" type="radio" name="q[<?php echo $inc ?>]" class="mr-3 hidden radio__pick" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    <?php echo $row ?>
                                </label>
                            </div>
                            <?php } ?>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>
            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue ques12">
                        <h2 class="text-base font-bold text-t-red mb-4">A. Profil Usaha</h2>
                        <h1 class="text-xl font-bold">A12. Apa alasan utama dari penutupan usaha saat ini?</h1>
                        <div class="my-4">
                            <?php ++$inc;$a12 = ['Peraturan Pemerintah','Permintaan yang menurun drastis','Ketidakcukupan uang untuk membiayai produksi','Kesulitan mengakses bahan baku','Tidak bisa mengakses pendanaan dari luar untuk membiayai produksi','Perlu mengurus rumah tangga','Lainnya']; ?>
                            <?php foreach ($a12 as $row) { ?>
                            <div class="my-2">
                                <label class="flex items-center input__wrap">
                                    <input value="<?php echo $row ?>" type="radio" name="q[<?php echo $inc ?>][]" class="mr-3 hidden radio__pick <?php echo $row=='Lainnya'?'last':''?>" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    <?php echo $row ?>
                                </label>
                                <?php if($row=='Lainnya'): ?>
                                    <div class="flex-none">
                                        <input type="text" name="q[<?php echo $inc ?>][]" id="" placeholder="..." class="border-2 border-t-blue rounded-lg p-2 ml-6 my-2 w-10/12 lg:w-11/12 input__text input__others" data-id="<?php echo $inc ?>">
                                    </div>
                                <?php endif ?>
                            </div>
                            <?php } ?>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">A. Profil Usaha</h2>
                        <h1 class="text-xl font-bold">A13. Sudah berapa lama usaha Bapak/Ibu tutup sementara?</h1>
                        <div class="my-4">
                        <?php ++$inc;$a13 = ['Kurang dari 2 minggu','Antara 2-4 minggu','Antara 1-2 bulan','Antara 3-6 bulan','Lebih dari 6 bulan']; ?>
                            <?php foreach ($a13 as $row) { ?>
                            <div class="my-2">
                                <label class="flex items-center input__wrap">
                                    <input value="<?php echo $row ?>" type="radio" name="q[<?php echo $inc ?>]" class="mr-3 hidden radio__pick" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    <?php echo $row ?>
                                </label>
                            </div>
                            <?php } ?>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>
            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">A. Profil Usaha</h2>
                        <h1 class="text-xl font-bold">A14. Kapan rencana usaha dibuka kembali?</h1>
                        <div class="my-4">
                        <?php ++$inc;$a14 = ['Dalam kurang dari 2 minggu','Dalam 2-4 minggu','Dalam 1-2 bulan dari sekarang','Dalam 3-6 bulan dari sekarang','Lebih dari 6 bulan dari sekarang','Tidak tahu']; ?>
                            <?php foreach ($a14 as $row) { ?>
                            <div class="my-2">
                                <label class="flex items-center input__wrap">
                                    <input value="<?php echo $row ?>" type="radio" name="q[<?php echo $inc ?>]" class="mr-3 hidden radio__pick" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    <?php echo $row ?>
                                </label>
                            </div>
                            <?php } ?>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>
            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">A. Profil Usaha</h2>
                        <h1 class="text-xl font-bold">A15. Berapakah penjualan atau omzet usaha Bapak/Ibu selama satu tahun ke belakang (Juni 2020 - Juni 2021)?</h1>
                        <div>
                        <?php ++$inc;$a14 = ['Kurang dari Rp 100 juta / tahun ATAU setara kurang dari Rp 300 ribu / hari ATAU Rp 8,3 juta / bulan','Antara dari Rp 100 juta / tahun s.d Rp 300 juta / tahun ATAU setara antara Rp 8,3 juta / bulan s.d Rp 25 juta / bulan','Antara dari Rp 300 juta / tahun s.d Rp 1 miliar / tahun ATAU setara antara Rp 25 juta / bulan s.d Rp 83,3 juta / bulan','Antara Rp 1 s.d 2,5 miliar / tahun','Antara Rp 2,5 s.d 4,8 miliar / tahun','Antara Rp 4,8 miliar / tahun s.d Rp 50 miliar / tahun','Lebih dari Rp 50 miliar / tahun']; ?>
                            <?php foreach ($a14 as $row) { ?>
                            <div class="my-4">
                                <label class="flex items-center input__wrap">
                                    <input value="<?php echo $row ?>" type="radio" name="q[<?php echo $inc ?>]" class="mr-3 hidden radio__pick" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    <?php echo $row ?>
                                </label>
                            </div>
                            <?php } ?>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>
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
                                    <input type="number" name="q[<?php echo ++$inc ?>][]" id="" placeholder="..." class="w-20 m-1 border-2 border-t-blue px-2 py-1 rounded-lg input__text" data-id="<?php echo $inc ?>">
                                    <span>orang</span>
                                </div>
                            </li>
                            <li class="my-2 ml-6 list-disc">
                                <div>
                                    <span class="inline-block w-14">Pria</span>
                                    <input type="number" name="q[<?php echo $inc ?>][]" id="" placeholder="..." class="w-20 m-1 border-2 border-t-blue px-2 py-1 rounded-lg input__text" data-id="<?php echo $inc ?>">
                                    <span>orang</span>
                                </div>
                            </li>
                        </ul>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
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
                                    <input type="number" name="q[<?php echo ++$inc ?>][]" id="" placeholder="..." class="w-20 m-1 border-2 border-t-blue px-2 py-1 rounded-lg input__text" data-id="<?php echo $inc ?>">
                                    <span>orang</span>
                                </div>
                            </li>
                            <li class="my-2 ml-6 list-disc">
                                <div>
                                    <span class="inline-block w-14">Pria</span>
                                    <input type="number" name="q[<?php echo $inc ?>][]" id="" placeholder="..." class="w-20 m-1 border-2 border-t-blue px-2 py-1 rounded-lg input__text" data-id="<?php echo $inc ?>">
                                    <span>orang</span>
                                </div>
                            </li>
                        </ul>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
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
                                    <input type="number" name="q[<?php echo ++$inc ?>][]" id="" placeholder="..." class="w-20 m-1 border-2 border-t-blue px-2 py-1 rounded-lg input__text" data-id="<?php echo $inc ?>">
                                    <span>orang</span>
                                </div>
                            </li>
                            <li class="my-2 ml-6 list-disc">
                                <div>
                                    <span class="inline-block w-14">Pria</span>
                                    <input type="number" name="q[<?php echo $inc ?>][]" id="" placeholder="..." class="w-20 m-1 border-2 border-t-blue px-2 py-1 rounded-lg input__text" data-id="<?php echo $inc ?>">
                                    <span>orang</span>
                                </div>
                            </li>
                        </ul>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
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
                                    <input type="number" name="q[<?php echo ++$inc ?>][]" placeholder="..." class="w-20 m-1 border-2 border-t-blue px-2 py-1 rounded-lg input__text" data-id="<?php echo $inc ?>">
                                    <span>orang</span>
                                </div>
                                <div>
                                    <span>Dengan disabilitas</span>
                                    <input type="number" name="q[<?php echo $inc ?>][]" placeholder="..." class="w-20 m-1 border-2 border-t-blue px-2 py-1 rounded-lg input__text"  data-id="<?php echo $inc ?>">
                                    <span>orang</span>
                                </div>
                            </li>
                            <li class="my-2 ml-6 list-disc">
                                <div>
                                    <span>Pria</span>
                                    <input type="number" name="q[<?php echo $inc ?>][]" placeholder="..." class="w-20 m-1 border-2 border-t-blue px-2 py-1 rounded-lg input__text" data-id="<?php echo $inc ?>">
                                    <span>orang</span>
                                </div>
                                <div>
                                    <span>Dengan disabilitas</span>
                                    <input type="number" name="q[<?php echo $inc ?>][]" placeholder="..." class="w-20 m-1 border-2 border-t-blue px-2 py-1 rounded-lg input__text" data-id="<?php echo $inc ?>">
                                    <span>orang</span>
                                </div>
                            </li>
                        </ul>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">A. Profil Usaha</h2>
                        <h1 class="text-xl font-bold">A20. Apabila Bapak/Ibu harus merumahkan pekerja akibat pandemi, karakteristik pekerja yang mana yang menjadi prioritas utama untuk anda rumahkan:</h1>
                        <small>Berikan angka 1-5 kepada setiap pilihan jawaban, dimana angka 1 menandakan prioritas paling tinggi dan angka 5 menandakan prioritas paling rendah.</small>
                        <div>
                            <div class="my-4 flex items-center">
                                <select name="q[<?php echo ++$inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__a12">
                                    <option value="" selected hidden></option>
                                    <option value="1-Pekerja Wanita">1</option>
                                    <option value="2-Pekerja Wanita">2</option>
                                    <option value="3-Pekerja Wanita">3</option>
                                    <option value="4-Pekerja Wanita">4</option>
                                    <option value="5-Pekerja Wanita">5</option>
                                </select>
                                Pekerja Wanita
                            </div>
                            <div class="my-4 flex items-center">
                                <select name="q[<?php echo $inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__a12">
                                    <option value="" selected hidden></option>
                                    <option value="1-Pekerja Pria">1</option>
                                    <option value="2-Pekerja Pria">2</option>
                                    <option value="3-Pekerja Pria">3</option>
                                    <option value="4-Pekerja Pria">4</option>
                                    <option value="5-Pekerja Pria">5</option>
                                </select>
                                Pekerja Pria
                            </div>
                            <div class="my-4 flex items-center">
                                <select name="q[<?php echo $inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__a12">
                                    <option value="" selected hidden></option>
                                    <option value="1-Pekerja dengan produktivitas terendah">1</option>
                                    <option value="2-Pekerja dengan produktivitas terendah">2</option>
                                    <option value="3-Pekerja dengan produktivitas terendah">3</option>
                                    <option value="4-Pekerja dengan produktivitas terendah">4</option>
                                    <option value="5-Pekerja dengan produktivitas terendah">5</option>
                                </select>
                                Pekerja dengan produktivitas terendah
                            </div>
                            <div class="my-4 flex items-center">
                                <select name="q[<?php echo $inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__a12">
                                    <option value="" selected hidden></option>
                                    <option value="1-Pekerja yang tidak memiliki tanggungan">1</option>
                                    <option value="2-Pekerja yang tidak memiliki tanggungan">2</option>
                                    <option value="3-Pekerja yang tidak memiliki tanggungan">3</option>
                                    <option value="4-Pekerja yang tidak memiliki tanggungan">4</option>
                                    <option value="5-Pekerja yang tidak memiliki tanggungan">5</option>
                                </select>
                                Pekerja yang tidak memiliki tanggungan
                            </div>
                            <div class="my-4 flex items-center">
                                <select name="q[<?php echo $inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__a12">
                                    <option value="" selected hidden></option>
                                    <option value="1-Pekerja yang berdomisili jauh dari lokasi usaha anda">1</option>
                                    <option value="2-Pekerja yang berdomisili jauh dari lokasi usaha anda">2</option>
                                    <option value="3-Pekerja yang berdomisili jauh dari lokasi usaha anda">3</option>
                                    <option value="4-Pekerja yang berdomisili jauh dari lokasi usaha anda">4</option>
                                    <option value="5-Pekerja yang berdomisili jauh dari lokasi usaha anda">5</option>
                                </select>
                                Pekerja yang berdomisili jauh dari lokasi usaha anda
                            </div>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__next__a12 btn__form disabled" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">A. Profil Usaha</h2>
                        <h1 class="text-xl font-bold">A21. Apakah Bapak/Ibu tergabung dalam asosiasi/forum/komunitas usaha tertentu?</h1>
                        <div>
                            <div class="my-4">
                                <label class="flex items-center input__wrap">
                                    <input value="Ya" type="radio" name="q[<?php echo ++$inc ?>]" class="mr-3 hidden radio__pick" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Ya
                                </label>
                            </div>
                            <div class="my-4">
                                <label class="flex items-center input__wrap">
                                    <input value="Tidak" type="radio" name="q[<?php echo $inc ?>]" class="mr-3 hidden radio__pick" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Tidak
                                </label>
                            </div>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>

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
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">A. Profil Usaha</h2>
                        <h1 class="text-xl font-bold">A23. Apabila saat ini Bapak/Ibu tidak tergabung dalam asosiasi/forum/ komunitas usaha, apakah anda tertarik untuk membentuk/bergabung?</h1>
                        <div>
                            <div class="my-4">
                                <label class="flex items-center input__wrap">
                                    <input value="Ya" type="radio" name="q[<?php echo ++$inc ?>]" class="mr-3 hidden radio__pick" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Ya
                                </label>
                            </div>
                            <div class="my-4">
                                <label class="flex items-center input__wrap">
                                    <input value="Tidak" type="radio" name="q[<?php echo $inc ?>]" class="mr-3 hidden radio__pick" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Tidak
                                </label>
                            </div>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>

            <!-- Part B -->
            <div class="wrap hidden part__divider">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    <div class="content p-6 text-t-blue text-center font-bold">
                        <p class="text-xl md:text-2xl">Keberlangsungan dan Adaptasi Usaha sejak Pandemi COVID-19 dimulai hingga PPKM Darurat Jawa-Bali</p>
                        <br>
                        <p class="text-base md:text-xl">Bagian ini menanyakan kondisi usaha Bapak/Ibu selama periode Pandemi COVID-19 dimulai (Maret 2020) hingga sebelum pelaksanaan PPKM Darurat Jawa Bali (akhir Juni 2021).</p>
                        
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next">SELANJUTNYA</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">B. Keberlangsungan dan Adaptasi Usaha sejak Pandemi COVID-19 dimulai hingga PPKM Darurat Jawa-Bali</h2>
                        <h1 class="text-xl font-bold">B1. Sejak pandemi COVID-19 dimulai (Maret 2020) hingga sebelum PPKM Darurat Jawa-Bali, bulan apa saja yang memberikan tantangan paling besar bagi usaha anda?</h1>
                        <small>(Jawaban boleh lebih dari satu)</small>
                        <div class="my-4 grid grid-cols-2">
                        <?php ++$inc;$b1 = ['Maret 2020','April 2020','Mei 2020','Juni 2020','Juli 2020','Agustus 2020','September 2020','November 2020','Desember 2020','Januari 2021','Februari 2021','Maret 2021','April 2021','Mei 2021','Juni 2021','Tidak Pernah']; ?>
                            <?php foreach ($b1 as $row) { ?>                                
                                <div class="my-2 multiple__input">
                                    <label class="flex items-center input__wrap">
                                        <input value="<?php echo $row ?>" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                        <span class="input__custom"></span>
                                        <?php echo $row ?>
                                    </label>
                                </div>
                            <?php } ?>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">B. Keberlangsungan dan Adaptasi Usaha sejak Pandemi COVID-19 dimulai hingga PPKM Darurat Jawa-Bali</h2>
                        <h1 class="text-xl font-bold">B2. Menurut Bapak/Ibu, apakah terjadi penurunan kondisi usaha sejak pandemi COVID-19 dimulai (Maret 2020) hingga sebelum PPKM Darurat Jawa-Bali, jika dibandingkan dengan kondisi sebelum pandemi? Jika ya, seberapa besar penurunan yang terjadi?</h1>
                        <div>
                            <div class="my-4 flex justify-center items-center flex__dropdown">
                                <p class="font-bold text-t-red">Permintaan</p>
                                <select name="q[<?php echo ++$inc ?>][]" class="border-2 border-t-blue rounded-lg w-full p-2 h-12 input__dropdown" data-id="<?php echo $inc ?>">
                                    <option value="" class="hidden" disabled selected>...</option>
                                    <option value="Tidak menurun">Tidak menurun</option>
                                    <option value="Menurun kurang dari 20%">Menurun kurang dari 20%</option>
                                    <option value="Menurun 20-50%">Menurun 20-50%</option>
                                    <option value="Menurun lebih dari 50%">Menurun lebih dari 50%</option>
                                </select>
                            </div>
                            <div class="my-4 flex justify-center items-center flex__dropdown">
                                <p class="font-bold text-t-red">Pendapatan</p>
                                <select name="q[<?php echo $inc ?>][]" class="border-2 border-t-blue rounded-lg w-full p-2 h-12 input__dropdown" data-id="<?php echo $inc ?>">
                                    <option value="" class="hidden" disabled selected>...</option>
                                    <option value="Tidak menurun">Tidak menurun</option>
                                    <option value="Menurun kurang dari 20%">Menurun kurang dari 20%</option>
                                    <option value="Menurun 20-50%">Menurun 20-50%</option>
                                    <option value="Menurun lebih dari 50%">Menurun lebih dari 50%</option>
                                </select>
                            </div>
                            <div class="my-4 flex justify-center items-center flex__dropdown">
                                <p class="font-bold text-t-red">Nilai Aset</p>
                                <select name="q[<?php echo $inc ?>][]" class="border-2 border-t-blue rounded-lg w-full p-2 h-12 input__dropdown" data-id="<?php echo $inc ?>">
                                    <option value="" class="hidden" disabled selected>...</option>
                                    <option value="Tidak menurun">Tidak menurun</option>
                                    <option value="Menurun kurang dari 20%">Menurun kurang dari 20%</option>
                                    <option value="Menurun 20-50%">Menurun 20-50%</option>
                                    <option value="Menurun lebih dari 50%">Menurun lebih dari 50%</option>
                                </select>
                            </div>
                            <div class="my-4 flex justify-center items-center flex__dropdown">
                                <p class="font-bold text-t-red">Keuntungan</p>
                                <select name="q[<?php echo $inc ?>][]" class="border-2 border-t-blue rounded-lg w-full p-2 h-12 input__dropdown" data-id="<?php echo $inc ?>">
                                    <option value="" class="hidden" disabled selected>...</option>
                                    <option value="Tidak menurun">Tidak menurun</option>
                                    <option value="Menurun kurang dari 20%">Menurun kurang dari 20%</option>
                                    <option value="Menurun 20-50%">Menurun 20-50%</option>
                                    <option value="Menurun lebih dari 50%">Menurun lebih dari 50%</option>
                                </select>
                            </div>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>

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
                    </div>
                </div>
            </div>
            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">B. Keberlangsungan dan Adaptasi Usaha sejak Pandemi COVID-19 dimulai hingga PPKM Darurat Jawa-Bali</h2>
                        <h1 class="text-xl font-bold">B4. Sejak pandemi COVID-19 dimulai (Maret 2020) hingga sebelum PPKM Darurat Jawa-Bali, apakah Bapak/Ibu meminta/mendapatkan bantuan untuk usaha dari pihak lain selama pandemi?</h1>
                        <div class="my-4">
                            <?php ++$inc;$b4 = ['Ya, dari pemerintah','Ya, dari selain pemerintah (keluarga, tetangga, teman, asosiasi usaha)','Ya, dari keduanya','Tidak sama sekali']; ?>
                            <?php foreach ($b4 as $row) { ?>
                            <div class="my-2">
                                <label class="flex items-center input__wrap">
                                    <input value="<?php echo $row ?>" type="radio" name="q[<?php echo $inc ?>]" class="mr-3 hidden radio__pick" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    <?php echo $row ?>
                                </label>
                            </div>
                            <?php } ?>                            
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>
            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">B. Keberlangsungan dan Adaptasi Usaha sejak Pandemi COVID-19 dimulai hingga PPKM Darurat Jawa-Bali</h2>
                        <h1 class="text-xl font-bold">B5. Sejak pandemi COVID-19 dimulai (Maret 2020) hingga sebelum PPKM Darurat Jawa-Bali, bantuan keuangan apa yang usaha Bapak/Ibu peroleh dari pemerintah?</h1>
                        <div class="my-4">
                            <?php ++$inc;$b5 = ['Bantuan Produktif Usaha Mikro (BPUM)','Bantuan Modal bagi Wirausaha Difabel','Subsidi bunga','PPh Final UMKM ditanggung pemerintah','Pembiayaan investasi kepada koperasi melalui Lembaga pengelola dana bergulir KUMKM','Bantuan penyerapan barang UMKM','Perpanjangan grace period (masa leluasa) untuk meminjam dari bank','Tidak menerima','Lainnya']; ?>
                            <?php foreach ($b5 as $row) { ?>                                
                                <div class="my-2 multiple__input">
                                    <label class="flex items-center input__wrap">
                                        <input value="<?php echo $row ?>" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden <?php echo $row=='Lainnya'?'last':''?>" data-id="<?php echo $inc ?>">
                                        <span class="input__custom"></span>
                                        <?php echo $row ?>
                                    </label>
                                    <?php if($row=='Lainnya'): ?>
                                        <div class="flex-none">
                                            <input type="text" name="q[<?php echo $inc ?>][]" id="" placeholder="..." class="border-2 border-t-blue rounded-lg p-2 ml-6 my-2 w-10/12 lg:w-11/12 input__text input__others" data-id="<?php echo $inc ?>">
                                        </div>
                                    <?php endif ?>
                                </div>
                            <?php } ?>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>
            <div class="wrap hiddens">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">B. Keberlangsungan dan Adaptasi Usaha sejak Pandemi COVID-19 dimulai hingga PPKM Darurat Jawa-Bali</h2>
                        <h1 class="text-xl font-bold">B6. Sejak pandemi COVID-19 dimulai (Maret 2020) hingga sebelum PPKM Darurat Jawa-Bali, bantuan non-keuangan apa yang usaha Bapak/Ibu peroleh dari pemerintah?</h1>
                        <div class="my-4">
                        <?php ++$inc;$b6 = ['Pelatihan usaha melalui webinar','Akses terhadap barang input domestik/barang import','Kemudahan akses ke pasar','Kemudahan pendistribusian barang','Tidak menerima','Lainnya']; ?>
                            <?php foreach ($b6 as $row) { ?>                                
                                <div class="my-2 multiple__input">
                                    <label class="flex items-center input__wrap">
                                        <input value="<?php echo $row ?>" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden <?php echo $row=='Lainnya'?'last':''?>" data-id="<?php echo $inc ?>">
                                        <span class="input__custom"></span>
                                        <?php echo $row ?>
                                    </label>
                                    <?php if($row=='Lainnya'): ?>
                                        <div class="flex-none">
                                            <input type="text" name="q[<?php echo $inc ?>][]" id="" placeholder="..." class="border-2 border-t-blue rounded-lg p-2 ml-6 my-2 w-10/12 lg:w-11/12 input__text input__others" data-id="<?php echo $inc ?>">
                                        </div>
                                    <?php endif ?>
                                </div>
                            <?php } ?>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>





            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">B. Keberlangsungan dan Adaptasi Usaha Selama Pandemi COVID-19</h2>
                        <h1 class="text-xl font-bold">B2. Selama enam bulan terakhir, pilih dan urutkan 3 tantangan operasional yang paling sulit dihadapi oleh usaha Bapak/Ibu sebagai akibat dari pandemi?</h1>
                        <div>
                            <div class="my-4 flex items-center">
                                <select name="q[<?php echo ++$inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__b2">
                                    <option value="" selected></option>
                                    <option value="1-Kesulitan memperoleh akses bahan baku dari dalam negeri">1</option>
                                    <option value="2-Kesulitan memperoleh akses bahan baku dari dalam negeri">2</option>
                                    <option value="3-Kesulitan memperoleh akses bahan baku dari dalam negeri">3</option>
                                </select>
                                Kesulitan memperoleh akses bahan baku dari dalam negeri
                            </div>
                            <div class="my-4 flex items-center">
                                <select name="q[<?php echo $inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__b2">
                                    <option value="" selected></option>
                                    <option value="1-Kesulitan memperoleh akses bahan baku dari dalam negeri">1</option>
                                    <option value="2-Kesulitan memperoleh akses bahan baku dari dalam negeri">2</option>
                                    <option value="3-Kesulitan memperoleh akses bahan baku dari dalam negeri">3</option>
                                </select>
                                Kesulitan memperoleh akses bahan baku dari dalam negeri
                            </div>
                            <div class="my-4 flex items-center">
                                <select name="q[<?php echo $inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__b2">
                                    <option value="" selected></option>
                                    <option value="1-Penurunan tingkat penurunan  permintaan produk usaha dari dalam negeri">1</option>
                                    <option value="2-Penurunan tingkat penurunan  permintaan produk usaha dari dalam negeri">2</option>
                                    <option value="3-Penurunan tingkat penurunan  permintaan produk usaha dari dalam negeri">3</option>
                                </select>
                                Penurunan tingkat penurunan  permintaan produk usaha dari dalam negeri
                            </div>
                            <div class="my-4 flex items-center">
                                <select name="q[<?php echo $inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__b2">
                                    <option value="" selected></option>
                                    <option value="1-Penurunan tingkat penurunan  permintaan produk usaha dari luar negeri">1</option>
                                    <option value="2-Penurunan tingkat penurunan  permintaan produk usaha dari luar negeri">2</option>
                                    <option value="3-Penurunan tingkat penurunan  permintaan produk usaha dari luar negeri">3</option>
                                </select>
                                Penurunan tingkat penurunan  permintaan produk usaha dari luar negeri
                            </div>
                            <div class="my-4 flex items-center">
                                <select name="q[<?php echo $inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__b2">
                                    <option value="" selected></option>
                                    <option value="1-Kesulitan menentukan harga produk">1</option>
                                    <option value="2-Kesulitan menentukan harga produk">2</option>
                                    <option value="3-Kesulitan menentukan harga produk">3</option>
                                </select>
                                Kesulitan menentukan harga produk
                            </div>
                            <div class="my-4 flex items-center">
                                <select name="q[<?php echo $inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__b2">
                                    <option value="" selected></option>
                                    <option value="1-Kesulitan mendistribusikan produk usaha">1</option>
                                    <option value="2-Kesulitan mendistribusikan produk usaha">2</option>
                                    <option value="3-Kesulitan mendistribusikan produk usaha">3</option>
                                </select>
                                Kesulitan mendistribusikan produk usaha
                            </div>
                            <div class="my-4 flex items-center">
                                <select name="q[<?php echo $inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__b2">
                                    <option value="" selected></option>
                                    <option value="1-Kesulitan memasarkan / mempromosikan produk usaha">1</option>
                                    <option value="2-Kesulitan memasarkan / mempromosikan produk usaha">2</option>
                                    <option value="3-Kesulitan memasarkan / mempromosikan produk usaha">3</option>
                                </select>
                                Kesulitan memasarkan / mempromosikan produk usaha
                            </div>
                            <div class="my-4 flex items-center">
                                <select name="q[<?php echo $inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__b2">
                                    <option value="" selected></option>
                                    <option value="1-Kesulitan memasarkan / mempromosikan produk usaha">1</option>
                                    <option value="2-Kesulitan memasarkan / mempromosikan produk usaha">2</option>
                                    <option value="3-Kesulitan memasarkan / mempromosikan produk usaha">3</option>
                                </select>
                                Kesulitan memasarkan / mempromosikan produk usaha
                            </div>
                            <div class="my-4 flex items-center">
                                <select name="q[<?php echo $inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__b2">
                                    <option value="" selected></option>
                                    <option value="1-Tidak ada tantangan usaha">1</option>
                                    <option value="2-Tidak ada tantangan usaha">2</option>
                                    <option value="3-Tidak ada tantangan usaha">3</option>
                                </select>
                                Tidak ada tantangan usaha
                            </div>
                            <div class="my-4 flex items-center flex-wrap">
                                <select name="q[<?php echo $inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__b2 input__b2__last">
                                    <option value="" selected></option>
                                    <option value="1-Lainnya">1</option>
                                    <option value="2-Lainnya">2</option>
                                    <option value="3-Lainnya">3</option>
                                </select>
                                Lainnya
                                <div class="w-full">
                                    <input type="text" name="q[<?php echo $inc ?>][]" id="" placeholder="..." class="border-2 border-t-blue rounded-lg px-2 py-1 ml-14 my-1 w-4/5 lg:w-11/12 input__text input__others input__others__b2">
                                </div>
                            </div>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__next__b2 btn__form disabled" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">B. Keberlangsungan dan Adaptasi Usaha Selama Pandemi COVID-19</h2>
                        <h1 class="text-xl font-bold">B3. Selama enam bulan terakhir, tantangan keuangan apa yang dihadapi oleh usaha Bapak/Ibu sebagai akibat dari pandemi?</h1>
                        <small>(bisa lebih dari satu)</small>
                        <div class="my-4">
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Gaji pekerja, asuransi, BPJS" type="checkbox" name="q[<?php echo ++$inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Gaji pekerja, asuransi, BPJS
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Pengeluaran tetap (contoh: biaya sewa)" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Pengeluaran tetap (contoh: biaya sewa)
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Pembayaran utang usaha" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Pembayaran utang usaha
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Pengeluaran lainnya" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Pengeluaran lainnya
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Tidak ada tantangan keuangan" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Tidak ada tantangan keuangan
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Lainnya" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden last" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Lainnya
                                </label>
                                <div class="flex-none">
                                    <input type="text" name="q[<?php echo $inc ?>][]" id="" placeholder="..." class="border-2 border-t-blue rounded-lg p-2 ml-6 my-2 w-10/12 lg:w-11/12 input__text input__others" data-id="<?php echo $inc ?>">
                                </div>
                            </div>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">B. Keberlangsungan dan Adaptasi Usaha Selama Pandemi COVID-19</h2>
                        <h1 class="text-xl font-bold">B4. Selama enam bulan terakhir, apa yang paling membantu usaha Bapak/Ibu agar tetap bertahan atau menjadi lebih baik?</h1>
                        <small>(bisa lebih dari satu)</small>
                        <div class="my-4">
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Pemasaran melalui daring/online" type="checkbox" name="q[<?php echo ++$inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Pemasaran melalui daring/online
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Bantuan dari pemerintah" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Bantuan dari pemerintah
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Bantuan dari keluarga/rekan/teman" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Bantuan dari keluarga/rekan/teman
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Peningkatan jumlah permintaan" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Peningkatan jumlah permintaan
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Akses bahan baku yang lebih baik" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Akses bahan baku yang lebih baik
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Tidak ada yang membantu" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Tidak ada yang membantu
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Lainnya" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden last" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Lainnya
                                </label>
                                <div class="flex-none">
                                    <input type="text" name="q[<?php echo $inc ?>][]" id="" placeholder="..." class="border-2 border-t-blue rounded-lg p-2 ml-6 my-2 w-10/12 lg:w-11/12 input__text input__others" data-id="<?php echo $inc ?>">
                                </div>
                            </div>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">B. Keberlangsungan dan Adaptasi Usaha Selama Pandemi COVID-19</h2>
                        <h1 class="text-xl font-bold">B6. Selama enam bulan terakhir, apakah Bapak/Ibu meminta/mendapatkan bantuan untuk usaha dari pihak lain selama pandemi?</h1>
                        <div class="my-4">
                            <div class="my-2">
                                <label class="flex items-center input__wrap">
                                    <input value="Ya, dari pemerintah" type="radio" name="q[<?php echo ++$inc ?>]" class="mr-3 hidden radio__pick" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Ya, dari pemerintah
                                </label>
                            </div>
                            <div class="my-2">
                                <label class="flex items-center input__wrap">
                                    <input value="Ya, dari selain pemerintah (keluarga, tetangga, teman, asosiasi usaha)" type="radio" name="q[<?php echo $inc ?>]" class="mr-3 hidden radio__pick" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Ya, dari selain pemerintah (keluarga, tetangga, teman, asosiasi usaha)
                                </label>
                            </div>
                            <div class="my-2">
                                <label class="flex items-center input__wrap">
                                    <input value="Ya, dari keduanya" type="radio" name="q[<?php echo $inc ?>]" class="mr-3 hidden radio__pick" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Ya, dari keduanya
                                </label>
                            </div>
                            <div class="my-2">
                                <label class="flex items-center input__wrap">
                                    <input value="Tidak sama sekali" type="radio" name="q[<?php echo $inc ?>]" class="mr-3 hidden radio__pick" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Tidak sama sekali
                                </label>
                            </div>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">B. Keberlangsungan dan Adaptasi Usaha Selama Pandemi COVID-19</h2>
                        <h1 class="text-xl font-bold">B7. Selama enam bulan terakhir, bantuan keuangan apa yang usaha Bapak/Ibu peroleh dari pemerintah?</h1>
                        <div class="my-4">
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Bantuan Produktif Usaha Mikro (BPUM)" type="checkbox" name="q[<?php echo ++$inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Bantuan Produktif Usaha Mikro (BPUM)
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Bantuan Modal bagi Wirausaha Difabel" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Bantuan Modal bagi Wirausaha Difabel
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Subsidi bunga" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Subsidi bunga
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="PPh Final UMKM ditanggung pemerintah" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    PPh Final UMKM ditanggung pemerintah
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Pembiayaan investasi kepada koperasi melalui Lembaga pengelola dana bergulir KUMKM" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Pembiayaan investasi kepada koperasi melalui Lembaga pengelola dana bergulir KUMKM
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Bantuan penyerapan barang UMKM" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Bantuan penyerapan barang UMKM
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Perpanjangan grace period (masa leluasa) untuk meminjam dari bank" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Perpanjangan grace period (masa leluasa) untuk meminjam dari bank
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Tidak menerima" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Tidak menerima
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Lainnya" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden last" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Lainnya
                                </label>
                                <div class="flex-none">
                                    <input type="text" name="q[<?php echo $inc ?>][]" id="" placeholder="..." class="border-2 border-t-blue rounded-lg p-2 mt-2 ml-6 w-4/5 lg:w-11/12 input__text input__others" data-id="<?php echo $inc ?>">
                                </div>
                            </div>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">B. Keberlangsungan dan Adaptasi Usaha Selama Pandemi COVID-19</h2>
                        <h1 class="text-xl font-bold">B8. Selama enam bulan terakhir, bantuan non-keuangan apa yang usaha Bapak/Ibu peroleh dari pemerintah?</h1>
                        <div class="my-4">
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Pelatihan usaha melalui webinar" type="checkbox" name="q[<?php echo ++$inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Pelatihan usaha melalui webinar
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Akses terhadap barang input domestik / barang import" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Akses terhadap barang input domestik / barang import
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Kemudahan akses ke pasar" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Kemudahan akses ke pasar
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Kemudahan pendistribusian barang" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Kemudahan pendistribusian barang
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Tidak menerima" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Tidak menerima
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Lainnya" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 last hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Lainnya
                                </label>
                                <div class="flex-none">
                                    <input type="text" name="q[<?php echo $inc ?>][]" id="" placeholder="..." class="border-2 border-t-blue rounded-lg p-2 mt-2 ml-6 w-4/5 lg:w-11/12 input__text input__others" data-id="<?php echo $inc ?>">
                                </div>
                            </div>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">B. Keberlangsungan dan Adaptasi Usaha Selama Pandemi COVID-19</h2>
                        <h1 class="text-xl font-bold">B9. Pilih 3 dan urutkan bantuan yang dianggap paling dibutuhkan oleh usaha Bapak/Ibu?</h1>
                        <div>
                            <div class="my-4 flex items-center">
                                <select name="q[<?php echo ++$inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__b9">
                                    <option value="" selected></option>
                                    <option value="1-Penangguhan pajak">1</option>
                                    <option value="2-Penangguhan pajak">2</option>
                                    <option value="3-Penangguhan pajak">3</option>
                                </select>
                                Penangguhan pajak
                            </div>
                            <div class="my-4 flex items-center">
                                <select name="q[<?php echo $inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__b9">
                                    <option value="" selected></option>
                                    <option value="1-Pemberian modal kerja/bantuan likuiditas dari pemerintah">1</option>
                                    <option value="2-Pemberian modal kerja/bantuan likuiditas dari pemerintah">2</option>
                                    <option value="3-Pemberian modal kerja/bantuan likuiditas dari pemerintah">3</option>
                                </select>
                                Pemberian modal kerja/bantuan likuiditas dari pemerintah
                            </div>
                            <div class="my-4 flex items-center">
                                <select name="q[<?php echo $inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__b9">
                                    <option value="" selected></option>
                                    <option value="1-Subsidi biaya listrik">1</option>
                                    <option value="2-Subsidi biaya listrik">2</option>
                                    <option value="3-Subsidi biaya listrik">3</option>
                                </select>
                                Subsidi biaya listrik
                            </div>
                            <div class="my-4 flex items-center">
                                <select name="q[<?php echo $inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__b9">
                                    <option value="" selected></option>
                                    <option value="1-Pelatihan usaha melalui webinar/tatap muka terkait e-commerce dan pemasaran online">1</option>
                                    <option value="2-Pelatihan usaha melalui webinar/tatap muka terkait e-commerce dan pemasaran online">2</option>
                                    <option value="3-Pelatihan usaha melalui webinar/tatap muka terkait e-commerce dan pemasaran online">3</option>
                                </select>
                                Pelatihan usaha melalui webinar/tatap muka terkait e-commerce dan pemasaran online
                            </div>
                            <div class="my-4 flex items-center">
                                <select name="q[<?php echo $inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__b9">
                                    <option value="" selected></option>
                                    <option value="1-Akses terhadap barang input domestik/barang impor">1</option>
                                    <option value="2-Akses terhadap barang input domestik/barang impor">2</option>
                                    <option value="3-Akses terhadap barang input domestik/barang impor">3</option>
                                </select>
                                Akses terhadap barang input domestik/barang impor
                            </div>
                            <div class="my-4 flex items-center">
                                <select name="q[<?php echo $inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__b9">
                                    <option value="" selected></option>
                                    <option value="1-Kemudahan akses ke pasar">1</option>
                                    <option value="2-Kemudahan akses ke pasar">2</option>
                                    <option value="3-Kemudahan akses ke pasar">3</option>
                                </select>
                                Kemudahan akses ke pasar
                            </div>
                            <div class="my-4 flex items-center">
                                <select name="q[<?php echo $inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__b9">
                                    <option value="" selected></option>
                                    <option value="1-Kemudahan pendistribusian barang">1</option>
                                    <option value="2-Kemudahan pendistribusian barang">2</option>
                                    <option value="3-Kemudahan pendistribusian barang">3</option>
                                </select>
                                Kemudahan pendistribusian barang
                            </div>
                            <div class="my-4 flex items-center flex-wrap">
                                <select name="q[<?php echo $inc ?>][]" class="h-9 px-2 py-1 mr-2 border-2 border-t-blue rounded-lg input__dropdown input__b9 input__b9__last">
                                    <option value="" selected></option>
                                    <option value="1-Lainnya">1</option>
                                    <option value="2-Lainnya">2</option>
                                    <option value="3-Lainnya">3</option>
                                </select>
                                Lainnya
                                <div class="w-full">
                                    <input type="text" name="q[<?php echo $inc ?>][]" id="" placeholder="..." class="border-2 border-t-blue rounded-lg px-2 py-1 ml-14 my-1 w-4/5 lg:w-11/12 input__text input__others input__others__b9">
                                </div>
                            </div>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__next__b9 btn__form disabled" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">B. Keberlangsungan dan Adaptasi Usaha Selama Pandemi COVID-19</h2>
                        <h1 class="text-xl font-bold">B10. Apakah Bapak/Ibu berencana untuk menutup usaha saat ini?</h1>
                        <div class="my-4">
                            <div class="my-2">
                                <label class="flex items-center input__wrap">
                                    <input value="Ya, dan tidak membuka usaha lain" type="radio" name="q[<?php echo ++$inc ?>]" class="mr-3 hidden radio__pick" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Ya, dan tidak membuka usaha lain
                                </label>
                            </div>
                            <div class="my-2">
                                <label class="flex items-center input__wrap">
                                    <input value="Ya, dan membuka usaha lain" type="radio" name="q[<?php echo $inc ?>]" class="mr-3 hidden radio__pick" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Ya, dan membuka usaha lain
                                </label>
                            </div>
                            <div class="my-2">
                                <label class="flex items-center input__wrap">
                                    <input value="Tidak" type="radio" name="q[<?php echo $inc ?>]" class="mr-3 hidden radio__pick" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Tidak
                                </label>
                            </div>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">B. Keberlangsungan dan Adaptasi Usaha Selama Pandemi COVID-19</h2>
                        <h1 class="text-xl font-bold">B11. Menurut Bapak/Ibu, berapa bulan usaha Bapak/Ibu diperkirakan dapat bertahan dalam kondisi seperti 6 bulan terakhir?</h1>
                        <div class="my-4">
                            <input type="number" name="q[<?php echo ++$inc ?>]" placeholder="..." class="border-2 border-t-blue rounded-lg w-20 px-2 py-1 mr-1 input__text" data-id="<?php echo $inc ?>">
                            bulan
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">C. Usaha Ramah Lingkungan</h2>
                        <h1 class="text-xl font-bold">C1. Mana saja dari hal-hal berikut yang sudah diterapkan pada usaha?</h1>
                        <small>(bisa lebih dari satu)</small>
                        <div class="my-4">
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Menggunakan energi terbarukan/ramah lingkungan dalam aktivitas usaha" type="checkbox" name="q[<?php echo ++$inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Menggunakan energi terbarukan/ramah lingkungan dalam aktivitas usaha
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Melaksanakan proses recycle/pengolahan kembali" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Melaksanakan proses recycle/pengolahan kembali
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Melaksanakan proses reuse/penggunaan kembali" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Melaksanakan proses reuse/penggunaan kembali
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Melakukan efisiensi penggunaan air" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Melakukan efisiensi penggunaan air
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Memilah limbah usaha" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Memilah limbah usaha
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Menggunakan alat produksi (lampu, mesin) yang rendah energi" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Menggunakan alat produksi (lampu, mesin) yang rendah energi
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Membeli bahan baku dari penjual yang lokasinya dekat" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Membeli bahan baku dari penjual yang lokasinya dekat
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Mengurangi penggunaan kemasan sekali pakai" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Mengurangi penggunaan kemasan sekali pakai
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Membeli bahan baku yang merupakan hasil recycle atau limbah dari usaha lain" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Membeli bahan baku yang merupakan hasil recycle atau limbah dari usaha lain
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Mematikan peralatan usaha (lampu, mesin, komputer) ketika tidak digunakan" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Mematikan peralatan usaha (lampu, mesin, komputer) ketika tidak digunakan
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Tidak melakukan" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Tidak melakukan
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Lainnya" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 last hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Lainnya
                                </label>
                                <div class="flex-none">
                                    <input type="text" name="q[<?php echo $inc ?>][]" id="" placeholder="..." class="border-2 border-t-blue rounded-lg p-2 mt-2 ml-6 w-4/5  lg:w-11/12 input__text input__others" data-id="<?php echo $inc ?>">
                                </div>
                            </div>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">C. Usaha Ramah Lingkungan</h2>
                        <h1 class="text-xl font-bold">C2. Seberapa setuju Bapak/Ibu dengan pernyataan di bawah ini?</h1>
                        <div>
                            <div class="my-4 flex justify-center items-center flex__dropdown">
                                <p>Pelaku usaha memiliki tanggung jawab dalam melindungi lingkungan</p>
                                <select name="q[<?php echo ++$inc ?>][]" class="border-2 border-t-blue rounded-lg w-full p-2 h-12 input__dropdown" data-id="<?php echo $inc ?>">
                                    <option value="" class="hidden" disabled selected>...</option>
                                    <option value="Sangat Tidak Setuju">Sangat Tidak Setuju</option>
                                    <option value="Tidak Setuju">Tidak Setuju</option>
                                    <option value="Setuju">Setuju</option>
                                    <option value="Sangat Setuju">Sangat Setuju</option>
                                </select>
                            </div>
                            <div class="my-4 flex justify-center items-center flex__dropdown">
                                <p>Pengelolaan lingkungan yang baik merupakan bagian penting dari pengelolaan usaha</p>
                                <select name="q[<?php echo $inc ?>][]" class="border-2 border-t-blue rounded-lg w-full p-2 h-12 input__dropdown" data-id="<?php echo $inc ?>">
                                    <option value="" class="hidden" disabled selected>...</option>
                                    <option value="Sangat Tidak Setuju">Sangat Tidak Setuju</option>
                                    <option value="Tidak Setuju">Tidak Setuju</option>
                                    <option value="Setuju">Setuju</option>
                                    <option value="Sangat Setuju">Sangat Setuju</option>
                                </select>
                            </div>
                            <div class="my-4 flex justify-center items-center flex__dropdown">
                                <p>Efisiensi energi adalah tidak penting</p>
                                <select name="q[<?php echo $inc ?>][]" class="border-2 border-t-blue rounded-lg w-full p-2 h-12 input__dropdown" data-id="<?php echo $inc ?>">
                                    <option value="" class="hidden" disabled selected>...</option>
                                    <option value="Sangat Tidak Setuju">Sangat Tidak Setuju</option>
                                    <option value="Tidak Setuju">Tidak Setuju</option>
                                    <option value="Setuju">Setuju</option>
                                    <option value="Sangat Setuju">Sangat Setuju</option>
                                </select>
                            </div>
                            <div class="my-4 flex justify-center items-center flex__dropdown">
                                <p>Pelaku usaha memiliki tanggung jawab dalam menggunakan energi secara efisien</p>
                                <select name="q[<?php echo $inc ?>][]" class="border-2 border-t-blue rounded-lg w-full p-2 h-12 input__dropdown" data-id="<?php echo $inc ?>">
                                    <option value="" class="hidden" disabled selected>...</option>
                                    <option value="Sangat Tidak Setuju">Sangat Tidak Setuju</option>
                                    <option value="Tidak Setuju">Tidak Setuju</option>
                                    <option value="Setuju">Setuju</option>
                                    <option value="Sangat Setuju">Sangat Setuju</option>
                                </select>
                            </div>
                            <div class="my-4 flex justify-center items-center flex__dropdown">
                                <p>Pelaku usaha memiliki tanggung jawab dalam mengurangi sampah yang mereka produksi</p>
                                <select name="q[<?php echo $inc ?>][]" class="border-2 border-t-blue rounded-lg w-full p-2 h-12 input__dropdown" data-id="<?php echo $inc ?>">
                                    <option value="" class="hidden" disabled selected>...</option>
                                    <option value="Sangat Tidak Setuju">Sangat Tidak Setuju</option>
                                    <option value="Tidak Setuju">Tidak Setuju</option>
                                    <option value="Setuju">Setuju</option>
                                    <option value="Sangat Setuju">Sangat Setuju</option>
                                </select>
                            </div>
                            <div class="my-4 flex justify-center items-center flex__dropdown">
                                <p>Pengurangan produksi sampah penting untuk alasan lingkungan</p>
                                <select name="q[<?php echo $inc ?>][]" class="border-2 border-t-blue rounded-lg w-full p-2 h-12 input__dropdown" data-id="<?php echo $inc ?>">
                                    <option value="" class="hidden" disabled selected>...</option>
                                    <option value="Sangat Tidak Setuju">Sangat Tidak Setuju</option>
                                    <option value="Tidak Setuju">Tidak Setuju</option>
                                    <option value="Setuju">Setuju</option>
                                    <option value="Sangat Setuju">Sangat Setuju</option>
                                </select>
                            </div>
                            <div class="my-4 flex justify-center items-center flex__dropdown">
                                <p>Pengurangan produksi sampah adalah tidak penting</p>
                                <select name="q[<?php echo $inc ?>][]" class="border-2 border-t-blue rounded-lg w-full p-2 h-12 input__dropdown" data-id="<?php echo $inc ?>">
                                    <option value="" class="hidden" disabled selected>...</option>
                                    <option value="Sangat Tidak Setuju">Sangat Tidak Setuju</option>
                                    <option value="Tidak Setuju">Tidak Setuju</option>
                                    <option value="Setuju">Setuju</option>
                                    <option value="Sangat Setuju">Sangat Setuju</option>
                                </select>
                            </div>
                            <div class="my-4 flex justify-center items-center flex__dropdown">
                                <p>Melaksanakan praktik ramah lingkungan akan menguntungkan usaha saya di jangka panjang</p>
                                <select name="q[<?php echo $inc ?>][]" class="border-2 border-t-blue rounded-lg w-full p-2 h-12 input__dropdown" data-id="<?php echo $inc ?>">
                                    <option value="" class="hidden" disabled selected>...</option>
                                    <option value="Sangat Tidak Setuju">Sangat Tidak Setuju</option>
                                    <option value="Tidak Setuju">Tidak Setuju</option>
                                    <option value="Setuju">Setuju</option>
                                    <option value="Sangat Setuju">Sangat Setuju</option>
                                </select>
                            </div>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">C. Usaha Ramah Lingkungan</h2>
                        <h1 class="text-xl font-bold">C3. Menurut Bapak/Ibu, apa yang menjadi tantangan dalam melaksanakan praktik ramah lingkungan pada usaha Bapak/Ibu?</h1>
                        <small>(bisa lebih dari satu)</small>
                        <div class="my-4">
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Banyak prioritas lain dalam usaha" type="checkbox" name="q[<?php echo ++$inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Banyak prioritas lain dalam usaha
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Kapasitas terbatas (sumber daya, waktu, dan pemahaman)" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Kapasitas terbatas (sumber daya, waktu, dan pemahaman)
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Kurangnya kesadaran akan manfaat dan pentingnya menjaga lingkungan" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Kurangnya kesadaran akan manfaat dan pentingnya menjaga lingkungan
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Biaya yang tinggi untuk menjalankan praktik ramah lingkungan" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Biaya yang tinggi untuk menjalankan praktik ramah lingkungan
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Usaha terlalu kecil untuk memiliki dampak terhadap lingkungan" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Usaha terlalu kecil untuk memiliki dampak terhadap lingkungan
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Tidak ada tantangan" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Tidak ada tantangan
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Lainnya" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 last hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Lainnya
                                </label>
                                <div class="flex-none">
                                    <input type="text" name="q[<?php echo $inc ?>][]" id="" placeholder="..." class="border-2 border-t-blue rounded-lg p-2 mt-2 ml-6 w-4/5  lg:w-11/12 input__text input__others" data-id="<?php echo $inc ?>">
                                </div>
                            </div>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">C. Usaha Ramah Lingkungan</h2>
                        <h1 class="text-xl font-bold">C4. Menurut Bapak/Ibu, bantuan mana saja di bawah ini yang bermanfaat dalam meningkatkan usaha yang melakukan praktik ramah lingkungan?</h1>
                        <div class="my-4">
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Perluasan informasi melalui media daring" type="checkbox" name="q[<?php echo ++$inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Perluasan informasi melalui media daring
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Lokakarya dari institusi/asosiasi penggerak praktik ramah lingkungan" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Lokakarya dari institusi/asosiasi penggerak praktik ramah lingkungan
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Subsidi/kemudahan pajak bagi usaha yang melaksanakan praktik ramah lingkungan" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Subsidi/kemudahan pajak bagi usaha yang melaksanakan praktik ramah lingkungan
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Pengembangan sertifikasi ramah lingkungan bagi usaha kecil, mikro, dan menengah" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Pengembangan sertifikasi ramah lingkungan bagi usaha kecil, mikro, dan menengah
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Penyediaan wadah atau lokasi untuk pemilahan dan daur ulang limbah usaha" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Penyediaan wadah atau lokasi untuk pemilahan dan daur ulang limbah usaha
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Lainnya" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 last hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Lainnya
                                </label>
                                <div>
                                    <input type="text" name="q[<?php echo $inc ?>][]" id="" placeholder="..." class="border-2 border-t-blue rounded-lg p-2 mt-2 ml-6 w-4/5 lg:w-11/12 input__text input__others" data-id="<?php echo $inc ?>">
                                </div>
                            </div>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">D. Usaha Ramah Penyandang Disabilitas dan Perempuan</h2>
                        <h1 class="text-xl font-bold">D1. Mana saja dari hal-hal berikut yang sudah diterapkan pada usaha Bapak/Ibu?</h1>
                        <small>(bisa lebih dari satu)</small>
                        <div class="my-4">
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Menyediakan toilet ramah penyandang disabilitas" type="checkbox" name="q[<?php echo ++$inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Menyediakan toilet ramah penyandang disabilitas
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Menyediakan ramp/jalur khusus pada lokasi usaha untuk mengakomodasi mobilitas penyandang disabilitas" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Menyediakan ramp/jalur khusus pada lokasi usaha untuk mengakomodasi mobilitas penyandang disabilitas
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Menyediakan ruang menyusui" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Menyediakan ruang menyusui
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Memiliki kebijakan untuk secara khusus merekrut penyandang disabilitas" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Memiliki kebijakan untuk secara khusus merekrut penyandang disabilitas
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Memiliki kebijakan yang mengakomodasi cuti haid/melahirkan" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Memiliki kebijakan yang mengakomodasi cuti haid/melahirkan
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Memiliki kebijakan yang mengakomodasi jam kerja fleksibel bagi ibu yang memiliki anak" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Memiliki kebijakan yang mengakomodasi jam kerja fleksibel bagi ibu yang memiliki anak
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Tidak melakukan" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Tidak melakukan
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Lainnya" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 last hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Lainnya
                                </label>
                                <div class="flex-none">
                                    <input type="text" name="q[<?php echo $inc ?>][]" id="" placeholder="..." class="border-2 border-t-blue rounded-lg p-2 mt-2 ml-6 w-4/5  lg:w-11/12 input__text input__others" data-id="<?php echo $inc ?>">
                                </div>
                            </div>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">D. Usaha Ramah Penyandang Disabilitas dan Perempuan</h2>
                        <h1 class="text-xl font-bold">D2. Seberapa setuju Bapak/Ibu dengan pernyataan di bawah ini?</h1>
                        <div>
                            <div class="my-4 flex justify-center items-center flex__dropdown">
                                <p>Pelaku usaha memiliki tanggung jawab dalam melibatkan pekerja perempuan dan penyandang disabilitas dalam kegiatan usaha</p>
                                <select name="q[<?php echo ++$inc ?>][]" class="border-2 border-t-blue rounded-lg w-full p-2 h-12 input__dropdown" data-id="<?php echo $inc ?>">
                                    <option value="" class="hidden" disabled selected>...</option>
                                    <option value="Sangat Tidak Setuju">Sangat Tidak Setuju</option>
                                    <option value="Tidak Setuju">Tidak Setuju</option>
                                    <option value="Setuju">Setuju</option>
                                    <option value="Sangat Setuju">Sangat Setuju</option>
                                </select>
                            </div>
                            <div class="my-4 flex justify-center items-center flex__dropdown">
                                <p>Pengikutsertaan pekerja perempuan dan penyandang disabilitas dalam kegiatan usaha tidak penting</p>
                                <select name="q[<?php echo $inc ?>][]" class="border-2 border-t-blue rounded-lg w-full p-2 h-12 input__dropdown" data-id="<?php echo $inc ?>">
                                    <option value="" class="hidden" disabled selected>...</option>
                                    <option value="Sangat Tidak Setuju">Sangat Tidak Setuju</option>
                                    <option value="Tidak Setuju">Tidak Setuju</option>
                                    <option value="Setuju">Setuju</option>
                                    <option value="Sangat Setuju">Sangat Setuju</option>
                                </select>
                            </div>
                            <div class="my-4 flex justify-center items-center flex__dropdown">
                                <p>Pelaku usaha memiliki tanggung jawab dalam memberikan perlakuan yang sama bagi pekerja perempuan dan penyandang disabilitas</p>
                                <select name="q[<?php echo $inc ?>][]" class="border-2 border-t-blue rounded-lg w-full p-2 h-12 input__dropdown" data-id="<?php echo $inc ?>">
                                    <option value="" class="hidden" disabled selected>...</option>
                                    <option value="Sangat Tidak Setuju">Sangat Tidak Setuju</option>
                                    <option value="Tidak Setuju">Tidak Setuju</option>
                                    <option value="Setuju">Setuju</option>
                                    <option value="Sangat Setuju">Sangat Setuju</option>
                                </select>
                            </div>
                            <div class="my-4 flex justify-center items-center flex__dropdown">
                                <p>Pelibatan perempuan dan penyandang disabilitas dalam kegiatan usaha penting untuk alasan sosial</p>
                                <select name="q[<?php echo $inc ?>][]" class="border-2 border-t-blue rounded-lg w-full p-2 h-12 input__dropdown" data-id="<?php echo $inc ?>">
                                    <option value="" class="hidden" disabled selected>...</option>
                                    <option value="Sangat Tidak Setuju">Sangat Tidak Setuju</option>
                                    <option value="Tidak Setuju">Tidak Setuju</option>
                                    <option value="Setuju">Setuju</option>
                                    <option value="Sangat Setuju">Sangat Setuju</option>
                                </select>
                            </div>
                            <div class="my-4 flex justify-center items-center flex__dropdown">
                                <p>Mengakomodasi keperluan penyandang disabilitas dan perempuan akan menguntungkan usaha saya di jangka panjang</p>
                                <select name="q[<?php echo $inc ?>][]" class="border-2 border-t-blue rounded-lg w-full p-2 h-12 input__dropdown" data-id="<?php echo $inc ?>">
                                    <option value="" class="hidden" disabled selected>...</option>
                                    <option value="Sangat Tidak Setuju">Sangat Tidak Setuju</option>
                                    <option value="Tidak Setuju">Tidak Setuju</option>
                                    <option value="Setuju">Setuju</option>
                                    <option value="Sangat Setuju">Sangat Setuju</option>
                                </select>
                            </div>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">D. Usaha Ramah Penyandang Disabilitas dan Perempuan</h2>
                        <h1 class="text-xl font-bold">D3. Menurut Bapak/Ibu, apa yang menjadi tantangan dalam melaksanakan praktik ramah penyandang disabilitas dan perempuan pada usaha Bapak/Ibu?</h1>
                        <small>(bisa lebih dari satu)</small>
                        <div class="my-4">
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Banyak prioritas lain dalam usaha" type="checkbox" name="q[<?php echo ++$inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Banyak prioritas lain dalam usaha
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Kapasitas terbatas (sumber daya, waktu, dan pemahaman)" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Kapasitas terbatas (sumber daya, waktu, dan pemahaman)
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Kurangnya kesadaran akan pentingnya praktik ramah penyandang disabilitas dan perempuan" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Kurangnya kesadaran akan pentingnya praktik ramah penyandang disabilitas dan perempuan
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Biaya yang tinggi untuk menjalankan praktik ramah penyandang disabilitas dan perempuan" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Biaya yang tinggi untuk menjalankan praktik ramah penyandang disabilitas dan perempuan
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Lainnya" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 last hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Lainnya
                                </label>
                                <div class="flex-none">
                                    <input type="text" name="q[<?php echo $inc ?>][]" id="" placeholder="..." class="border-2 border-t-blue rounded-lg p-2 mt-2 ml-6 w-4/5 lg:w-11/12 input__text input__others" data-id="<?php echo $inc ?>">
                                </div>
                            </div>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__form disabled" data-id="<?php echo $inc ?>" disabled>SELANJUTNYA</button>
                    </div>
                </div>
            </div>

            <div class="wrap hidden">
                <div class="min-h-screen min-w-full pt-24 md:pt-36">
                    
                    <div class="content p-6 text-t-blue">
                        <h2 class="text-base font-bold text-t-red mb-4">D. Usaha Ramah Penyandang Disabilitas dan Perempuan</h2>
                        <h1 class="text-xl font-bold">D4. Menurut Bapak/Ibu, bantuan mana saja di bawah ini yang bermanfaat dalam meningkatkan jumlah usaha yang melakukan praktik ramah penyandang disabilitas dan perempuan?</h1>
                        <div class="my-4">
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Perluasan informasi melalui media daring" type="checkbox" name="q[<?php echo ++$inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Perluasan informasi melalui media daring
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Lokakarya dari institusi/asosiasi penggerak praktik ramah penyandang disabilitas dan perempuan" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Lokakarya dari institusi/asosiasi penggerak praktik ramah penyandang disabilitas dan perempuan
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Subsidi/kemudahan pajak bagi usaha yang melaksanakan praktik ramah penyandang disabilitas dan perempuan" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Subsidi/kemudahan pajak bagi usaha yang melaksanakan praktik ramah penyandang disabilitas dan perempuan
                                </label>
                            </div>
                            <div class="my-2 multiple__input">
                                <label class="flex items-center input__wrap">
                                    <input value="Lainnya" type="checkbox" name="q[<?php echo $inc ?>][]" class="mr-3 last hidden" data-id="<?php echo $inc ?>">
                                    <span class="input__custom"></span>
                                    Lainnya
                                </label>
                                <div class="flex-none">
                                    <input type="text" name="q[<?php echo $inc ?>][]" id="" placeholder="..." class="border-2 border-t-blue rounded-lg p-2 mt-2 ml-6 w-4/5 lg:w-11/12 input__text input__others" data-id="<?php echo $inc ?>">
                                </div>
                            </div>
                        </div>
                        <button class="my-6 font-bold bg-white border-2 border-t-red rounded-lg px-4 py-2 mx-auto block text-t-blue btn__next btn__change--blue" data-id="<?php echo $inc ?>">SELANJUTNYA</button>
                    </div>
                </div>
            </div>

            <div class="wrap last--page hidden">
                <div class="min-h-screen min-w-full flex flex-col justify-center text-white text-center">
                    <div class="head__mid absolute w-full flex justify-center items-center">
                        <div class="head__mid--one">
                            <img src="<?php echo base_url('assets') ?>/images/logo-indosat.png" alt="">
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
    <?php $this->load->view('script_view') ?>
</body>
</html>