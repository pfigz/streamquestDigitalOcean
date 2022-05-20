<template>
    <div
        class="flex flex-col md:flex-row md:max-w-xl rounded-lg bg-white shadow-lg"
    >
        <img
            class="w-full h-96 md:h-auto object-cover md:w-48 rounded-t-lg md:rounded-none md:rounded-l-lg"
            :src="`${selection.poster}`"
            alt=""
        />
        <div class="p-6 flex flex-col justify-start">
            <h5 class="text-gray-900 text-xl font-medium mb-2">
                {{ selection.title }}
            </h5>
            <p class="text-gray-700 text-base mb-4">
                {{ selection.plot_overview }}
            </p>
            <p class="text-gray-700 text-base mb-1">
                Now Streaming On:
            </p>
            <template v-for="source in selection.sources" :key="source">
                <div v-if="`${source.type}` == 'sub'">
                    <p class="text-gray-700 text-base mb-1">
                        {{ source.name }}
                    </p>
                </div>
            </template>

            <p class="text-gray-600 text-xs">
                Last updated 3 mins ago
            </p>
        </div>
    </div>
</template>

<script>
export default {
    name: "SearchContainerSelection",
    props: {
        selection: Object,
    },
};
</script>
