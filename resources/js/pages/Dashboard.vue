<template>
    <section class="page--dashboard">

      <headerComponent @userData="userData"></headerComponent>
      
      <div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div>

      <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
        <!-- Navbar -->
        <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="false">
          <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
            <nav>
              <!-- breadcrumb -->
              <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                <li class="text-sm leading-normal">
                  <a class="text-white opacity-50" href="javascript:;">Dashboard</a>
                </li>
                <li class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']" aria-current="page">Stores</li>
              </ol>
              <h6 class="mb-0 font-bold text-white capitalize">Store Module</h6>
            </nav>

            <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
              <div class="flex items-center md:ml-auto md:pr-4">
               
              </div>
              <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                <li class="flex items-center">
                  <a href="/" class="block px-0 py-2 text-sm font-semibold text-white transition-all ease-nav-brand">
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
          <!-- table 1 -->

          <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
              <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                
                
                <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                  <div class="grid grid-flow-col auto-cols-max">
                    <div>
                       <h6 class="dark:text-white">Authors table</h6>
                    </div>
                    <div class="text-right">
                        <a class="inline-block px-5 py-2.5 font-bold leading-normal text-center text-white 
                        align-middle transition-all bg-transparent rounded-lg cursor-pointer text-sm ease-in 
                        shadow-md bg-150 bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl 
                        dark:from-slate-750 dark:to-gray-850 hover:shadow-xs active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25" href="/create-store"> <i class="fas fa-plus"> </i>&nbsp;&nbsp;Add New Store</a>
                    </div>
                  </div>
                </div>


                <div class="flex-auto px-0 pt-0 pb-2">
                  <div class="p-0 overflow-x-auto">
                    <table class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                      <thead class="align-bottom">
                        <tr>
                          <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Store</th>
                          <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Contact</th>
                          <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Address</th>
                          <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Date Creation</th>
                          <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                        </tr>
                      </thead>
                      <tbody id="store-table" v-for="tableData in tableData" :key="tableData.id">


                        <tr>
                          <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                            <div class="flex px-2 py-1">
                              <!-- <div>
                                <img src="../assets/img/team-2.jpg" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-9 w-9 rounded-xl" alt="user1" />
                              </div> -->
                              <div class="flex flex-col justify-center">
                                <h6 class="mb-0 text-sm leading-normal dark:text-white">{{ tableData.name }}</h6>
                                <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ tableData.email }}</p>
                              </div>
                            </div>
                          </td>
                          <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                            <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80">{{ tableData.phone }}</p>
                            <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ tableData.fax }}</p>
                          </td>
                          <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                            <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ tableData.address }}</p>
                            <!-- <span class="bg-gradient-to-tl from-emerald-500 to-teal-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Online</span> -->
                          </td>
                          <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                            <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ formatCreatedAt(tableData.created_at) }}</span>
                          </td>
                          <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                            <a :href="'edit-store/' + tableData.id" class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400"> Edit </a>
                          </td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>

                <div class="flex-auto px-0 pt-0 pb-2">
                  <div class="p-0 overflow-x-auto">
                     <div class="pagination">
                        <ul>
                          <li v-if="pagination.current_page > 1">
                            <a :href="pagination.prev_page_url">Previous</a>
                          </li>
                          <li v-for="page in pagination.last_page" :key="page">
                            <a :href="'dashboard?page=' + page" :class="page == currentPage ? 'active' : ''">{{ page }}</a>

                          </li>
                          <li v-if="pagination.current_page < pagination.last_page">
                            <a :href="pagination.next_page_url">Next</a>
                          </li>
                        </ul>
                      </div>


                  </div>
                </div>


              </div>
            </div>
          </div>

          <!-- card 2 -->

          
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
    name: "Dashboard",
    components: {
      headerComponent: Header,
    },
    data() {
      return {
        user_data: {},
        current_username: '',
        current_useremail: '',
        tableData: [],
        pagination: Object
      };
    },
  methods: {
      formatCreatedAt(created_at) {
          const date = new Date(created_at);
          const options = { year: 'numeric', month: 'short', day: 'numeric', hour: '2-digit', minute: '2-digit', second: '2-digit' };
          return date.toLocaleDateString('en-US', options);
        },
        changePage(page) {
          // Emit an event to the parent component to change the page
          this.$emit('page-change', page);
        },
        
        userData(response) {
          this.user_data = response.data;
          this.current_username = response.data.name;
          this.current_useremail = response.data.email;
        },

        getStore() {
          const api_token = JSON.parse(localStorage.getItem("api_token"));
          axios.defaults.headers.common['Authorization'] = `Bearer ${api_token}`;
          axios.get(baseUrl + "api/stores")
          .then((response) => {
            if ( response.status == 200 ) {
              this.tableData = response.data.data.data;
              this.pagination = response.data.data;
              console.log(response.data.data);
            }
          })
          .catch((error) => {
            console.error('Error:', error);
            return error;
          });
        }
    },

  mounted() {
    this.getStore();
  }
}

</script>

<style lang="scss" scoped>
.pagination {
  margin-top: 20px;
  text-align: center;
}

.pagination ul {
  list-style: none;
  padding: 0;
}

.pagination ul li {
  display: inline-block;
  margin-right: 10px;
}

.pagination a {
  text-decoration: none;
  padding: 10px 15px;
  color: #333;
  border-radius: 50%;
}

.pagination a.active {
  color: #fff;
  background-color: #4299e1;

}
</style>