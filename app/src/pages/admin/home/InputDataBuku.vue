<template xmlns:v-slot="http://www.w3.org/1999/XSL/Transform">
    <q-page padding class="items-center-justify-center bg-grey-3">
      <q-card flat class="bg-white q-pa-md">
        <span class="text-h5 text-weight-light q-pa-md">
          <span class="text-blue-grey-14">Tambah Data Buku</span>
        </span>
        <div class="q-pa-md">
          <q-form
            class="q-gutter-md"
          >
   
            <q-input
              label="Kode Buku"
              lazy-rules
              v-model="kode_buku"
              :rules="[
              val => val !== null && val !== '' || 'Kode Buku Dibutuhkan'
              ]">
              <template v-slot:append>
                <q-icon name="dns"/>
              </template>
            </q-input>

            <q-input
              label="Judul Buku"
              lazy-rules
              v-model="judul_buku"
              :rules="[
              val => val !== null && val !== '' || 'Judul Buku Dibutuhkan'
              ]">
              <template v-slot:append>
                <q-icon name="title"/>
              </template>
            </q-input>

            <q-input
              label="Penerbit Buku"
              lazy-rules
              v-model="penerbit"
              :rules="[
              val => val !== null && val !== '' || 'Penerbit Buku Dibutuhkan'
              ]">
              <template v-slot:append>
                <q-icon name="title"/>
              </template>
            </q-input>

            <q-input
              label="Pengarang Buku"
              lazy-rules
              v-model="pengarang"
              :rules="[
              val => val !== null && val !== '' || 'Pengarang Buku Dibutuhkan'
              ]">
              <template v-slot:append>
                <q-icon name="title"/>
              </template>
            </q-input>

            <q-input
              label="Tahun Terbit"
              lazy-rules
              v-model="tahun_terbit"
              :rules="[
              val => val !== null && val !== '' || 'Tahun Terbit Dibutuhkan'
              ]">
              <template v-slot:append>
                <q-icon name="today"/>
              </template>
            </q-input>
   
            <div>
              <q-btn
                unelevated
                icon="add"
                label="Tambah Data Buku"
                style="height: 50px"
                color="primary"/>
            </div>
          </q-form>
        </div>
      </q-card>
    </q-page>
  </template>
   
  <script>
  export default {
    data () {
      return {
        kode_buku: null,
        judul_buku: null,
        penerbit: null,
        pengarang: null,
        tahun_terbit: null
      }
    }
  }
  </script>
   
  <style scoped>
   
  </style>
  