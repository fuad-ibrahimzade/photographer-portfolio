<template>
    <homelayout ref="parentComponent">
    </homelayout>
</template>

<script>
    import HomeLayout from '@/js/components/home/HomeLayout.vue';
    import About from '@/js/components/home/About.vue';
    export default {
        name: "AboutUrl",
        components: {homelayout:HomeLayout,about:About},
        mounted(){
            document.title = 'Photographer - About'
            this.$refs.parentComponent.startGettingData()
            this.$refs.parentComponent.swapComponent(About)
        }
    }
</script>

<style scoped>

</style>