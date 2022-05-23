<template>
    <a-layout>
        <a-layout-header class="header fixed inset-x-0 top-0" style=" padding: 0 1rem; ">
            <div class="p-3 mx-4 flex justify-center text-slate-200 text-base float-left">
                <img src="/imgs/logo.png" class="w-28 h-10 mr-2" />
            </div>
            <a-menu
                v-model:selectedKeys="selectedHeaderKeys"
                theme="dark"
                mode="horizontal"
                :style="{ lineHeight: '64px' }"
            >
                <a-menu-item v-for="(item, index) in $page.props.menus" :key="item.url" @click="changeMenu(item, index)">
                    <template v-if="item.icon" #icon>
                        <font-awesome-icon :icon="item.icon"></font-awesome-icon>
                    </template>
                    {{ item.title }}
                </a-menu-item>
            </a-menu>
        </a-layout-header>
        <a-layout has-sider :style="{ minHeight: 'calc(100vh - 64px)' }">
            <a-layout-sider width="200" class="overflow-y-auto overflow-x-hidden scroll-smooth left-0 bottom-0 top-16 shadow" :style="{ position: 'fixed' }">
                <a-menu
                    v-model:selectedKeys="selectedSideMenuKeys"
                    @select="selectedChange"
                    @openChange="openMenuChange"
                    mode="inline"
                    theme="light"
                    :style="{ height: '100%', borderRight: 0 }"
                >
                    <template v-for="item in menu">
                        <template v-if="!item.child">
                            <a-menu-item :key="item.url">
                                <template v-if="item.icon" #icon>
                                    <font-awesome-icon :icon="item.icon"></font-awesome-icon>
                                </template>
                                <span>{{ item.title }}</span>
                            </a-menu-item>
                        </template>

                        <template v-else>
                            <sub-menu :menu-info="item" :key="item.url" />
                        </template>
                    </template>

                </a-menu>
            </a-layout-sider>
            <a-layout class="mt-16 ml-52 pt-0 pr-4 pb-4 pl-2">
                <div class="my-4">
                    <a-breadcrumb>
                        <a-breadcrumb-item>Home</a-breadcrumb-item>
                        <a-breadcrumb-item>List</a-breadcrumb-item>
                        <a-breadcrumb-item>App</a-breadcrumb-item>
                    </a-breadcrumb>
                </div>

                <a-layout-content class="overflow-auto"
                    :style="{ background: '#fff', padding: '24px', margin: 0, minHeight: '280px' }"
                >
                    <slot />
                </a-layout-content>
            </a-layout>
        </a-layout>
    </a-layout>
</template>

<script>
import { ref } from 'vue';
import SubMenu from '@/Components/SubMenu';

export default {
    name: "AdminLayout",
    components: {
        SubMenu,
    },
    setup(props) {

        return {
            collapsed: ref(false),
            openKeys: ref(['sub1']),
        }
    },
    data(){
        return {
            selectedHeaderKeys: [this.$page.props.menus[0].url],
            menu: this.$page.props.menus[0].child,
            selectedSideMenuKeys: [this.$page.props.menus[0].child[0].url],
        }
    },
    mounted() {
        console.log(this)
    },
    methods: {
        changeMenu(item, index) {
            console.log('changeMenu', item, index)
            this.menu = this.$page.props.menus[index].child
        },
        selectedChange(item) {
            console.log(item)
        },
        openMenuChange(openKeys) {
            console.log(openKeys)
        }
    }
}
</script>

<style scoped>

</style>
