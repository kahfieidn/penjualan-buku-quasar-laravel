<template>
  <q-page>
    <div class="q-pa-md">
      <q-table
        flat
        bordered
        title="Treats"
        :rows="rows"
        :columns="columns"
        row-key="id"
        :filter="filter"
        :loading="loading"
      >
        <template v-slot:top>
          <q-card-section class="text-blue-grey-14">
            <div class="text-h5">Data Transaksi</div>
          </q-card-section>

          <!-- <q-btn color="primary" :disable="loading" label="Tambah Data Buku" to="input" /> -->
          <!-- <q-btn v-if="rows.length !== 0" class="q-ml-sm" color="primary" :disable="loading" label="Remove row" @click="removeRow" /> -->
          <q-space />
          <q-input
            borderless
            dense
            debounce="300"
            color="primary"
            v-model="filter"
          >
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
import { ref } from "vue";

const columns = [
  {
    name: "kode_transaksi",
    required: true,
    label: "Kode Transaksi",
    align: "left",
    field: (row) => row.kode_transaksi,
    format: (val) => `${val}`,
    sortable: true,
  },
  {
    name: "nama_pembeli",
    align: "center",
    label: "Nama Pembeli",
    field: "nama_pembeli",
    sortable: true,
  },
  {
    name: "judul_buku",
    align: "center",
    label: "Judul Buku",
    field: "judul_buku",
    sortable: true,
  },
  {
    name: "harga_buku",
    align: "center",
    label: "Harga Buku",
    field: "harga_buku",
  },
  {
    name: "jumlah_beli",
    align: "center",
    label: "Jumlah Beli",
    field: "jumlah_beli",
  },
];

const originalRows = [
  {
    kode_transaksi: "Trans-02",
    nama_pembeli: "Jarwo",
    judul_buku: "Babibu",
    harga_buku: "25000",
    jumlah_beli: "1",
  },
  {
    kode_transaksi: "Trans-34",
    nama_pembeli: "Lisa",
    judul_buku: "Bubu",
    harga_buku: "100000",
    jumlah_beli: "4",
  },
];

export default {
  setup() {
    const loading = ref(false);
    const filter = ref("");
    const rowCount = ref(10);
    const rows = ref([...originalRows]);

    return {
      columns,
      rows,

      loading,
      filter,
      rowCount,

      // emulate fetching data from server
      addRow() {
        loading.value = true;
        setTimeout(() => {
          const index = Math.floor(Math.random() * (rows.value.length + 1)),
            row = originalRows[Math.floor(Math.random() * originalRows.length)];

          if (rows.value.length === 0) {
            rowCount.value = 0;
          }

          row.id = ++rowCount.value;
          const newRow = { ...row }; // extend({}, row, { name: `${row.name} (${row.__count})` })
          rows.value = [
            ...rows.value.slice(0, index),
            newRow,
            ...rows.value.slice(index),
          ];
          loading.value = false;
        }, 500);
      },

      removeRow() {
        loading.value = true;
        setTimeout(() => {
          const index = Math.floor(Math.random() * rows.value.length);
          rows.value = [
            ...rows.value.slice(0, index),
            ...rows.value.slice(index + 1),
          ];
          loading.value = false;
        }, 500);
      },
    };
  },
};
</script>
  