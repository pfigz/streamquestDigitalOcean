<template>
    <h1 class="flex justify-center text-center mt-5 text-xl text-white bg-gray-800 leading-tight">
        Begin your quest! Search for a title, then make a selection.
    </h1>
    <search-container-input
        @submitQuery="submitQuery"
    />
    <search-container-selection
        :selection="selection"      
    />
    <search-container-results
        :results="results"
        @selectTitle="viewTitle"
    />
</template>
<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import SearchContainerInput from "./SearchContainerInput";
import SearchContainerResults from "./SearchContainerResults";
import SearchContainerSelection from "./SearchContainerSelection.vue";

export default {
    name: "SearchContainer",
    components: {
        AppLayout,
        SearchContainerResults,
        SearchContainerInput,
        SearchContainerSelection,
    },
    data() {
        return {
            results: [],
            selection: {},
        };
    },
    methods: {
        submitQuery(query) {
            axios.get("/api/quest/search/" + query)
            .then((response) => {
                if (response.status === 200) {
                    this.results = response.data;
                    this.selection = {};
                }
            })
            .catch((error) => {
                console.log(error);
            });
        },
        viewTitle(resultId) {
            axios.get("/api/quest/selection/" + resultId)
            .then((response) => {
                if (response.status === 200) {
                    this.selection = response.data;
                }
            });
            this.selection
        },
    },
};
</script>

<style scoped>
h1 {
font-family: 'Press Start 2P', cursive;
}
</style>