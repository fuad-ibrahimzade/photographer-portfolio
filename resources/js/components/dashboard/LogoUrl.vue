<template>
    <layout ref="parentComponent">
    </layout>
</template>

<script>
    import Layout from '@/js/components/layouts/Layout.vue';
    import Logo from '@/js/components/dashboard/Logo.vue';
    export default {
        name: "LogoUrl",
        components: {layout:Layout,Logo:Logo},
        mounted(){
            document.title = 'Photographer - Logo'
            this.$refs.parentComponent.startGettingData()
            this.$refs.parentComponent.swapComponent(Logo)
        }
    }
</script>

<style scoped>

</style>