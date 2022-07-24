<template>   
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-5 place-content-center">
            <template v-for="result in results.results" :key="result">            
                <div v-if="result.image_url != null">
                    <guest-search-container-result-item
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
        <div v-if="results.results == ''" class="flex justify-center">
            <p class="text-red-600 text-center text-xs md:text-base lg:text-lg">Your quest has failed. Please try again.</p>
        </div>
    </div>
</template>

<script>
import GuestSearchContainerResultItem from "./GuestSearchContainerResultItem";
export default {
    name: "GuestSearchContainerResults",
    emits: ['selectTitle'],
    props: {
        results:Object 
    },
    components: {
        GuestSearchContainerResultItem,
    },
    methods: {
        selectTitle(resultId) {
            this.$emit('selectTitle', resultId);
        },
    },
}
</script>

<style scoped>
p {
font-family: 'Press Start 2P', cursive;
}
</style>

