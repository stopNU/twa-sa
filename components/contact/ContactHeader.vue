<template>
    <div class="map-wrapper">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3580.572927175766!2d28.118004915029587!3d-26.17803478344955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e95120390cf1707%3A0x443a8d1c226f1209!2s11%20Viscount%20Rd%2C%20Bedfordview%2C%20Johannesburg%2C%202008%2C%20South%20Africa!5e0!3m2!1sen!2sbg!4v1593271371488!5m2!1sen!2sbg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
       
    </div>
</template>

<script>
export default {

}
</script>

<style scoped lang="scss">
.map-wrapper{
    padding-top: $menu-height;
    height: 540px;
    iframe{
        height: 540px-$menu-height;
        width: 100%;
    }
}
</style>
