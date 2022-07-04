<template>
    <AppLayout title="Favorites">
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Your Favorites
        </h2>
        

        <div class="py-12 bg-gray-800 ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <Favorites />
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import Favorites from './FavoritesContainer.vue';

export default {
    name: "Favorites Dashboard",
    components: {
        AppLayout,
        Favorites,
    },
    data () {
        return {
            userId : "",
            favorites: [],
        }
    },
    async mounted() {
        await this.getFavorites(this.userId);
    },
    methods: {
        getUserId() {
            axios.get('api/user')
            .then(response => {
                if (response.status === 200) {
                    this.userId = response.data.id;
                    console.log(this.userId);
                }
            })
            .catch((error) => {
                console.log(error);
            });
        },
        getFavorites(userId) {
            axios.get("/api/favorites/" + userId)
            .then((response) => {
                if (response.status === 200) {
                    this.favorites = response.data;
                    console.log(response.data);
                }
            })
            .catch((error) => {
                console.log(error);
            });
        },
    },
    created() {
            this.getUserId();
            this.getFavorites(this.userId);
            }
};
</script>

