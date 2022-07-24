<template>
    <p class="text-gray-400 text-sm text-center mt-3">Would you like to <a class="underline" :href="route('register')">Register</a> or <a class="underline" :href="route('login')">Login</a>?</p>
    <h1 class="flex justify-center text-center mt-5 text-xl text-white bg-gray-800 leading-tight">
        Begin your quest! Search for a title, then make a selection.
    </h1>
    <guest-search-container-input
        @submitQuery="submitQuery"
    />
    <guest-search-container-selection
        :selection="selection"      
    />
    <guest-search-container-results
        :results="results"
        @selectTitle="viewTitle"
    />
</template>
<script>
// import AppLayout from "@/Layouts/AppLayout.vue";
import GuestSearchContainerInput from "./GuestSearchContainerInput";
import GuestSearchContainerResults from "./GuestSearchContainerResults";
import GuestSearchContainerSelection from "./GuestSearchContainerSelection.vue";

export default {
    name: "GuestSearchContainer",
    components: {
        // AppLayout,
        GuestSearchContainerResults,
        GuestSearchContainerInput,
        GuestSearchContainerSelection,
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