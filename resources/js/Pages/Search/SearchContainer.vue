<template>
    <AppLayout title="StreamQuest!">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Welcome to Stream Quest!
            </h2>
        </template>

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
