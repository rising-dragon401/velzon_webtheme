<script>
import { Link, Head } from '@inertiajs/vue3';
import animationData from "@/Components/widgets/hzomhqxz.json";
import Lottie from "@/Components/widgets/lottie.vue";

export default {
  data() {
    return {
      defaultOptions: {
        animationData: animationData
      },
    };
  },
  components: {
    lottie: Lottie,
    Link, Head
  },
};
</script>

<template>
  <Head title="Logout" />

  <div class="auth-page-wrapper pt-5">
    

    <div class="auth-page-content">
      <BContainer>
        <BRow>
          <BCol lg="12">
            <div class="text-center mt-sm-5 mb-4 text-white-50">
              <div>
                <Link href="/" class="d-inline-block auth-logo">
                  <img src="@assets/images/logo-light.png" alt="" height="20">
                </Link>
              </div>
              <p class="mt-3 fs-15 fw-medium">Premium Admin & Dashboard Template</p>
            </div>
          </BCol>
        </BRow>

        <BRow class="justify-content-center">
          <BCol md="8" lg="6" xl="5">
            <BCard no-body class="mt-4 card-bg-fill">
              <BCardBody class="p-4 text-center">
                <lottie colors="primary:#8c68cd,secondary:#4788ffs" :options="defaultOptions" :height="180"
                  :width="180" />
                <div class="mt-4 pt-2">
                  <h5>You are Logged Out</h5>
                  <p class="text-muted">Thank you for using <span class="fw-semibold">velzon</span>
                    admin template</p>
                  <div class="mt-4">
                    <Link href="/auth/signin-basic" class="btn btn-primary w-100">Sign In
                    </Link>
                  </div>
                </div>
              </BCardBody>
            </BCard>

          </BCol>
        </BRow>
      </BContainer>
    </div>

    <footer class="footer">
      <BContainer>
        <BRow>
          <BCol lg="12">
            <div class="text-center">
              <p class="mb-0 text-muted">&copy; {{ new Date().getFullYear() }} Velzon. Crafted with <i
                  class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
            </div>
          </BCol>
        </BRow>
      </BContainer>
    </footer>
  </div>
</template>