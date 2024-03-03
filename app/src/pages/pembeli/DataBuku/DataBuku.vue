<template>
    <q-page>
      <div class="q-pa-md">
        <div class="row">
          <div class="col-md-5 col-xs-12 q-pa-md">
            <q-card flat class="bg-white text-blue-grey-14">
              <q-card-section>
                <div class="text-h6">
                  Pemrograman 3
                </div>
              </q-card-section>
              <div >
                <q-card-section class="row items-center justify-center">
                  <q-img spinner-color="white" style="height: 250px; max-width: 50%" placeholder-src="statics/book.png" src="statics/book.png"/>
                </q-card-section>
              </div>
              <q-card-section>
                <div>
                  Harga : Rp.250000
                </div>
              </q-card-section>
              <q-card-section>
                <q-btn unelevated color="teal" icon="add_shopping_cart" no-caps label="Tambah Ke Keranjang"></q-btn>
                <q-btn rounded flat icon="delete" label="Hapus Buku" unelevated no-caps color="negative"></q-btn>
              </q-card-section>
            </q-card>
          </div>
          <div class="col-md-5 col-xs-12 q-pa-md">
            <q-card flat class="bg-white text-blue-grey-14">
              <q-card-section>
                <div class="text-h6">
                  Prak Pemrograman 3
                </div>
              </q-card-section>
              <q-card-section class="row items-center justify-center">
                <q-img spinner-color="white" style="height: 250px; max-width: 50%" placeholder-src="statics/book.png" src="statics/book.png"/>
              </q-card-section>
              <q-card-section>
                <div>
                  Harga : Rp.350000
                </div>
              </q-card-section>
              <q-card-section>
                <q-btn unelevated color="teal" icon="add_shopping_cart" no-caps label="Tambah Ke Keranjang"></q-btn>
                <q-btn rounded flat icon="delete" label="Hapus Buku" unelevated no-caps color="negative"></q-btn>
              </q-card-section>
            </q-card>
          </div>
        </div>
      </div>
    </q-page>
  </template>
   
  <script>
  export default {
    name: 'DataBuku'
  }
  </script>
   
  <style scoped>
   
  </style>
    