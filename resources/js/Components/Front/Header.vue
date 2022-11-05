<template>



<nav
class=" border-gray-200 bg-white  px-2 sm:px-4 py-2.5 rounded  dark:bg-gray-900 z-10  fixed w-full  ">
  <div class="container flex flex-wrap justify-between items-center mx-auto">
    <a href="" class="flex items-center ">
        <span class="self-center text-xl font-semibold whitespace-nowrap text-black dark:text-white "><span class="text-blue-600">Hossam</span>Eddine</span>
    </a>
    <button @click="show = !show" data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-600 rounded-lg md:hidden hover:font-bold focus:outline-none focus:ring-2 focus:ring-gray-200  " aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <div :class="{'hidden' : show}" class=" w-full md:block md:w-auto" id="navbar-default">
      <ul class=" flex flex-col p-4 mt-4  rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0    ">
        <li v-for="(element,i) in navigations" :key="i" >
          <a @click="scrolldiv(element.section)"


          class="block py-2 pr-4 pl-3 text-black text-xl cursor-pointer  rounded  hover:font-bold transition ease-in md:p-2  hover:bg-blue-600 dark:hover:shadow-lg dark:hover:shadow-blue-500/50     dark:text-white  " aria-current="page">{{element.name}}</a>
        </li>

      </ul>
    </div>
  </div>
</nav>




</template>

<script setup>
import { ref } from 'vue';
const show = ref(false)

const navigations = [
  {'name': "Home","section":"hero"},
  {'name': "About","section":"about"},
  {'name': "Portfolio","section":"portfolio"},
  {'name': "Services","section":"service"},
]
const   scrolldiv = (section) => {
                var elem = document.getElementById(section);
                elem.scrollIntoView();
            }

</script>
