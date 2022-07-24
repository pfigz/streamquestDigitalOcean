<template>
  <div
        class="flex-col flex-1 max-w-xs m-2 rounded-lg bg-white shadow-lg"
    >
        <p>{{favoriteTitle}}</p>
        <div class="object-fill">
            <img
                class="w-full rounded-lg"
                :src="`${favoriteBackdrop}`"
                :alt="`${favoriteTitle}`"
            />
        </div>
        
        <p>{{favoritePlot}}</p>
        <!-- <p>{{favoriteSources}}</p> -->
        
    </div>
</template>

<script>
export default {
    name: "FavoritesContainerItem",
    props: {
        favoriteTitle: String,
        favoriteBackdrop: String,
        favoritePlot: String,
        favoriteSources: String,
    }
}
</script>