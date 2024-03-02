<template>
  <q-layout view="hHr LpR lFf" class="bg-blue-grey-1">
    <q-page-container>
      <q-page class="row items-center justify-center" padding>
        <div class="row full-width">
          <div class="col-md-8 offset-md-2 col-xs-12 q-pl-md q-pr-md q-pt-sm">
            <q-card flat class="bg-white text-black">
              <div class="row">

                <div class="col-md-6 col-xs-12">
                  <div class="row q-pt-md q-pb-md bg-teal-5">
                    <div class="col-md-8 offset-2 col-xs-8">
                      <q-img
                        placeholder-src="src/statics/login.png"
                        src="src/statics/login.png"
                        :ratio="11 / 11"
                        spinner-color="white"
                        spinner-size="82px"
                      />
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-xs-12">
                  <div class="q-pa-md">
                    <q-form
                      @submit="onSubmit"
                      @reset="onReset"
                      class="q-gutter-md"
                    >
                      <q-input
                        filled
                        v-model="username"
                        label="Username"
                        lazy-rules
                        :rules="[
                          (val) =>
                            (val && val.length > 0) || 'Data tidak boleh kosong',
                        ]"
                      />

                      <q-input
                        filled
                        type="password"
                        v-model="password"
                        label="Password"
                        lazy-rules
                        :rules="[
                          (val) =>
                            (val && val.length > 0) || 'Data tidak boleh kosong',
                        ]"
                      />


                      <div>
                        <q-btn label="Login" type="submit" color="primary" />
                        <q-btn
                          label="Registrasi"
                          color="primary"
                          to="/auth/register"
                          flat
                          class="q-ml-sm"
                        />
                      </div>
                    </q-form>
                  </div>
                </div>

              </div>
            </q-card>
          </div>
        </div>
      </q-page>
    </q-page-container>
  </q-layout>
</template>

<script>
import { useQuasar } from "quasar";
import { ref } from "vue";

export default {
  setup() {
    const $q = useQuasar();

    const username = ref(null);
    const password = ref(null);

    return {
      username,
      password,

      onSubmit() {
          $q.notify({
            color: "green-4",
            textColor: "white",
            icon: "cloud_done",
            message: "Submitted",
          });
      },

      onReset() {
        username.value = null;
        password.value = null;
      },
    };
  },
};
</script>
