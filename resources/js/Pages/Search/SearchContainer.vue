<template>
    <AppLayout title="StreamQuest!">
        
            <h1 class="flex justify-center text-center mt-5 text-xl text-white bg-gray-800 leading-tight">
                Begin your quest! Search for a title, then make a selection.
            </h1>
            <search-container-input
                @submitQuery="submitQuery"
            />
            <search-container-selection
                :selection="selection"
                @saveFavorite ="saveFavorite"
                @deleteFavorite="deleteFavorite()"
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
            })
            .catch((error) => {
                console.log(error);
            });
        },
        saveFavorite(favorite) {
            console.log(favorite);
            let sources = JSON.stringify(favorite.sources)
            axios.post('favorites/save',  {
                title: favorite.title,
                title_id: favorite.id,
                backdrop_url: favorite.backdrop,
                plot_overview: favorite.plot_overview,
                sources: sources,
            })
            .then(response => {
                if (response.status === 201) {
                    alert('Added to Favorites List');
                }
            })
            .catch(error => {
                console.log(error);
            });
        },
        deleteFavorite(id) {
            axios.delete("/favorite/favorites/" + id)
            .then((response) => {
                if (response.status === 200) {
                    alert('Removed from Favorites List');
                }
            })
            .catch((error) => {
                console.log(error);
            });
        },
    },
};
</script>

<style scoped>
h1 {
font-family: 'Press Start 2P', cursive;
}
</style>