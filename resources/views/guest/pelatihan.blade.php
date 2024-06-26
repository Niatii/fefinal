<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelatihan</title>
</head>
<body class="bg-latar text-black min-h-screen">
    <!-- header -->
    @include('components.headerguest')

    <!-- Start content -->
    <section  class="pt-36 sm:pt-40 mx-3 sm:mx-8 flex justify-center">
        <div class="bg-white w-full rounded-md pb-10">
            <div class="mx-3 my-2">
                <h1 class="font-bold text-wjudul my-4 md:text-2xl lg:text-3xl md:my-6 sm:mx-6"
                    data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back"
                    data-aos-delay="200"
                    data-aos-offset="0">
                    Pelatihan
                </h1>
            </div>

            <!-- content 1 -->
            <div class="px-2 md:px-10 items-center my-4" data-aos="fade-right"
                data-aos-offset="150"
                data-aos-easing="ease-in-sine">
                <div class="w-full grid grid-cols-3">
                    <div class="flex items-center">
                        <img class="w-full aspect-16/9 object-cover" src="{{ asset('storage/properti/3.jpg') }}" alt="gambar pelatihan" />    
                    </div>
                    <div class="mx-2 h-24 sm:px-2 sm:h-[120px] md:h-48 md:pt-5 overflow-hidden col-span-2 ">
                        <h5 class="font-bold text-xs md:text-lg lg:text-2xl overflow-hidden h-4 md:h-10">Judul Pelatihan</h5>
                        <p class="my-1 text-[9px] md:text-base">Harga</p>
                        <p class="text-[10px] md:text-base overflow-hidden h-7 sm:h-12 lg:h-[72px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. At repellendus corrupti nobis perferendis eos officiis iusto rem iure ad quis numquam natus error nesciunt, deserunt expedita nam veniam nihil nemo voluptatibus, recusandae quia eaque, laudantium aperiam? Delectus dicta repudiandae rem provident optio obcaecati nulla, necessitatibus, adipisci fuga perspiciatis quibusdam. Voluptates, minus facere eius quibusdam officia reprehenderit alias voluptatum quidem autem dicta iusto? Quos atque reprehenderit itaque officia aliquid enim. Sit, itaque repellat. Natus nobis accusantium doloribus tempora deleniti vitae quidem, nihil est aperiam aliquid, officiis repellendus debitis quos quae deserunt similique reiciendis molestiae ipsa odit quas, corporis consectetur dolores. Voluptate? blabala</p>
                       <button onclick="showDialog()" class="bg-grad text-[9px] md:text-xs py-1 px-2 rounded-full text-gray-200 hover:bg-grab hover:text-black">Akses Halaman</button>
                    </div>
                </div>
            </div>

            <!-- content 2 -->
            <div class="px-2 md:px-10 items-center my-4" data-aos="fade-right"
                data-aos-offset="150"
                data-aos-easing="ease-in-sine">
                <div class="w-full grid grid-cols-3">
                    <div class="flex items-center">
                        <img class="w-full aspect-16/9 object-cover" src="{{ asset('storage/properti/1.jpg') }}" alt="gambar pelatihan" />    
                    </div>
                    <div class="mx-2 h-24 sm:px-2 sm:h-[120px] md:h-48 md:pt-5 overflow-hidden col-span-2 ">
                        <h5 class="font-bold text-xs md:text-lg lg:text-2xl overflow-hidden h-4 md:h-10">Judul Pelatihan</h5>
                        <p class="my-1 text-[9px] md:text-base">Harga</p>
                        <p class="text-[10px] md:text-base overflow-hidden h-7 sm:h-12 lg:h-[72px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. At repellendus corrupti nobis perferendis eos officiis iusto rem iure ad quis numquam natus error nesciunt, deserunt expedita nam veniam nihil nemo voluptatibus, recusandae quia eaque, laudantium aperiam? Delectus dicta repudiandae rem provident optio obcaecati nulla, necessitatibus, adipisci fuga perspiciatis quibusdam. Voluptates, minus facere eius quibusdam officia reprehenderit alias voluptatum quidem autem dicta iusto? Quos atque reprehenderit itaque officia aliquid enim. Sit, itaque repellat. Natus nobis accusantium doloribus tempora deleniti vitae quidem, nihil est aperiam aliquid, officiis repellendus debitis quos quae deserunt similique reiciendis molestiae ipsa odit quas, corporis consectetur dolores. Voluptate? blabala</p>
                       <button onclick="showDialog()" class="bg-grad text-[9px] md:text-xs py-1 px-2 rounded-full text-gray-200 hover:bg-grab hover:text-black">Akses Halaman</button>
                    </div>
                </div>
            </div>

            <!-- content 3 -->
            <div class="px-2 md:px-10 items-center my-4" data-aos="fade-right"
                data-aos-offset="150"
                data-aos-easing="ease-in-sine">
                <div class="w-full grid grid-cols-3">
                    <div class="flex items-center">
                        <img class="w-full aspect-16/9 object-cover" src="{{ asset('storage/properti/2.jpg') }}" alt="gambar pelatihan" />    
                    </div>
                    <div class="mx-2 h-24 sm:px-2 sm:h-[120px] md:h-48 md:pt-5 overflow-hidden col-span-2 ">
                        <h5 class="font-bold text-xs md:text-lg lg:text-2xl overflow-hidden h-4 md:h-10">Judul Pelatihan</h5>
                        <p class="my-1 text-[9px] md:text-base">Harga</p>
                        <p class="text-[10px] md:text-base overflow-hidden h-7 sm:h-12 lg:h-[72px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. At repellendus corrupti nobis perferendis eos officiis iusto rem iure ad quis numquam natus error nesciunt, deserunt expedita nam veniam nihil nemo voluptatibus, recusandae quia eaque, laudantium aperiam? Delectus dicta repudiandae rem provident optio obcaecati nulla, necessitatibus, adipisci fuga perspiciatis quibusdam. Voluptates, minus facere eius quibusdam officia reprehenderit alias voluptatum quidem autem dicta iusto? Quos atque reprehenderit itaque officia aliquid enim. Sit, itaque repellat. Natus nobis accusantium doloribus tempora deleniti vitae quidem, nihil est aperiam aliquid, officiis repellendus debitis quos quae deserunt similique reiciendis molestiae ipsa odit quas, corporis consectetur dolores. Voluptate? blabala</p>
                       <button onclick="showDialog()" class="bg-grad text-[9px] md:text-xs py-1 px-2 rounded-full text-gray-200 hover:bg-grab hover:text-black">Akses Halaman</button>
                    </div>
                </div>
            </div>

            <!-- content 4 -->
            <div class="px-2 md:px-10 items-center my-4" data-aos="fade-right"
                data-aos-offset="150"
                data-aos-easing="ease-in-sine">
                <div class="w-full grid grid-cols-3">
                    <div class="flex items-center">
                        <img class="w-full aspect-16/9 object-cover" src="{{ asset('storage/properti/2.jpg') }}" alt="gambar pelatihan" />    
                    </div>
                    <div class="mx-2 h-24 sm:px-2 sm:h-[120px] md:h-48 md:pt-5 overflow-hidden col-span-2 ">
                        <h5 class="font-bold text-xs md:text-lg lg:text-2xl overflow-hidden h-4 md:h-10">Judul Pelatihan</h5>
                        <p class="my-1 text-[9px] md:text-base">Harga</p>
                        <p class="text-[10px] md:text-base overflow-hidden h-7 sm:h-12 lg:h-[72px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. At repellendus corrupti nobis perferendis eos officiis iusto rem iure ad quis numquam natus error nesciunt, deserunt expedita nam veniam nihil nemo voluptatibus, recusandae quia eaque, laudantium aperiam? Delectus dicta repudiandae rem provident optio obcaecati nulla, necessitatibus, adipisci fuga perspiciatis quibusdam. Voluptates, minus facere eius quibusdam officia reprehenderit alias voluptatum quidem autem dicta iusto? Quos atque reprehenderit itaque officia aliquid enim. Sit, itaque repellat. Natus nobis accusantium doloribus tempora deleniti vitae quidem, nihil est aperiam aliquid, officiis repellendus debitis quos quae deserunt similique reiciendis molestiae ipsa odit quas, corporis consectetur dolores. Voluptate? blabala</p>
                       <button onclick="showDialog()" class="bg-grad text-[9px] md:text-xs py-1 px-2 rounded-full text-gray-200 hover:bg-grab hover:text-black">Akses Halaman</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End content -->
 
    <!-- modal -->
    @include('modals.modal-guest')

    <!-- footer -->
    @include('components.footerguest')


    <!-- javascript -->
    @vite('resources/js/fiturguest.js')
</body>
</html>