<template>
    <div class="section-wrapper neutral-bg with-padding">
        <div>
            <div class="heading-line"><img src="~/assets/icons/twa-icon-headline-circle.png" alt="circle icon"></div>
        </div>
        <div class="section-content">
            <h2>Partner Suppliers and Solution Providers</h2>
            <p>TWA is the authorised distributor and/or representative for a number of OEMs offering parts, components and supplies to the aviation industry. Some of the companies we work closely with include:</p>
            
            
            
            <div class="partners">
                <div v-swiper="swiperOption">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="" alt="Logo 511"
                                srcset="
                                    ~/assets/logos/partner-logos/Logo-511.png 2x,
                                    ~/assets/logos/partner-logos/Logo-511.png 1x"
                                src="~/assets/logos/partner-logos/Logo-511.png">
                        </div>
                        <div class="swiper-slide">
                            <img class="" src="~/assets/logos/partner-logos/Logo-Aero-Sense.png" alt="Logo Aero Sense"> 
                        </div>
                        <div class="swiper-slide">
                            <img class="" src="~/assets/logos/partner-logos/Logo-Aeroshell.png" alt="Logo Aeroshell">
                        </div>
                        <div class="swiper-slide">
                            <img class="" src="~/assets/logos/partner-logos/Logo-AH.png" alt="Logo Aero Sense"> 
                        </div>
                    </div>
                </div>
                <!--<img class="" alt="Logo 511"
                    srcset="
                        ~/assets/logos/partner-logos/logo-511.jpg 2x,
                        ~/assets/logos/partner-logos/logo-511.jpg 1x"
                    src="~/assets/logos/partner-logos/logo-511.jpg">
                <img class="" src="~/assets/logos/partner-logos/logo-aero-sense.jpg" alt="Logo Aero Sense">
                <img class="" src="~/assets/logos/partner-logos/logo-aeroshell.jpg" alt="Logo Aeroshell">
                <img class="" src="~/assets/logos/partner-logos/logo-ah.jpg" alt="Logo AH">
                <img class="" src="~/assets/logos/partner-logos/logo-barry-controls.jpg" alt="Logo Barry Controls">
                <img class="" src="~/assets/logos/partner-logos/logo-bombardier.jpg" alt="Logo Bombadier">
                <img class="" src="~/assets/logos/partner-logos/logo-bose.jpg" alt="Logo Bose">
                <img class="" src="~/assets/logos/partner-logos/logo-capewell.jpg" alt="Logo Capewell">
                <img class="" src="~/assets/logos/partner-logos/logo-cobra-systems.jpg" alt="Logo Cobra Systems">-->
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            swiperOption: {
                loop: true,
                slidesPerView: 6,
                loopedSlides: 1,
                spaceBetween: 100,
                breakpoints: {
                    1024: {
                    }
                }
            },
        }
    }
}
</script>

<style scoped lang="scss">
    .partners{
        margin-top: $elements-spacing;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(214px, 1fr));
        column-gap: $elements-spacing/2;
        row-gap: $elements-spacing/2;
        img{
            width: 100%;
        }
    }
    h2{
        margin-bottom: $elements-spacing;
    }
</style>
