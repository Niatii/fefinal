<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    @vite('resources/css/app.css')

    <!-- font Family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- library fontawesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-latar text-black">
    <!-- header -->
    @include('components.headerguest')
    
    <!-- Content Start -->
    <section  class="pt-36 sm:pt-40 mb-12 mx-8">
        <div class="bg-white w-full py-2">
           <div class="grid grid-cols-3 gap-4 mx-5 sm:mx-10 my-2">
                <div class="col-span-2">
                    <a href="/guest/Detail Berita"><img src="{{ asset('storage/properti/2.jpg') }}" alt="gambar berita" data-aos="fade-right"></a>
                </div>
                <div class="gap-y-2">
                    <a href="#"><img src="{{ asset('storage/properti/2.jpg') }}" alt="gambar berita" data-aos="fade-down"></a>
                    <a href="#"><img src="{{ asset('storage/properti/2.jpg') }}" alt="gambar berita" class="mt-2" data-aos="fade-up"></a>
                </div>
           </div>
           <div class="mx-5 sm:mx-10 mt-4">
                <div class=" w-4/12">
                    <h2 class="text-base md:text-2xl">Sub News</h2>
                    <hr class="border-t-1 border-black my-1">
                </div>

                <div class="card card-side sm:my-4 lg:my-8 " data-aos="fade-right"
                data-aos-offset="150"
                data-aos-easing="ease-in-sine">
                <figure><img src="{{ asset('storage/properti/2.jpg') }}" alt="tentang kami" class="w-32 sm:w-64 md:w-72 sm:ml-5 hover:brightness-50"/></figure>
                    <div class="card-body w-7/12 sm:w-8/12 lg:py-6">
                        <a href="/guest/Detail Berita">
                            <h2 class="card-title text-[10px] md:text-lg hover:text-sky-600">Title Foto</h2>
                            <a href="/guest/Detail Berita" class="text-[8px] overflow-hidden md:text-xs h-12 md:h-16">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae excepturi sapiente nam cumque molestias delectus beatae, incidunt officia eos accusamus, quibusdam cum. Placeat porro ex minima magni quo! Temporibus quasi aspernatur autem voluptate omnis recusandae reprehenderit dolorum nostrum! Qui amet aliquid porro natus sint. Nam optio consequuntur perferendis labore voluptas illo, et hic necessitatibus vitae sunt facere aperiam iste corrupti.
                            </a>
                        </a>
                    </div>
                </div>

                <div class="card card-side sm:my-4 lg:my-8 " data-aos="fade-right"
                data-aos-offset="150"
                data-aos-easing="ease-in-sine">
                <figure><img src="{{ asset('storage/properti/2.jpg') }}" alt="tentang kami" class="w-32 sm:w-64 md:w-72 sm:ml-5 hover:brightness-50"/></figure>
                    <div class="card-body w-7/12 sm:w-8/12 lg:py-6">
                        <a href="/guest/Detail Berita">
                            <h2 class="card-title text-[10px] md:text-lg hover:text-sky-600">Title Foto</h2>
                            <a href="/guest/Detail Berita" class="text-[8px] overflow-hidden md:text-xs h-12 md:h-16">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae excepturi sapiente nam cumque molestias delectus beatae, incidunt officia eos accusamus, quibusdam cum. Placeat porro ex minima magni quo! Temporibus quasi aspernatur autem voluptate omnis recusandae reprehenderit dolorum nostrum! Qui amet aliquid porro natus sint. Nam optio consequuntur perferendis labore voluptas illo, et hic necessitatibus vitae sunt facere aperiam iste corrupti.
                            </a>
                        </a>
                    </div>
                </div>

                <div class="card card-side sm:my-4 lg:my-8 " data-aos="fade-right"
                data-aos-offset="150"
                data-aos-easing="ease-in-sine">
                <figure><img src="{{ asset('storage/properti/2.jpg') }}" alt="tentang kami" class="w-32 sm:w-64 md:w-72 sm:ml-5 hover:brightness-50"/></figure>
                    <div class="card-body w-7/12 sm:w-8/12 lg:py-6">
                        <a href="/guest/Detail Berita">
                            <h2 class="card-title text-[10px] md:text-lg hover:text-sky-600">Title Foto</h2>
                            <a href="/guest/Detail Berita" class="text-[8px] overflow-hidden md:text-xs h-12 md:h-16">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae excepturi sapiente nam cumque molestias delectus beatae, incidunt officia eos accusamus, quibusdam cum. Placeat porro ex minima magni quo! Temporibus quasi aspernatur autem voluptate omnis recusandae reprehenderit dolorum nostrum! Qui amet aliquid porro natus sint. Nam optio consequuntur perferendis labore voluptas illo, et hic necessitatibus vitae sunt facere aperiam iste corrupti.
                            </a>
                        </a>
                    </div>
                </div>

                <div class="card card-side sm:my-4 lg:my-8 " data-aos="fade-right"
                data-aos-offset="150"
                data-aos-easing="ease-in-sine">
                <figure><img src="{{ asset('storage/properti/2.jpg') }}" alt="tentang kami" class="w-32 sm:w-64 md:w-72 sm:ml-5 hover:brightness-50"/></figure>
                    <div class="card-body w-7/12 sm:w-8/12 lg:py-6">
                        <a href="/guest/Detail Berita">
                            <h2 class="card-title text-[10px] md:text-lg hover:text-sky-600">Title Foto</h2>
                            <a href="/guest/Detail Berita" class="text-[8px] overflow-hidden md:text-xs h-12 md:h-16">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae excepturi sapiente nam cumque molestias delectus beatae, incidunt officia eos accusamus, quibusdam cum. Placeat porro ex minima magni quo! Temporibus quasi aspernatur autem voluptate omnis recusandae reprehenderit dolorum nostrum! Qui amet aliquid porro natus sint. Nam optio consequuntur perferendis labore voluptas illo, et hic necessitatibus vitae sunt facere aperiam iste corrupti.
                            </a>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content End -->

    <!-- footer -->
    @include('components.footerguest')



    <!-- javascript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    @vite('resources/js/app.js')
</body>
</html>