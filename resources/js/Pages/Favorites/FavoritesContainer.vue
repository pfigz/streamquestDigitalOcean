<template>
  <div class="text-gray-100">Favorite Container</div>
    <div class="grid grid-cols-5 place-content-center">
        <template v-for="favorite in favorites" :key="favorite">
            <favorites-container-item
                :favoriteTitle="favorite['title']"
                :favoriteBackdrop="favorite['backdrop_url']"
                :favoritePlot="favorite['plot_overview']"
                :favoriteSources="favorite['sources']"
            />
        </template>
    </div>
  <!-- <FavoritesContainerItem 
    :favorites = 'favorites'
  /> -->
</template>

<script>
import FavoritesContainerItem from "./FavoritesContainerItem";
export default {
    components: {
        FavoritesContainerItem,
    },
    props: {
        favorites: Object,
    },
}
</script>
