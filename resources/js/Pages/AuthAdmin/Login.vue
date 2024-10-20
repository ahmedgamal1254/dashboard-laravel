<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Log in" />
        <form class="form-horizontal form-simple" action="form.submit.prevent" method="post" novalidate>
            <fieldset class="form-group position-relative has-icon-left mb-0">
                <input type="text" name="email"
                        class="form-control form-control-lg input-lg"
                        value="" id="email" placeholder="أدخل البريد الالكتروني ">
                <div class="form-control-position">
                    <i class="ft-user"></i>
                </div>
                <span class="text-danger"> </span>
            </fieldset>
            <fieldset class="form-group position-relative has-icon-left">
                <input type="password" name="password"
                        class="form-control form-control-lg input-lg"
                        id="user-password"
                        placeholder="أدخل كلمة المرور">
                <div class="form-control-position">
                    <i class="la la-key"></i>
                </div>
                <span class="text-danger"> </span>
            </fieldset>
            <div class="form-group row">
                <div class="col-md-6 col-12 text-center text-md-left">
                    <fieldset>
                        <input type="checkbox" name="remember_me" id="remember-me"
                                class="chk-remember">
                        <label for="remember-me">تذكر دخولي</label>
                    </fieldset>
                </div>
            </div>
            <button type="submit" class="btn btn-info btn-lg btn-block"><i
                    class="ft-unlock"></i>
                دخول
            </button>
        </form>
    </GuestLayout>
</template>
