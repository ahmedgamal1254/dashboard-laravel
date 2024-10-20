import { Head } from '@inertiajs/vue3'

<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <Head>
        <link rel="stylesheet" type="text/css" href="/assets/admin/vendors/css/vendors-rtl.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/admin/vendors/css/extensions/toastr.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/admin/css-rtl/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/admin/css-rtl/bootstrap-extended.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/admin/css-rtl/colors.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/admin/css-rtl/components.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/admin/css-rtl/themes/dark-layout.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/admin/css-rtl/themes/bordered-layout.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/admin/css-rtl/themes/semi-dark-layout.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/admin/css-rtl/core/menu/menu-types/vertical-menu.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/admin/css-rtl/pages/app-ecommerce.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/admin/css-rtl/plugins/extensions/ext-component-toastr.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/admin/css-rtl/custom-rtl.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/admin/css-rtl/style-rtl.css">
    </Head>
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row"></div>
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-md-4 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 m-0">
                                <div class="card-header border-0">
                                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                                        <span>الدخول للوحة التحكم </span>
                                    </h6>
                                </div>

                                <div class="card-content">
                                    <div class="card-body">
                                        <slot />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</template>
