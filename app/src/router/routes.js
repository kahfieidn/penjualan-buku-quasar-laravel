
const routes = [
  {
    path: '/admin',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: '', component: () => import('pages/admin/home/DataBuku.vue') },
      { path: 'input', component: () => import('pages/admin/home/InputDataBuku.vue') },
      { path: 'transaksi', component: () => import('pages/admin/transaksi/DataTransaksi.vue') }
    ]
  },
  {
    path: '/pembeli',
    component: () => import('layouts/PembeliLayout.vue'),
    children: [
      { path: '', component: () => import('pages/pembeli/DataBuku/DataBuku.vue') },
      { path: 'transaksi', component: () => import('pages/pembeli/transaksi/DataTransaksi.vue') }
    ]
  },
  {
    path: '/',
    component: () => import('layouts/LoginRegisLayout.vue'),
    children: [
      { path: 'auth/login', component: () => import('pages/users/LoginPage.vue') },
      { path: 'auth/register', component: () => import('pages/users/RegisterPage.vue') }
    ]
  },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: '/:catchAll(.*)*',
    component: () => import('pages/ErrorNotFound.vue')
  }
]

export default routes
