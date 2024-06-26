<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Konsultasi</title>
</head>
<body class="bg-latar text-black pb-12 min-h-screen">
    
    <!-- header -->
   @include('components.headeradmin')

   <!-- edited -->
   <div class="fixed left-0 top-48 z-10">
        <a href="/admin/konsultasi/detail" class="bg-nav rounded-r-md hover:bg-gradb text-xs md:text-base text-white py-2 px-4 md:px-8
            transition duration-700 focus:bg-gradb">
            Kembali
        </a>
    </div>
    <!-- edited -->

    <!-- Content Start -->
    <section  class="pt-36 mx-8 sm:pt-40 flex justify-center relative">
        <div class="bg-white w-full rounded-md pb-12">
            <div class="px-5 pt-20 md:px-20 w-full ">
                <img class="object-cover w-8/12 aspect-16/9 rounded-md" src="{{ asset('storage/properti/1.jpg') }}" alt="detail tentang kami"
                data-aos="fade-zoom-in"
                data-aos-easing="ease-in-back"
                data-aos-delay="150"
                data-aos-offset="0">
                <div class="flex flex-col justify-between py-4 leading-normal">
                    <form action="">
                        <div>
                            <input class="block w-full mb-5 text-xs text-gray-900 border border-black rounded-lg cursor-pointer focus:outline-none" id="small_size" type="file">
                        </div>
                        <div >
                            <input name="judul" type="text" class="w-full border-black rounded-lg" placeholder="Edit Judul..">
                        </div>
                        <div class="border border-black my-5 rounded-lg">
                        <textarea id="informasi" rows="15" class="block w-full  text-sm border-none focus:ring-primary-500 focus:border-primary-500 overflow-y-scroll" placeholder="Edit Informasi..."></textarea>
                        </div>
                        <div class="flex justify-end">
                            <a href="/admin/konsultasi" type="submit" class="bg-nav hover:bg-gradb text-xs md:text-base text-white py-2 px-4 md:px-8
                            rounded-md">Simpan</a>
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