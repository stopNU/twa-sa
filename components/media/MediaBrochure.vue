<template>
    <div class="section-wrapper with-padding">
        <div class="section-content media">
            <div class="brochure">
                <h6 class="big">Company Brochure</h6>
                <picture>
                    <source media="(min-width: 767px)"
                        srcset="
                            ~/assets/images/media/brochures/transworld-company-brochure@2x.png 2x,
                            ~/assets/images/media/brochures/transworld-company-brochure.png 1x" />
                    <source srcset="~/assets/images/media/brochures/transworld-company-brochure-mob.png" />
                    <img src="~/assets/images/media/brochures/transworld-company-brochure.png" alt="Brochure" />
                </picture>
                <div class="btn outline">
                    <a target="blank" href="/twabrochure.pdf">SEE BROCHURE</a>
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
    .section-wrapper{
        padding-top: 0px;
    }
    .brochure{
        @media screen and (max-width: $media-mobile) {
            text-align: center;
        }
        img{
            margin: 20px 0 50px;
            @media screen and (max-width: $media-mobile) {
                margin: 30px 0;
                max-height: 300px;
            }
        }
        h6{
            @media screen and (max-width: $media-mobile) {
                text-align: center;
                font-size: 1.375rem;
                font-family: $font-headlines-alt;
            }
        }
    }
</style>
