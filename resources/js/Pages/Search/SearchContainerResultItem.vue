<template>
    <div
        class="flex flex-col max-w-xs m-5 rounded-lg bg-white shadow-lg"
    >
        <a href="#" @click="selectTitle()">
            <img
                class="object-fill w-full rounded-t-lg"
                :src="`${resultImage}`"
                :alt="`${resultName}`"
            />
        </a>
        <div class="container flex-col w-48">
            <div class="h-fit truncate overflow-hidden">
                <h5 class="text-gray-900 font-medium mb-2" >
                    {{ resultName }}
                </h5>
            </div>
            <p class="text-gray-700 text-base mb-4">
                {{ resultYear }}
            </p>
        </div>
    </div>
</template>

<script>
export default {
    name: "SearchContainerResultItem",
    props: {
        resultName: String,
        resultType: String,
        resultYear: Number,
        resultId: Number,
        resultImage: String,
    },
    methods: {
        selectTitle() {
            this.$emit('selectTitle', this.resultId);
        }
    },
};
</script>
