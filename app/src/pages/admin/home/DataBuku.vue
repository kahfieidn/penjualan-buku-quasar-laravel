<template>
  <q-page>
 
    <div class="q-pa-md">
    <q-table
      flat bordered
      title="Treats"
      :rows="rows"
      :columns="columns"
      row-key="id"
      :filter="filter"
      :loading="loading"
    >

      <template v-slot:top>
        <q-btn color="primary" :disable="loading" label="Tambah Data Buku" to="/admin/input" />
        <!-- <q-btn v-if="rows.length !== 0" class="q-ml-sm" color="primary" :disable="loading" label="Remove row" @click="removeRow" /> -->
        <q-space />
        <q-input borderless dense debounce="300" color="primary" v-model="filter">
          <template v-slot:append>
            <q-icon name="search" />
          </template>
        </q-input>
      </template>

    </q-table>
  </div>

    
  </q-page>
</template>

<script>
import { ref } from 'vue'

const columns = [
  {
    name: 'kode_buku',
    required: true,
    label: 'Kode Buku',
    align: 'left',
    field: row => row.kode_buku,
    format: val => `${val}`,
    sortable: true
  },
  { name: 'judul_buku', align: 'center', label: 'Judul Buku', field: 'judul_buku', sortable: true },
  { name: 'penerbit',  align: 'center',label: 'Penerbit', field: 'penerbit', sortable: true },
  { name: 'pengarang',  align: 'center',label: 'Pengarang', field: 'pengarang' },
  { name: 'tahun_terbit',  align: 'center', label: 'Tahun Terbit', field: 'tahun_terbit' },
]

const originalRows = [
  {
    kode_buku: 'K99AS',
    judul_buku: 'Habis Gelap Timbullah Gerhana',
    penerbit: 'Gramedia',
    pengarang: 'Kahfie IDN',
    tahun_terbit: '2019',
  },
  {
    kode_buku: 'K91AS',
    judul_buku: 'Melakukan Yang Terbaik Di Setiap Saat',
    penerbit: 'Gramedia',
    pengarang: 'Kahfie IDN',
    tahun_terbit: '2019',
  },
]

export default {
  setup () {
    const loading = ref(false)
    const filter = ref('')
    const rowCount = ref(10)
    const rows = ref([...originalRows])

    return {
      columns,
      rows,

      loading,
      filter,
      rowCount,

      // emulate fetching data from server
      addRow () {
        loading.value = true
        setTimeout(() => {
          const
            index = Math.floor(Math.random() * (rows.value.length + 1)),
            row = originalRows[ Math.floor(Math.random() * originalRows.length) ]

          if (rows.value.length === 0) {
            rowCount.value = 0
          }

          row.id = ++rowCount.value
          const newRow = { ...row } // extend({}, row, { name: `${row.name} (${row.__count})` })
          rows.value = [ ...rows.value.slice(0, index), newRow, ...rows.value.slice(index) ]
          loading.value = false
        }, 500)
      },

      removeRow () {
        loading.value = true
        setTimeout(() => {
          const index = Math.floor(Math.random() * rows.value.length)
          rows.value = [ ...rows.value.slice(0, index), ...rows.value.slice(index + 1) ]
          loading.value = false
        }, 500)
      }
    }
  }
}
</script>
