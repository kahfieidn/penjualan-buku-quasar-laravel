<template>
    <q-layout view="lHh Lpr lFf">
   
      <q-header class="bg-white text-blue-grey-6">
        <q-toolbar>
          <q-btn dense flat round icon="menu" @click="left = !left" />
   
          <q-toolbar-title></q-toolbar-title>
          <q-btn flat round dense icon="person" style="font-size: 20px;">
            <q-menu>
              <div class="row no-wrap q-pa-lg">
                <div class="column">
                  <q-item-label class="text-h6">User</q-item-label>
                  <q-linear-progress class="q-mb-lg" :value="100" color="grey-4" style="height: 2px"/>
                  <div class="items-center">
                    <div class="text-bold items-center">13421054</div>
                    <div>Dwi Romadon</div>
                  </div>
                </div>
   
                <q-separator vertical inset class="q-mx-lg"></q-separator>
   
                <div class="column items-center">
                  <q-btn flat round dense>
                    <q-avatar size="72px">
                      <img src="https://source.unsplash.com/random/300×300">
                    </q-avatar>
                  </q-btn>
   
                  <div class="text-subtitle1 q-mt-md q-mb-xs"></div>
                  <div class="text-subtitle1 q-mt-md q-mb-xs"></div>
                  <div class="text-subtitle1 q-mt-md q-mb-xs"></div>
                  <q-btn
                    color="primary"
                    label="Keluar"
                    unelevated
                    size="sm"
                    v-close-popup>
                    <q-tooltip>Keluar disini..</q-tooltip>
                  </q-btn>
                </div>
              </div>
            </q-menu>
          </q-btn>
        </q-toolbar>
      </q-header>
   
      <q-drawer
        v-model="left"
        :breakpoint="500"
        show-if-above
        content-class="bg-white text-teal-10"
      >
        <q-scroll-area class="fit">
          <q-list>
            <q-item style="height: 50px;" class="bg-white text-bold">
              <q-item-section>
                Aplikasi Penjualan Buku
              </q-item-section>
            </q-item>
            <q-item class="justify-center text-center q-mb-md q-pt-md">
              <div>
                <q-avatar size="100px" class="q-mb-md">
                  <img src="https://source.unsplash.com/random/300×300" alt="">
                </q-avatar>
                <div class="text-weight-bold">13421054</div>
                <div>Dwi Romadon</div>
              </div>
            </q-item>
            <q-item-label
              header
              class="text-grey-8"
            >
              Data Buku
            </q-item-label>
            <q-item clickable active-class="active" exact v-ripple to="/pembeli">
              <q-item-section avatar>
                <q-icon name="table_chart" />
              </q-item-section>
              <q-item-section>
                Data Buku
              </q-item-section>
            </q-item>
  
  
            <q-item-label
              header
              class="text-grey-8"
            >
              Transaksi
            </q-item-label>
            <q-item clickable active-class="active" exact v-ripple to="/pembeli/transaksi">
              <q-item-section avatar>
                <q-icon name="table_chart" />
              </q-item-section>
              <q-item-section>
                Data Transaksi
              </q-item-section>
            </q-item>
   
          </q-list>
        </q-scroll-area>
      </q-drawer>
      <q-page-container class="bg-grey-2">
        <router-view />
      </q-page-container>
    </q-layout>
  </template>
   
  <script>
   
  export default {
    name: 'PembeliLayout',
   
    data () {
      return {
        left: false
      }
    }
  }
  </script>