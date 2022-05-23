<template>
    <div :class="[!selection.poster ? 'hide' : '', '']">
        <div class="flex justify-center max-w-7xl mx-auto mb-5 sm:px-6 lg:px-8">
            <div
                class="flex flex-col md:flex-row md:max-w-xl rounded-lg bg-gray-900 shadow-xl"
            >
                <img
                    class="w-full mr-2 h-96 md:h-auto object-cover md:w-48 rounded-t-lg md:rounded-none md:rounded-l-lg"
                    :src="`${selection.poster}`"
                    alt=""
                />img
                <div class="flex flex-col justify-start w-64">
                    <h5 class="text-gray-100 text-xl font-medium mb-2">
                        {{ selection.title }} |
                        {{ selection.year }}
                    </h5>
                    <p class="text-gray-100 text-base mb-4">
                        Now Streaming On:
                    </p>
                    <template v-for="source in selection.sources" :key="source">
                        <div v-if="`${source.type}` == 'sub'">
                            <p class="text-gray-100 text-sm mb-1">
                                {{ source.name }}
                            </p>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "SearchContainerSelection",
    props: {
        selection: Object,
    },
    computed: {

    }
};
</script>

<style scoped>
.hide {
    visibility: hidden;
}
</style>
