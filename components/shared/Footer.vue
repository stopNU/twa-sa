<template>
    <div class="bg-wrapper">
        <div class="inner-wrapper">
            <div class="logo-part">
                <img class="" alt="TransWorld logo"
                    srcset="
                        ~/assets/logos/transworld-logo-light.png 2x,
                        ~/assets/logos/transworld-logo-light.png 1x"
                    src="~/assets/logos/transworld-logo-light.png">
                <p class="white hint">
                    11 Viscount Road, Viscount Office Park Bedfordview, Johannesburg South Africa, 2007
                </p>
            </div>
            <div class="copyright">
                <p class="white hint">All logos, trademarks and registered trademarks are the property of their respective owners.</p>
                <div class="divider"></div>
                <p class="white hint">2020 © Transworld Aviation, South Africa. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</template>

<script>
  export default {
    data() {
      return {
       
      };
    },
    methods: {
      
    }
  }
</script>

<style scoped lang="scss">
    .bg-wrapper{
        background-color: $bg-brand;
        .inner-wrapper{
            padding: $elements-spacing 0 $elements-spacing/2;
            @media screen and (max-width: $media-mobile) {
                padding: $elements-spacing/2 $side-padding/2;
            }
        }
    }
    .copyright{
        text-align: center;
        .hint{
            font-size: 0.75rem;
        }
        .divider{
            margin: 10px 0;
        }
    }
    .logo-part{
        text-align: center;
        margin-bottom: 80px;
        @media screen and (max-width: $media-mobile) {
            margin-bottom: 30px;
        }
        img{
            margin-bottom: $elements-spacing/2;
            @media screen and (max-width: $media-mobile) {
                width: 250px;
            }
        }
        p{
            max-width: 230px;
            margin: 0 auto;
        }
    }
</style>