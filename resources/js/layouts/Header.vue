<template>
    <div>
          <!-- sidenav  -->
          <aside class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0" aria-expanded="false">
            <div class="h-19" style="margin-bottom: 35px;">
              <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times dark:text-white text-slate-400 xl:hidden" sidenav-close></i>
              <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700" href="/" >
                 <!-- <h3 class="text-center font-bold">Guevara Web Graphics</h3> -->
                 <img src="https://guevarawebgraphics.com/images/logo/png/black-logo.png" />
              </a>
            </div>

            <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />

            <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
              <ul class="flex flex-col pl-0 mb-0">
                    <li class="mt-0.5 w-full">
                    <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="/">
                      <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-cyan-500 ni ni-app"></i>
                      </div>
                      <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Home page</span>
                    </a>
                  </li>

                  <li class="mt-0.5 w-full">
                    <a class="py-2.7 bg-blue-500/13 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors" href="dashboard">
                      <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
                      </div>
                      <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Stores</span>
                    </a>
                  </li>
       
            <li class="w-full mt-4">
              <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">Account pages</h6>
            </li>

            <li class="mt-0.5 w-full">
              <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="">
                <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                  <i class="relative top-0 text-sm leading-normal text-slate-700 ni ni-single-02"></i>
                </div>
                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Sign Out</span>
              </a>
            </li>
              
                
              </ul>
            </div>

             <div class="mx-4">
              <!-- load phantom colors for card after: -->
              <p class="invisible hidden text-gray-800 text-red-500 text-red-600 text-blue-500 dark:bg-white bg-slate-500 bg-gray-500/30 bg-cyan-500/30 bg-emerald-500/30 bg-orange-500/30 bg-red-500/30 after:bg-gradient-to-tl after:from-zinc-800 after:to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 after:from-blue-700 after:to-cyan-500 after:from-orange-500 after:to-yellow-500 after:from-green-600 after:to-lime-400 after:from-red-600 after:to-orange-600 after:from-slate-600 after:to-slate-300 text-emerald-500 text-cyan-500 text-slate-400"></p>
              <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border" sidenav-card>
                <!-- <img class="w-1/1 mx-auto"  src="https://guevarawebgraphics.com/images/logo/png/fire-3.png" /> -->
                <div class="flex-auto w-full p-4 pt-0 text-center">
                  <div class="transition-all duration-200 ease-nav-brand">
                    <h6 class="mb-0 dark:text-white text-slate-700">Need Full Stack Developer?</h6>
                    <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Together, We Shall Triumph! 🤙</p>
                  </div>
                </div>
              </div>
              <a href="mailto:info@guevarawebgraphics.com" target="_blank" class="inline-block w-full px-8 py-2 mb-4 text-xs font-bold leading-normal text-center text-white capitalize transition-all ease-in rounded-lg shadow-md bg-slate-700 bg-150 hover:shadow-xs hover:-translate-y-px">HIRE ME</a>
              <!-- pro btn  -->
              <a class="inline-block w-full px-8 py-2 text-xs font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md select-none bg-150 bg-x-25 hover:shadow-xs hover:-translate-y-px" href="https://guevarawebgraphics.com" target="_blank">My Portfolio Made with Love</a>
            </div>
          </aside>

          <!-- end sidenav -->
    </div>
</template>

<script>
import axios from 'axios';
import Swal from 'sweetalert2';

const baseUrl = 'http://127.0.0.1:8000/';

export default {
  name: "headerComponent",
  mounted() {
    const api_token = JSON.parse(localStorage.getItem("api_token"));
    axios.defaults.headers.common['Authorization'] = `Bearer ${api_token}`;
    axios.get(baseUrl + "api/user")
      .then((response) => {
        this.$emit('userData', response);
      })
      .catch((error) => {
        console.error('Error:', error);
      });
  },
};
</script>

<style lang="scss" scoped>

</style>