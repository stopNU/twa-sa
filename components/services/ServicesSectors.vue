<template>
    <div class="section-wrapper neutral-bg with-padding">
        <div class="section-content">
            <h6 class="big">The OEMs and manufacturers have trust and confidence in the quality of services offered by Transworld Aviation.</h6>
            <h4>This is sectors we operate in</h4>  
            <div class="sectors">
                <div class="sector">
                    <img class="" alt="Commercial plane above the skies"
                        srcset="
                            ~/assets/images/sectors/transworld-sector-civil-commercial-aviation.jpg 2x,
                            ~/assets/images/sectors/transworld-sector-civil-commercial-aviation.jpg 1x"
                        src="~/assets/images/sectors/transworld-sector-civil-commercial-aviation.jpg">
                    <div>
                        <h5>CIVIL & COMMERCIAL AVIATION</h5>
                    </div>
                </div>

                <div class="sector">
                    <img class="" alt="Private plane"
                        srcset="
                            ~/assets/images/sectors/transworld-sector-business-corporate-aviation.jpg 2x,
                            ~/assets/images/sectors/transworld-sector-business-corporate-aviation.jpg 1x"
                        src="~/assets/images/sectors/transworld-sector-business-corporate-aviation.jpg">
                    <div>
                        <h5>BUSINESS & CORPORATE AVIATION</h5>
                    </div>
                </div>

                <div class="sector">
                    <img class="" alt="Commercial airplane in the air"
                        srcset="
                            ~/assets/images/sectors/transworld-sector-general-aviation.jpg 2x,
                            ~/assets/images/sectors/transworld-sector-general-aviation.jpg 1x"
                        src="~/assets/images/sectors/transworld-sector-general-aviation.jpg">
                    <div>
                        <h5>GENERAL AVIATION</h5>
                    </div>
                </div>

                <div class="sector">
                    <img class="" alt="Three military planes"
                        srcset="
                            ~/assets/images/sectors/transworld-sector-military-aviation.jpg 2x,
                            ~/assets/images/sectors/transworld-sector-military-aviation.jpg 1x"
                        src="~/assets/images/sectors/transworld-sector-military-aviation.jpg">
                    <div>
                        <h5>MILITARY AVIATION</h5>
                    </div>
                </div>

                <div class="sector">
                    <img class="" alt="Helicopter"
                        srcset="
                            ~/assets/images/sectors/transworld-sector-helicopters-rotorcrafts.jpg 2x,
                            ~/assets/images/sectors/transworld-sector-helicopters-rotorcrafts.jpg 1x"
                        src="~/assets/images/sectors/transworld-sector-helicopters-rotorcrafts.jpg">
                    <div>
                        <h5>HELICOPTERS & ROTORCRAFTS</h5>
                    </div>
                </div>

                <div class="sector">
                    <img class="" alt="Plane engine"
                        srcset="
                            ~/assets/images/sectors/transworld-sector-mro-services.jpg 2x,
                            ~/assets/images/sectors/transworld-sector-mro-services.jpg 1x"
                        src="~/assets/images/sectors/transworld-sector-mro-services.jpg">
                    <div>
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
        column-gap: $elements-spacing/2;
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
            box-shadow: 0px 3px 6px #00000029;
            background-color: $color-white;
            img{
                width: 100%;
                height: 325px;
                @media screen and (max-width: $media-mobile) {
                    height: 275px;
                }
            }
            div{
                display: flex;
                align-items: center;
                height: 220px;
                @media screen and (max-width: $media-mobile) {
                    height: 85px;
                }
                h5{
                    max-width: 280px;
                    margin: 0 auto;
                    text-align: center;
                    @media screen and (max-width: $media-mobile) {
                        font-size: 0.9375rem;
                    }
                }
            }
            &:hover{
                background-color: $bg-brand;
                h5{
                    color: $color-white;
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
