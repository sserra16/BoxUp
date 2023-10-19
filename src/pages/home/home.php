<?php include_once("../header.php") ?>


<div id="default-carousel" class="relative w-full h-full" data-carousel="slide">
  <!-- Carousel wrapper -->
  <div class="relative h-full overflow-hidden rounded-lg  ">
    <!-- Item 1 -->
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
      <img src="/BoxUp/src/images/caminhao1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 brightness-50" alt="...">
    </div>
    <!-- Item 2 -->
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
      <img src="/BoxUp/src/images/caminhao2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 brightness-50" alt="...">
    </div>
    <!-- Item 3 -->
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
      <img src="/BoxUp/src/images/caminhao3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 brightness-50" alt="...">
    </div>
    <!-- Item 4 -->
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
      <img src="/BoxUp/src/images/caminhao4.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 brightness-50" alt="...">
    </div>
    <!-- Item 5 -->
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
      <img src="/BoxUp/src/images/caminhao5.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 brightness-50" alt="...">
    </div>

    <div class="hidden duration-700 ease-in-out" data-carousel-item>
      <img src="/BoxUp/src/images/caminhao7.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 brightness-50" alt="...">
    </div>

  </div>
  <!-- Slider indicators -->
  <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 6" data-carousel-slide-to="5"></button>
  </div>
  <!-- Slider controls -->
  <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
      <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
      </svg>
      <span class="sr-only">Previous</span>
    </span>
  </button>
  <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
      <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
      </svg>
      <span class="sr-only">Next</span>
    </span>
  </button>
  <button type="button" class="absolute bottom-20 p-2 inset-x-0 mx-[40rem] transition-all duration-500 justify-center z-[99999999] border-2 hover:bg-blue-700 hover:border-blue-900   border-blue-700 uppercase text-white bg-transparent  focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg dark:bg-transparent focus:outline-none dark:focus:ring-blue-800">Agendar mudança</button>
</div>



<?php include_once("../footer.php") ?>