<template>
    <homelayout ref="parentComponent">
    </homelayout>
</template>

<script>
    import HomeLayout from '@/js/components/home/HomeLayout.vue';
    import Contact from '@/js/components/home/Contact.vue';
    export default {
        name: "ContactUrl",
        components: {homelayout:HomeLayout,contact:Contact},
        mounted(){
            document.title = 'Photographer - Contact'
            this.$refs.parentComponent.startGettingData()
            this.$refs.parentComponent.swapComponent(Contact)
        }
    }
</script>

<style scoped>

</style>