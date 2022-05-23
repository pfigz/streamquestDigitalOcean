<template>   
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-5">
            <template v-for="result in results.results" :key="result">            
                <div v-if="result.image_url != null">
                    <search-container-result-item
                        :resultName="result.name"
                        :resultType="result.type"
                        :resultYear="result.year"
                        :resultId="result.id"
                        :resultImage="result.image_url"
                        @selectTitle="selectTitle(result.id)"
                    />
                </div>
            </template>
        </div>
    </div>
</template>

<script>
import SearchContainerResultItem from "./SearchContainerResultItem";
export default {
    name: "SearchContainerResults",
    emits: ['selectTitle'],
    props: {
        results:Object 
    },
    components: {
        SearchContainerResultItem,
    },
    methods: {
        selectTitle(resultId) {
            this.$emit('selectTitle', resultId);
        }
    },
}
</script>

