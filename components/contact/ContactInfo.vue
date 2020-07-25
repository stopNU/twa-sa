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
            <div class="form">
                form
            </div>
        </div>
        <div class="neutral-bg"></div>
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
                //font-size: 1.5rem; //24px
            }
        }
    }
    .white-bg, .info{
        background-color: $color-white;
        .heading-line{
            margin-left: -$side-padding;
        }
    }
    .info{
        padding-bottom: $section-spacing;
        h2{
            margin-bottom: $elements-spacing;
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
    .form{
        background-color: $bg-neutral;
        padding: $section-spacing $side-padding $section-spacing $section-spacing;

    }
    .white-bg, .info{
        padding-top: $section-spacing;
    }
</style>
