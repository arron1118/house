<template>
    <a-sub-menu>
        <template v-if="menuInfo.icon" #icon>
            <font-awesome-icon :icon="menuInfo.icon"></font-awesome-icon>
        </template>
        <template #title>{{ menuInfo.title }}</template>
        <template v-for="item in menuInfo.child" :key="item.url">
            <template v-if="!item.child">
                <a-menu-item :key="item.url">
                    <template #icon v-if="item.icon">
                        <font-awesome-icon :icon="item.icon"></font-awesome-icon>
                    </template>
                    {{ item.title }}
                </a-menu-item>
            </template>
            <template v-else>
                <sub-menu :menu-info="item" :key="item.url" />
            </template>
        </template>
    </a-sub-menu>
</template>

<script>
export default {
    name: "SubMenu",
    props: {
        menuInfo: {
            type: Object,
            default: {},
        }
    }
}
</script>

<style scoped>

</style>
