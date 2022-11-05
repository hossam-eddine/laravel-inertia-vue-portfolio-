<template>
	<section   id="hero" class=" bg-white text-gray-800 dark:bg-transparent lg:h-screen p-4">
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
		class="container flex   justify-center p-6 mx-auto  flex-col-reverse  sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
			<div  class="flex flex-col justify-center p-6 text-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left">
				<h1

                class="lg:text-5xl text-3xl font-bold leading-none sm:text-6xl dark:text-white">Hey I'm
					<span

                    class="text-blue-600">Hossam</span>Eddine
				</h1>
				<p class="mt-6 mb-8  text-lg sm:mb-12 font-light text-gray-500 dark:text-gray-400">Dictum aliquam porta in condimentum ac integer
					<br class="hidden md:inline lg:hidden">turpis pulvinar, est scelerisque ligula sem
				</p>
				<div class="flex flex-col space-y-4 sm:items-center sm:justify-center sm:flex-row sm:space-y-0 sm:space-x-4 lg:justify-start">
					<a
                    v-motion
  :initial="{
    x:10
  }"
  :enter="{
    x: 0,
    transition: {
      repeat: Infinity,
      repeatType: 'reverse',
    },
  }"
                    rel="noopener noreferrer" @click="scrolldiv" class=" cursor-pointer px-8 py-3 text-lg font-semibold rounded bg-blue-500 shadow-lg shadow-blue-500/50 text-gray-50 hover:bg-blue-400 transition ease-in">Contact Me </a>

				</div>
			</div>
			<div


            class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128  ">
				<img



                src="img/me.png" alt="" class="
                dark:grayscale object-contain
                 h-72 sm:h-80 lg:h-96
                  xl:h-112 2xl:h-128
                  sm:rounded-full

                    dark:bg-gray-900
                     dark:backdrop-filter
                     dark:backdrop-blur-lg
                      dark:bg-opacity-20
                      dark:sm:border-b
                       dark:sm:shadow-white
                        dark:shadow-lg ">
			</div>
		</div>
	</section>
</template>
<script setup>
const   scrolldiv = () => {
                var elem = document.getElementById('contact');
                elem.scrollIntoView();
            }

</script>
