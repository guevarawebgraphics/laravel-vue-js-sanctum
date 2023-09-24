<template>
  <section class="page--dashboard">

    <headerComponent @userData="userData"></headerComponent>

    <div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div>

    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
      <!-- Navbar -->
      <nav
        class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start"
        navbar-main navbar-scroll="false">
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
          <nav>
            <!-- breadcrumb -->
            <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
               <li class="text-sm leading-normal">
                  <a class="text-white opacity-50" href="/dashboard">Stores</a>
              </li>
              <li
                class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']"
                aria-current="page">Create</li>
            </ol>
            <h6 class="mb-0 font-bold text-white capitalize">Create Store</h6>
          </nav>

          <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
            <div class="flex items-center md:ml-auto md:pr-4">

            </div>
            <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
              <li class="flex items-center">
                <a href="/"
                  class="block px-0 py-2 text-sm font-semibold text-white transition-all ease-nav-brand">
                  <i class="fa fa-user sm:mr-1"></i>
                  <span class="hidden sm:inline">{{ this.current_username }}</span>
                </a>
              </li>
              <li class="flex items-center pl-4 xl:hidden">
                <a href="javascript:;" class="block p-0 text-sm text-white transition-all ease-nav-brand" sidenav-trigger>
                  <div class="w-4.5 overflow-hidden">
                    <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                    <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                    <i class="ease relative block h-0.5 rounded-sm bg-white transition-all"></i>
                  </div>
                </a>
              </li>


            </ul>
          </div>
        </div>
      </nav>

      <div class="w-full px-6 py-6 mx-auto">

        <div class="p-8">
          <div class="flex flex-wrap">
                <div class="flex-none w-full max-w-full px-3">
                  <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto px-0 pt-0 pb-2">
                      <div class="p-0 overflow-x-auto">
                      
                        <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                            <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
                           
                                <div class="grid grid-flow-col auto-cols-max">
                                  <div>
                                      <p class="mb-0 dark:text-white/80">Store</p>
                                  </div>
                                  <div class="text-right">
                                      <a href="/dashboard" class="inline-block px-5 py-2.5 font-bold leading-normal text-center text-white align-middle transition-all bg-transparent rounded-lg cursor-pointer text-sm ease-in shadow-md bg-150 bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 hover:shadow-xs active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25">
                                  <i class="fa fa-arrow-left"></i> &nbsp; Back</a>
                                  </div>
                                </div>

                            </div>
                            <div class="flex-auto p-6">
                              <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">INFORMATION</p>
                              <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                  <div class="mb-4">
                                    <label for="name" @keyup.enter="addStore" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Name</label>
                                    <input type="text" name="name" v-model="name" placeholder="Health Care Pharmacy" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                  </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                  <div class="mb-4">
                                    <label for="email" @keyup.enter="addStore" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Email address</label>
                                    <input type="email" name="email" v-model="email" placeholder="info@guevarawebgraphics.com" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                  </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                  <div class="mb-4">
                                    <label for="phone" @keyup.enter="addStore" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Contact Number</label>
                                    <input type="text" name="phone" v-model="phone" placeholder="(+63) 977 051 7315" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none 
                                    rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                  </div>
                                </div>
                                 <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                      <label for="fax" @keyup.enter="addStore" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">FAX</label>
                                      <input type="text" name="fax" v-model="fax" placeholder="" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none 
                                    rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                    </div>
                                  </div>
                                
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                  <div class="mb-4">
                                    <label for="address" 
                                   
                                 
                                    class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Address</label>
                                    <input type="text"    
                                    v-model="address"  
                                    name="address" 
                                     @keyup.enter="addStore"  
                                    placeholder="San Diego, California US 92121" 
                                    class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                  </div>
                                </div>
                              </div>
                              <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent ">
                            
                              <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Description</p>
                              <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                                  <div class="mb-4">
                                    <label for="description" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">About The Store</label>
                                    <textarea name="description" 
                                    @keyup.enter="addStore" 
                                    v-model="description"
                                    class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease 
                                    block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 
                                    py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></textarea>
                                  </div>
                                </div>
                              </div>


                              
                              <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                                  <div class="mb-4">
                                   <button class="inline-block w-full px-8 py-2 font-bold leading-normal text-center text-white 
                                   align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md select-none 
                                   bg-150 bg-x-25 text-xs hover:shadow-xs hover:-translate-y-px" target="_blank" @click="addStore">Submit</button>
                                  </div>
                                </div>
                              </div>


                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>

      </div>
    </main>


  </section>
</template>

<script>
import Header from "../layouts/Header.vue";
import axios from 'axios';
import Swal from 'sweetalert2';
const baseUrl = 'http://127.0.0.1:8000/';

export default {
  name: "CreateStore",
  components: {
    headerComponent: Header,
  },
  data() {
    return {
      user_data: {},
      current_username: '',
      current_useremail: '',
      name: '',
      email: '',
      fax: '',
      address: '',
      phone: '',
      description: ''

    };
  },
  methods: {
    userData(response) {
      this.user_data = response.data;
      this.current_username = response.data.name;
      this.current_useremail = response.data.email;
    },
    async addStore() {
      try {

        const api_token = JSON.parse(localStorage.getItem("api_token"));
        axios.defaults.headers.common['Authorization'] = `Bearer ${api_token}`;
        const response = await axios.post(
          baseUrl + "api/create/store",
          {
            name: this.name,
            email:  this.email,
            fax: this.fax,
            address: this.address,
            phone: this.phone,
            description: this.description
          }
        );

        Swal.fire(
          'Success!',
          'Successfully stored!',
          'success'
        );
        

        console.log(response);

      } catch (error) {
        // Handle any network or server errors here
        console.error("An error occurred:", error);
        Swal.fire(
          'Error!',
          error.response.data.message,
          'error'
        );
        this.error = "An error occurred. Please try again later.";
      }
    },
  }
}

</script>

<style lang="scss" scoped>/* Your component's styles */</style>