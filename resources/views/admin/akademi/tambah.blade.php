<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Akademi</title>
</head>
<body class="bg-latar text-black pb-12 min-h-screen">
    
    <!-- header -->
   @include('components.headeradmin')

    <!-- edited -->
    <div class="fixed left-0 top-48 z-10">
        <a href="/admin/akademi/" class="bg-nav rounded-r-md hover:bg-gradb text-xs md:text-base text-white py-2 px-4 md:px-8
            transition duration-700 focus:bg-gradb">
            Kembali
        </a>
    </div>
    <!-- edited -->


    <!-- Content Start -->   
    <section  class="pt-36 mx-8 sm:pt-40 flex justify-center relative">
        <div class="bg-white w-full rounded-md pb-12">
            <div class="px-5 pt-20 md:px-20 w-full "
                data-aos="fade-zoom-in"
                data-aos-easing="ease-in-back"
                data-aos-delay="150"
                data-aos-offset="0">
                <div class="flex flex-col justify-between py-4 leading-normal">
                    <form action="">
                        <div>
                            <input class="block w-full mb-5 text-xs text-gray-900 border border-black rounded-lg cursor-pointer focus:outline-none" id="small_size" type="file">
                        </div>
                        <div>
                            <label for="judul" class="text-xs md:text-base ">Judul Akademi</label>
                            <input type="text" id="judul" class="text-xs md:text-base w-full border-black rounded-lg my-2" placeholder="cth. Perpajakan" >
                        </div>
                        <div class="py-2">
                            <label for="kategori" class="text-xs md:text-base ">Kategori Akademi</label>
                            <select id="countries" class="bg-gray-50 border border-black text-gray-900 text-xs  md:text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option selected disabled>Pilih Kategori Akademi</option>
                                <option value="pelatihan">Pelatihan</option>
                                <option value="kegiatan">Kegiatan</option>
                            </select>
                        </div>
                        <div>
                            <label for="tanggal" class="text-xs md:text-base">Tanggal</label>
                            <input type="date" id="tanggal" class="text-xs md:text-base w-full border-black rounded-lg my-2" >
                        </div>
                        <div>
                            <label for="lokasi" class="text-xs md:text-base">Lokasi</label>
                            <input type="text" id="lokasi" class="text-xs md:text-base w-full border-black rounded-lg my-2" placeholder="cth. Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29461" >
                        </div>
                        <div>
                            <label for="harga" class="text-xs md:text-base">Harga</label>
                            <input type="number" id="harga" class="text-xs md:text-base w-full border-black rounded-lg my-2" placeholder="cth. 200000" >
                        </div>
                        <div>
                            <label for="slot" class="text-xs md:text-base">Slot Peserta</label>
                            <input type="number" id="slot" class="text-xs md:text-base w-full border-black rounded-lg my-2" placeholder="cth. 230" >
                        </div>
                        <!-- <div>
                            <label for="pelatih" class="text-xs md:text-base">Nama Pelatih</label>
                            <input type="text" id="pelatih" class="text-xs md:text-base w-full border-black rounded-lg my-2" >
                        </div> -->
                        <div class="border border-black my-5 rounded-lg">
                        <textarea id="informasi" rows="15" class="block w-full  text-sm border-none focus:ring-primary-500 focus:border-primary-500 overflow-y-scroll" placeholder="Tambah Informasi..."></textarea>
                        </div>
                        <div class="flex justify-end">
                            <a href="/admin/akademi/" type="submit" class="bg-nav hover:bg-gradb text-xs md:text-base text-white py-2 px-4 md:px-8
                            rounded-md">Tambah</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
       
    <!-- Content End -->
    
    <!-- javascript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    @vite('resources/js/fituruser.js')
</body>
</html>