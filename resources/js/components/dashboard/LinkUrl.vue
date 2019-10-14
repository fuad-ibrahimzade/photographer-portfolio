<template>
    <layout ref="parentComponent">
    </layout>
</template>

<script>
    import Layout from '@/js/components/layouts/Layout.vue';
    import Link from '@/js/components/dashboard/Link.vue';
    export default {
        name: "LinkUrl",
        components: {layout:Layout,Link:Link},
        mounted(){
            document.title = 'Photographer - Link'
            this.$refs.parentComponent.startGettingData()
            this.$refs.parentComponent.swapComponent(Link)
        }
    }
</script>

<style scoped>

</style>