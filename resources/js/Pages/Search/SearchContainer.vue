<template>
    <AppLayout title="StreamQuest!">
        
            <h1 class="flex justify-center font-semibold text-xl text-white bg-gray-800 leading-tight">
                Welcome to Stream Quest!
            </h1>
          
            <search-container-input
                @submitQuery="submitQuery"
                class="bg-gray-800"
            />
            <search-container-selection
                :selection="selection"
                class="bg-gray-800"
            />
            <search-container-results
                :results="results"
                @selectTitle="viewTitle"
                class="bg-gray-800"
            /> 
    </AppLayout>
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
        },
    },
};
</script>
