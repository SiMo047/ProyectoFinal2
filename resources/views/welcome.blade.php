<x-web>

<x-slot name="fondo">

<div class="top-0 w-full h-full opacity-50">
   <img src="{{ asset('img/f2.jpg') }}" alt="">
 </div>
 
</x-slot>

<x-slot name="seccion">

    <div class=" pt-4 pb-4 container mx-auto flex flex-wrap md:flex-nowrap">
        <div class="w-full md:w-1/2 flex justify-center items-center text-white px-6 xl:px-20 2xl:px-36 order-2 md:order-1">
            <div class="max-w-xl mx-auto sm:mx-0 px-6 lg:px-0 py-10 sm:py-20 md:py-10 xl:py-0">
                <h2 class="text-5xl uppercase">ALMA BEACH CLUB </h2>
                <div class="text-lg font-light leading-snug opacity-90 mt-10">
                    <p>¡Bienvenido a ALMA! Relájate con nuestros cócteles exclusivos y disfruta del ambiente único de nuestra amplia terraza junto a la playa. En Alma, cada detalle está diseñado para ofrecerte una experiencia inolvidable.</p>
                </div>
                <a href="{{route('reserva.create')}}" class=" font-medium hover:opacity-80 tracking-widest uppercase underline underline-offset-6 transition3s mt-4 inline-block">RESERVA</a>
            </div>
        </div>
        <div class="relative w-full md:w-1/2 order-1 md:order-2">
            <div class="xl:relative p-1/8">
                <img style="width: 500px; height: 720px;"class="pl-4 object-cover object-center rounded-lg" src="{{ asset('img/f1.jpg') }}" alt="">
            </div>
        </div>
    </div>


    
    <div class="mt-16 flex justify-center ">

            <div class="grid grid-cols-2  md:grid-cols-2 gap-0 ">
                        <div class="grid gap-0 ">
                            <div class=" pb-16 box-border">
                                    <img class="" src="{{ asset('img/f3.jpg') }}" alt="" style="width: 500px; height: 720px;">
                            </div>

                            <div class="flex justify-center box-border">
                                <img class="h-auto max-w-full" src="{{ asset('img/f4.jpg') }}" alt="" style="width: 360px; height: 520spx;">
                            </div>
                        
                        </div>
                        <div class="grid gap-0 " >
                            <div class="flex justify-center pb-16 box-border">
                                <img class="h-auto max-w-full " src="{{ asset('img/f6.jpg') }}" alt="" style="width: 280px; height: 420px;">
                            </div>
                            <div class="box-border">
                                <img class="h-auto max-w-full " src="{{ asset('img/f5.jpg') }}" alt="" style="width: 480px; height: 780px;">
                            </div>
                        
                        </div>


            </div>
    </div>





    <div class="mt-24 pb-16 flex justify-center"> <a  href="">
        <img src="{{ asset('img/link2.png') }}" style="max-width: 180px; max-height: 180px;" ></a>
    </div>
    
    <div class=" grid grid-cols-1 md:grid-cols-2 gap-4">
   
        <!--div info contact -->
        <div class="flex justify-center md:justify-center py-8 px-4 md:px-8">
            <div class="text-white ">
                <h3 class="text-2xl md:text-3xl font-bold mb-4">ALMA Beach Club</h3>
                <p class="mb-4"><a href="https://www.google.com/maps/place//data=!4m2!3m1!1s0xd7ad7fdb327490b:0x50d83535876fa9c0?sa=X&ved=1t:8290&ictx=111" target="_blank" rel="noopener noreferrer">P.º del Mediterráneo, 66, 04638 <br> Mojácar, Almería</a></p>
                <p><a href="" class="text-blue-400">Phone : +34 674 665 806</a></p>
                <p><a href="" class="text-blue-400">Email : puravida@gmail.com</a></p>
            </div>
       </div>
         <!--div mapa -->
         <div class="flex justify-start ">
            <div class=" ">
            <iframe id="map-canvas" class="map_part" width="600"  height="250"  frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=alma beach club mojacar&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://www.googlemapsgenerator.com">embed google maps</a> and <a href="https://utaninkomst.se/">smslån utan inkomst</a></iframe>
            </div>
        </div>              

    </div>

    


</x-slot>





</x-web>