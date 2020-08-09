<template>
    <div class="section-wrapper neutral-bg with-padding">
        <div class="section-content">
            <h6 class="big">The OEMs and manufacturers have trust and confidence in the quality of services offered by Transworld Aviation.</h6>
            <h4>This is sectors we operate in</h4>  
            <div class="sectors">
                <div class="sector">
                    <picture>
                        <source media="(min-width: 767px)"
                            srcset="
                                ~/assets/images/sectors/transworld-sector-civil-commercial-aviation@2x.png 2x,
                                ~/assets/images/sectors/transworld-sector-civil-commercial-aviation.png 1x" />
                        <source srcset="~/assets/images/sectors/transworld-sector-civil-commercial-aviation-mob.jpg" />
                        <img src="~/assets/images/sectors/transworld-sector-civil-commercial-aviation.png" alt="Commercial plane above the skies" />
                    </picture>
                    <div class="title">
                        <h5>CIVIL & COMMERCIAL AVIATION</h5>
                    </div>
                </div>

                <div class="sector">
                    <picture>
                        <source media="(min-width: 767px)"
                            srcset="
                                ~/assets/images/sectors/transworld-sector-business-corporate-aviation@2x.png 2x,
                                ~/assets/images/sectors/transworld-sector-business-corporate-aviation.png 1x" />
                        <source srcset="~/assets/images/sectors/transworld-sector-business-corporate-aviation-mob.jpg" />
                        <img src="~/assets/images/sectors/transworld-sector-business-corporate-aviation.png" alt="Private plane" />
                    </picture>
                    <div class="title">
                        <h5>BUSINESS & CORPORATE AVIATION</h5>
                    </div>
                </div>

                <div class="sector">
                    <picture>
                        <source media="(min-width: 767px)"
                            srcset="
                                ~/assets/images/sectors/transworld-sector-general-aviation@2x.png 2x,
                                ~/assets/images/sectors/transworld-sector-general-aviation.png 1x" />
                        <source srcset="~/assets/images/sectors/transworld-sector-general-aviation-mob.jpg" />
                        <img src="~/assets/images/sectors/transworld-sector-general-aviation.png" alt="Commercial airplane in the air" />
                    </picture>
                    <div class="title">
                        <h5>GENERAL AVIATION</h5>
                    </div>
                </div>

                <div class="sector">
                    <picture>
                        <source media="(min-width: 767px)"
                            srcset="
                                ~/assets/images/sectors/transworld-sector-military-aviation@2x.png 2x,
                                ~/assets/images/sectors/transworld-sector-military-aviation.png 1x" />
                        <source srcset="~/assets/images/sectors/transworld-sector-military-aviation-mob.jpg" />
                        <img src="~/assets/images/sectors/transworld-sector-military-aviation.png" alt="Three military planes" />
                    </picture>
                    <div class="title">
                        <h5>MILITARY AVIATION</h5>
                    </div>
                </div>

                <div class="sector">
                    <picture>
                        <source media="(min-width: 767px)"
                            srcset="
                                ~/assets/images/sectors/transworld-sector-helicopters-rotorcrafts@2x.png 2x,
                                ~/assets/images/sectors/transworld-sector-helicopters-rotorcrafts.png 1x" />
                        <source srcset="~/assets/images/sectors/transworld-sector-helicopters-rotorcrafts-mob.jpg" />
                        <img src="~/assets/images/sectors/transworld-sector-helicopters-rotorcrafts.png" alt="Helicopter" />
                    </picture>
                    <div class="title">
                        <h5>HELICOPTERS & ROTORCRAFTS</h5>
                    </div>
                </div>

                <div class="sector">
                    <picture>
                        <source media="(min-width: 767px)"
                            srcset="
                                ~/assets/images/sectors/transworld-sector-mro-services@2x.png 2x,
                                ~/assets/images/sectors/transworld-sector-mro-services.png 1x" />
                        <source srcset="~/assets/images/sectors/transworld-sector-mro-services-mob.jpg" />
                        <img src="~/assets/images/sectors/transworld-sector-mro-services.png" alt="Plane engine" />
                    </picture>
                    <div class="title">
                        <h5>MRO SERVICES</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style scoped lang="scss">
    .sectors{
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        column-gap: $elements-spacing;
        row-gap: $elements-spacing/2;
        margin-top: $elements-spacing;
        @media screen and (max-width: $media-tablet) {
            grid-template-columns: repeat(2, 1fr);
        }
        @media screen and (max-width: $media-mobile) {
            margin-top: $elements-spacing/2;
        }
        @media screen and (max-width: 650px) {
            grid-template-columns: repeat(1, 1fr);
        }
        .sector{
            
            img{
                width: 100%;
                height: 325px;
                display: block;
                @media screen and (max-width: $media-tablet) {
                    height: 250px;
                }
            }
            .title{
                display: flex;
                align-items: center;
                height: 90px;
                background-color: $color-white;
                box-shadow: 0px 3px 6px #00000029;
                top: -45px;
                left: 30px;
                position: relative;
                @media screen and (max-width: $media-tablet) {
                    height: 60px;
                    top: 0;
                    left: 0;
                }
                h5{
                    max-width: 100%;
                    margin: 0 auto;
                    text-align: center;
                    @media screen and (max-width: $media-tablet) {
                        font-size: 0.9375rem;
                    }
                }
            }
        }
    }
    h6{
        max-width: 580px;
        margin-bottom: 75px;
        @media screen and (max-width: $media-mobile) {
            margin-bottom: $elements-spacing/2;
        }
    }
</style>
