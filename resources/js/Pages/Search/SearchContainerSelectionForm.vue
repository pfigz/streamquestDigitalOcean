<template>
    <div class="flex flex-col justify-start mr-2 mt-2 text-gray-100 text-lg">
        <font-awesome-icon
            icon="fa-regular fa-star"
            @click="saveFavorite()"
        />
    </div>
    <!-- <div class="flex flex-col justify-start mr-2 mt-2 text-amber-400 text-lg">
        <font-awesome-icon icon="fa-solid fa-star" 
            @click="deleteFavorite(this.selection.id)"
        />
    </div>   -->
</template>

<script>
export default {
    name: "SearchContainerSelectionForm",
    emits: ['saveFavorite', 'deleteFavorite'],
    props: {
        selection: Object,
    },
    data () {
        return {
            favorite: {},
        }
    },
    methods: {
        saveFavorite() {
            //emit a function to execute on search container
            // let favorite = this.favorite;
            this.$emit('saveFavorite', this.selection);
        },
        deleteFavorite(id) {
            axios.get("/favorites/favorite/" + id)
            .then((response) => {
                if (response.status === 200) {
                    this.favorite = response.data;
                }
                console.log(this.favorite[0]['id']);
            })
            .catch((error) => {
                console.log(error);
            });

            // let favoriteId = this.favorite[0]['id'];
            // this.$emit('deleteFavorite', favoriteId);
        }
    }
}
</script>
