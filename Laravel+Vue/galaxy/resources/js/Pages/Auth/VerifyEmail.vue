<script setup>
import { computed } from 'vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const props = defineProps({
    status: String,
});

const form = useForm({});

const submit = () => {
    form.post(route('verification.send'));
};

const verificationLinkSent = computed(() => props.status === 'verification-link-sent');
</script>

<template>
    <Head title="Email Verification" />

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

                            <BCardBody class="p-4">
                                <div class="mb-4">
                                    <div class="avatar-lg mx-auto">
                                        <div class="avatar-title bg-light text-primary display-5 rounded-circle">
                                            <i class="ri-mail-line"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-2 mt-4">
                                    <div class="text-muted text-center mb-4 mx-lg-3">
                                        <h4 class="">Verify Your Email</h4>
                                        <div class="text-sm text-muted">
                                            Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.
                                        </div>
                                    </div>

                                    <div v-if="verificationLinkSent" class="mb-4 alert alert-success text-sm text-success">
                                        A new verification link has been sent to the email address you provided in your profile settings.
                                    </div>

                                    <form @submit.prevent="submit">
                                        <div class="w-100 mb-3">
                                            <BButton variant="success" type="submit" class="w-100" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">Resend Verification Email</BButton>
                                        </div>

                                        <div>
                                            <Link :href="route('profile.show')" class="text-sm me-2 align-middle btn-link text-decoration-underline">
                                            Edit Profile</Link>

                                            <Link :href="route('logout')" method="post" class="text-sm align-middle btn-link text-decoration-underline">
                                            Log Out
                                            </Link>
                                        </div>
                                    </form>
                                </div>
                            </BCardBody>
                        </BCard>

                        <div class="mt-4 text-center">
                            <p class="mb-0">Didn't receive a code ?
                                <Link :href="route('login')" class="fw-semibold text-primary text-decoration-underline">Resend</Link>
                            </p>
                        </div>

                    </BCol>
                </BRow>
            </BContainer>
        </div>

        <footer class="footer">
            <BContainer>
                <BRow>
                    <BCol lg="12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy; {{ new Date().getFullYear() }} Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                        </div>
                    </BCol>
                </BRow>
            </BContainer>
        </footer>
    </div>
</template>
