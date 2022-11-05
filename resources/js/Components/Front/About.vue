<template>
    <section id="about" class="py-12 lg:py-32  bg-gray-50 dark:bg-gray-800 ">
        <div class="py-16   ">
  <div 
  v-motion
    :initial="{
      opacity: 0,
      y: 100,
    }"
    :visible="{
      opacity: 1,
      y: 0,
      
    }"
   class=" m-auto px-6 text-gray-600 md:px-12 xl:px-6">
      <div class="space-y-6 md:space-y-0  md:flex   md:gap-6 lg:items-center lg:gap-12">
        <div class="md:w-5/12 lg:w-5/12">
          <img
         
           src="img/about.jpg" alt="image" loading="lazy" width="" height="" class="rounded-lg ">
        </div>
        <div class="md:7/12 lg:w-6/12">
          <h2 class="text-2xl text-gray-900 font-bold md:text-4xl dark:text-white">About Me </h2>
          <p class="mt-6 text-gray-600 font-semibold dark:text-gray-300"> Freelance Backend Frontend Web   Developer  Lorem ipsum dolor, sit amet consectuatur atque doloremque!</p>
          <p class="mt-4 text-gray-600 font-semibold dark:text-gray-300"> Nobis minus voluptatibus pariatur dignissimos libero quaerat iure expedita at? Asperiores nemo possimus nesciunt dicta veniam aspernatur quam mollitia.</p>
        </div>
      </div>
  </div>
</div>

    </section>
</template>
