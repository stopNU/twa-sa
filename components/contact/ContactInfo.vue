<template>
    <div class="section-wrapper">
        <div class="white-bg">
            <div class="heading-line"><img src="~/assets/icons/twa-icon-headline-circle.png" alt="circle icon"></div>
        </div>
        <div class="section-content">
            <div class="info">
                <h2>Get in Touch</h2>
                
                <div class="info-box">
                    <h5>Email</h5>
                    <p>info@twa-sa.com</p>
                </div>

                <div class="info-box">
                    <h5>Telephone</h5>
                    <p>+27 11 568 3306</p>
                </div>
                
                <div class="info-box">
                    <h5>Address</h5>
                    <p>
                        11 Viscount Road<br>
                        Viscount Office Park<br>
                        Bedfordview<br>
                        Johannesburg<br>
                        South Africa<br>
                        2007
                    </p>
                </div>
            </div>
            <div class="form-wrapper">
                <ContactForm />
            </div>
        </div>
        <div class="neutral-bg hide-mobile"></div>
    </div>
</template>

<script>
export default {

}
</script>

<style scoped lang="scss">
    .section-wrapper{
        column-gap: 0;
        .section-content{
            display: grid;
            grid-template-columns: 2fr 4fr;
            @media screen and (max-width: $media-mobile) {
                grid-template-columns: 1fr;
            }
        }
    }
    .white-bg, .info{
        background-color: $color-white;
        .heading-line{
            margin-left: -$side-padding;
            @media screen and (max-width: $inner-wrapper+$side-padding*2) {
                margin-left: 0;
            }
        }
    }
    .info{
        padding-bottom: $section-spacing;
        @media screen and (max-width: $media-mobile) {
            padding-bottom: 0;
        }
        h2{
            margin-bottom: $elements-spacing;
            @media screen and (max-width: $media-mobile) {
                margin-bottom: $elements-spacing/2;
            }
        }
        .info-box{
            h5{
                font-weight: 300;
                margin-bottom: 20px;
            }
            p{
                font-size: 1.125rem; //18px
            }
            &:not(:last-child){
                margin-bottom: $elements-spacing/2;
            }
        }
    }
    .form-wrapper{
        background-color: $bg-neutral;
        padding: $section-spacing $side-padding $section-spacing $section-spacing;
        @media screen and (max-width: $media-mobile) {
            background-color: transparent;
            padding: $elements-spacing/2 0;
        }
    }
    .white-bg, .info{
        padding-top: $section-spacing;
        @media screen and (max-width: $media-mobile) {
            padding-top: $elements-spacing/2;
        }
    }
    
</style>
