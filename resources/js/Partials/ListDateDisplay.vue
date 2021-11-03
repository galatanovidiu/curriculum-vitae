<template>
    <div class="flex flex-col items-center justify-center bg-gray-600 text-white w-12 h-12 rounded-full font-bold leading-4">
        <div>{{year}}</div>
<!--        <div>{{month}}</div>-->
    </div>
</template>

<script>
export default {
    name: "ListDateDisplay",
    props: {
        year: '',
        month: '',
    }
}
</script>

<style scoped>

</style>
