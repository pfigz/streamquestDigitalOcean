<template>   
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-start flex-wrap m-auto">
            <div v-for="result in results.results" :key="result">            
                <search-container-result-item 
                    :resultName="result.name" 
                    :resultType="result.type" 
                    :resultYear="result.year" 
                    :resultId="result.id" 
                    :resultImage="result.image_url"
                    @selectTitle="selectTitle(result.id)" 
                />
            </div>
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

