<x-web>

<x-slot name="fondo">

    <div class="absolute top-0 w-full h-full bg-center bg-cover" style="background-image: url('{{ asset('img/f7.jpg')}}');background-position: center 70%;">
                    <span id="blackOverlay" class="w-full h-full absolute opacity-80 bg-black"></span>
    </div>


 
    <div class="container relative mx-auto h-full flex justify-center items-center">           
        <div class="text-center">
            <h1 class="text-white font-semibold text-5xl">
                DRINKS
            </h1>
        </div>
    </div>

</x-slot>

<x-slot name="seccion">

<section class="bg-black dark:bg-black">
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
        <div class="font-light text-white sm:text-lg dark:text-white">
            <h2 class="mb-4 text-4xl  font-light leading-snug tracking-tight font-semibold text-white dark:text-white">BAR & COCKTAILS</h2>
            <p class="mb-4 text-white dark:text-white">Embárcate en un viaje por el apasionante universo de la mixología, donde cada sorbo es un tributo al ALMA de nuestra pasión. Con una mezcla de habilidad artesanal y creatividad desbordante, nuestros cócteles te invitan a explorar nuevos horizontes sensoriales y a sumergirte en la esencia misma del placer.</p>
            <a href="{{ asset('pdf/carta.pdf') }}" class=" font-medium hover:opacity-80 tracking-widest uppercase underline underline-offset-6 transition3s mt-4 inline-block">COCKTELERIA</a>
        </div>
        
        <div class="grid grid-cols-2 gap-4 mt-8">
            <img class="w-full " src="{{ asset('img/f9.jpg') }}" alt="">
            <img class="mt-10 w-full lg:mt-10 " src="{{ asset('img/f8.jpg') }}" alt="">
        </div>
    </div>

    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">

    <div class="flex justify-center items-center mt-8">
        <img class="w-2/3" src="{{ asset('img/f10.jpg') }}" alt="">
    </div>
    <div class="font-light text-white sm:text-lg dark:text-white">
        <h2 class="mb-4 text-4xl tracking-tight font-semibold text-white dark:text-white">BEBIDAS</h2>
        <p class="mb-4 text-white font-light leading-snug dark:text-white">Descubre el ALMA de nuestro espacio con nuestra exquisita selección de vinos y champagnes, elegidos con esmero para deleitar tu paladar en cada sorbo.</p>
        <a href="{{ asset('pdf/carta.pdf') }}" class="font-medium hover:opacity-80 tracking-widest uppercase underline underline-offset-6 transition3s mt-4 inline-block">BOTELLAS</a>
    </div>
    
   
</div>
</section>

    


</x-slot>





</x-web>