<template>
    <div
        class="flex-col flex-1 max-w-xs m-2 rounded-lg bg-white shadow-lg"
    >
        <a href="#" class="object-fill" @click="selectTitle()">
            <img
                class="w-full rounded-lg"
                :src="`${resultImage}`"
                :alt="`${resultName}`"
            />
        </a>
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

