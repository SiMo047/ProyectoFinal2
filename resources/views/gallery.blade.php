<x-web>

<x-slot name="fondo">

    <div class="absolute top-0 w-full h-full bg-center bg-cover" style="background-image: url('{{ asset('img/i6.jpg')}}');background-position: center 70%;">
                    <span id="blackOverlay" class="w-full h-full absolute opacity-80 bg-black"></span>
    </div>


    <div class="container relative mx-auto h-full flex justify-center items-center">           
        <div class="text-center">
            <h1 class="text-white font-semibold text-5xl">
                GALLERY
            </h1>
        </div>
    </div>

</x-slot>
<x-slot name="seccion">
    <div class="flex flex-col items-center my-8 pb-10">
        <p class="text-2xl text-white font-semibold mb-2">FOLLOW US ON INSTAGRAM</p>
        <a href="https://www.instagram.com/almabeachclub/?hl=es" class="hover:underline me-4 md:me-6 text-2xl text-white">
            <i class="fab fa-instagram"></i>
        </a>
    </div>

    <div class="grid grid-cols-3 md:grid-cols-3 gap-4 mx-auto max-w-screen-lg">
        <div class="grid gap-4">
            <div class="mx-auto">
               <a href="https://www.instagram.com/p/C7Ur50Mo7Fr/?hl=es"><img class="h-auto max-w-full rounded-none" src="{{ asset('img/i1.jpg') }}" alt=""></a>
        </div>
            <div class="mx-auto">
            <a href="https://www.instagram.com/p/C6qrBKuInmt/?hl=es&img_index=1"><img class="h-auto max-w-full rounded-none" src="{{ asset('img/i2.jpg') }}" alt=""></a>
            </div>
            <div class="mx-auto">
               <a href="https://www.instagram.com/p/C0337gjI8Je/?hl=es&img_index=1"><img class="h-auto max-w-full rounded-none" src="{{ asset('img/i3.jpg') }}" alt=""></a>
            </div>
        </div>
        <div class="grid gap-4">
            <div class="mx-auto">
            <a href="https://www.instagram.com/p/CTW8zw5Ipie/?hl=es"><img class="h-auto max-w-full rounded-none" src="{{ asset('img/i4.jpg') }}" alt=""></a>
            </div>
            <div class="mx-auto">
            <a href="https://www.instagram.com/p/CSoZLNZApNd/?hl=es"><img class="h-auto max-w-full rounded-none" src="{{ asset('img/i5.jpg') }}" alt=""></a>
            </div>
            <div class="mx-auto">
            <a href="https://www.instagram.com/p/CNsuFjrgrOt/?hl=es"><img class="h-auto max-w-full rounded-none" src="{{ asset('img/i6.jpg') }}" alt=""></a>
            </div>
        </div>
        <div class="grid gap-4">
            <div class="mx-auto">
            <a href="https://www.instagram.com/p/CrLWv9aIZy7/?hl=es"><img class="h-auto max-w-full rounded-none" src="{{ asset('img/i7.jpg') }}" alt=""></a>
            </div>
            <div class="mx-auto">
            <a href="https://www.instagram.com/p/Cg9K1vror3v/?hl=es"><img class="h-auto max-w-full rounded-none" src="{{ asset('img/i8.jpg') }}" alt=""></a>
            </div>
            <div class="mx-auto">
            <a href="https://www.instagram.com/p/C63ZaaUo6nv/?hl=es&img_index=1"><img class="h-auto max-w-full rounded-none" src="{{ asset('img/i9.jpg') }}" alt=""></a>
            </div>
        </div>
    </div>
</x-slot>





</x-web>