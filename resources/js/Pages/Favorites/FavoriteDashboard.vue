<template>
    <AppLayout title="Favorites">
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Your Favorites
        </h2>
        

        <div class="py-12 bg-gray-800 ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <favorites-container
                       :favorites = 'favorites'
                    />
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import FavoritesContainer from './FavoritesContainer.vue';

export default {
    name: "Favorites Dashboard",
    components: {
        AppLayout,
        FavoritesContainer,
    },
    beforeCreate () {

    },  
    data () {
        return {
            favorites: [],
        }
    },
    methods: {
        getFavorites() {
            axios.get('favorites/list')
            .then((response) => {
                if (response.status === 200) {
                    this.favorites = response.data;
                }
            })
            .catch((error) => {
                console.log(error);
            });
        },
    },
    created() {
        this.getFavorites();
    }
};
</script>

