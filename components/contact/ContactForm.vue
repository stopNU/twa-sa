<template>
    <div class="form">
        <ValidationObserver v-slot="{ invalid }">
            <form name="contact" @submit.prevent="formSubmit">
                
                <div class="input-wrapper">
                    <img class="" alt="User icon" loading="lazy"
                        srcset="
                            ~/assets/icons/TWA-Icon-User@2x.png 2x,
                            ~/assets/icons/TWA-Icon-User.png 1x"
                        src="~/assets/icons/TWA-Icon-User.png">
                    <ValidationProvider
                        v-slot="{
                            classes,
                            errors
                        }"
                        name="name"
                        rules="required">
                        <el-input placeholder="Name" :class="classes" name="name" id="name" v-model="form.name"></el-input>
                        <span class="error">{{ errors[0] }}</span>
                    </ValidationProvider>
                </div>

                <div class="input-wrapper">
                    <img class="" alt="Email icon" loading="lazy"
                        srcset="
                            ~/assets/icons/TWA-Icon-Email@2x.png 2x,
                            ~/assets/icons/TWA-Icon-Email.png 1x"
                        src="~/assets/icons/TWA-Icon-Email.png">
                    <ValidationProvider
                        v-slot="{
                            classes,
                            errors
                        }"
                        name="email"
                        rules="required:email">
                        <el-input placeholder="Email" :class="classes" name="email" id="email" v-model="form.email"></el-input>
                        <span class="error">{{ errors[0] }}</span>
                    </ValidationProvider>
                </div>

                <div class="input-wrapper">
                    <img class="" alt="Phone icon" loading="lazy"
                        srcset="
                            ~/assets/icons/TWA-Icon-Phone@2x.png 2x,
                            ~/assets/icons/TWA-Icon-Phone.png 1x"
                        src="~/assets/icons/TWA-Icon-Phone.png">
                    <ValidationProvider
                        v-slot="{
                            classes,
                            errors
                        }"
                        name="phone"
                        rules="phone">
                        <el-input placeholder="Phone" :class="classes" name="phone" id="phone" v-model="form.phone"></el-input>
                        <span class="error">{{ errors[0] }}</span>
                    </ValidationProvider>
                </div>

                <div class="input-wrapper">
                    <img class="" alt="Company icon" loading="lazy"
                        srcset="
                            ~/assets/icons/TWA-Icon-Company@2x.png 2x,
                            ~/assets/icons/TWA-Icon-Company.png 1x"
                        src="~/assets/icons/TWA-Icon-Company.png">
                    <el-input placeholder="Company" name="company" id="company" v-model="form.company"></el-input>
                </div>
                
                <div class="input-wrapper">
                    <img class="" alt="Country icon" loading="lazy"
                        srcset="
                            ~/assets/icons/TWA-Icon-Country@2x.png 2x,
                            ~/assets/icons/TWA-Icon-Country.png 1x"
                        src="~/assets/icons/TWA-Icon-Country.png">
                    <el-select v-model="form.country" placeholder="Select">
                        <el-option
                            v-for="item in options"
                            :key="item.country"
                            :label="item.country"
                            :value="item.country">
                        </el-option>
                    </el-select>
                </div>
                
                <div class="input-wrapper">
                    <img class="" alt="Message icon" loading="lazy"
                        srcset="
                            ~/assets/icons/TWA-Icon-Message@2x.png 2x,
                            ~/assets/icons/TWA-Icon-Message.png 1x"
                        src="~/assets/icons/TWA-Icon-Message.png">
                    <el-input
                        type="textarea"
                        :rows="2"
                        placeholder="Message"
                        name="message" id="message" v-model="form.message">
                    </el-input>
                </div>
                <button type="submit" class="btn outline" :disabled="invalid">Send message</button>
            </form>
        </ValidationObserver>
    </div>
</template>

<script>
import countrylist from './countries.json'

export default {
    data: () => ({
        form: {
            name: '',
            email: '',
            message: '',
            phone: '',
            company: '',
            country: ''
        },
        options: countrylist,
    }),
    methods: {
        openCenter() {
            this.$message({
                message: 'Centered text',
                center: true
            });
        },
        formSubmit(e) {
            e.preventDefault()

            var params = new URLSearchParams()
            params.append('name', this.form.name)
            params.append('email', this.form.email)
            params.append('message', this.form.message)
            params.append('phone', this.form.phone)
            params.append('company', this.form.company)
            params.append('country', this.form.country)
            this.$axios
                .$post(
                    "https://twa-sa.com/mail.php",
                    params,
                    {
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        }
                    })
                .then(res => {
                    this.$message.success('Form successfully send!')
                    thie.clearInputs()
                })
                .catch(error => {
                    console.log(error.response.data.error)
                    this.$message.error('Error sending - Please use info@twa-sa.com instead.')
                });   
        },
        clearInputs(){
            this.form.name = '';
            this.form.email = '';
            this.form.message = '';
            this.form.phone = '';
            this.form.company = '';
            this.form.country = '';
        }
    }
}
</script>

<style scoped lang="scss">
    .input-wrapper{
        display: grid;
        grid-template-columns: 20px 1fr;
        column-gap: $elements-spacing/2;
        align-items: center;
        margin-bottom: $elements-spacing/2;
    }
    .form{
        height: 100%;
        max-width: 500px;
        @media screen and (max-width: $media-mobile) {
            max-width: none;
        }
    }
    .error{
        color: $color-error;
        text-transform: capitalize;
        font-size: 14px;
    }
</style>
