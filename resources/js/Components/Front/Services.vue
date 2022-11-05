<template>

<section id="service" class="py-12 lg:py-32 ">
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
    class="container mx-auto ">
        <div class="flex flex-col items-center">
            <h2 class="text-3xl  lg:text-4xl font-medium lg:font-extrabold mb-5 dark:text-gray-200">Services</h2>

        </div>

    <div class="relative py-16">
  <div

  class="container relative m-auto px-6 text-gray-500 md:px-12">
    <div class="grid gap-6 md:mx-auto md:w-8/12 lg:w-full lg:grid-cols-3">
      <div class="group space-y-6 border border-gray-100 dark:border-gray-700 rounded-3xl bg-white dark:bg-gray-800 px-8 py-12 text-center shadow-2xl shadow-gray-600/10 dark:shadow-none">
        <img

          class="mx-auto w-24"
          src="img/icons/code.png"
          alt="illustration"
          loading="lazy"
        />
        <h3 class="text-2xl font-semibold text-gray-800 dark:text-white">Web development</h3>
        <p>
          Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at cum, consectetur ullam
          tempora ipsa iste officia sed officiis! Incidunt ea animi officiis.
        </p>
        <a
          href="#"
          class="relative mx-auto flex h-10 w-10 items-center justify-center before:absolute before:inset-0 before:rounded-full before:border before:border-gray-100 dark:before:border-gray-600 before:transition before:duration-300 group-hover:before:scale-125"
        >
          <span class="text-primary">&rightarrow;</span>
        </a>
      </div>
      <div class="group space-y-6 border border-gray-100 dark:border-gray-700 rounded-3xl bg-white dark:bg-gray-800 px-8 py-12 text-center shadow-2xl shadow-gray-600/10 dark:shadow-none">
        <img
          class="mx-auto w-24"
          src="img/icons/magic.png"
          alt="illustration"
          loading="lazy"
        />
        <h3 class="text-2xl font-semibold text-gray-800 dark:text-white">Seo</h3>
        <p>
          Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at cum, consectetur ullam
          tempora ipsa iste officia sed officiis! Incidunt ea animi officiis.
        </p>

        <a
          href="#"
          class="relative mx-auto flex h-10 w-10 items-center justify-center before:absolute before:inset-0 before:rounded-full before:border before:border-gray-100 dark:before:border-gray-600 before:transition before:duration-300 group-hover:before:scale-125"
        >
          <span class="text-primary">&rightarrow;</span>
        </a>
      </div>
      <div class="group space-y-6 border border-gray-100 dark:border-gray-700 rounded-3xl bg-white dark:bg-gray-800 px-8 py-12 text-center shadow-2xl shadow-gray-600/10 dark:shadow-none">
        <img
          class="mx-auto w-24"
          src="img/icons/graphic.webp"
          alt="illustration"
          loading="lazy"
        />
        <h3 class="text-2xl font-semibold text-gray-800 dark:text-white">Web Design</h3>
        <p>
          Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at cum, consectetur ullam
          tempora ipsa iste officia sed officiis! Incidunt ea animi officiis.
        </p>
        <a
          href="#"
          class="relative mx-auto flex h-10 w-10 items-center justify-center before:absolute before:inset-0 before:rounded-full before:border before:border-gray-100 dark:before:border-gray-600 before:transition before:duration-300 group-hover:before:scale-125"
        >
          <span class="text-primary">&rightarrow;</span>
        </a>
      </div>
    </div>
  </div>
</div>


    </div>


</section>



</template>

<script setup>

</script>
