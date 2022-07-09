<template>
  These are my favorites.
  {{ favorites }}
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
    // data () {
    //     return {
    //         favorites: []
    //     }
    // },
    props: {
        // user: Object,
        favorites: Object,
    },
    methods: {
        // getFavorites() {
        //     axios.get('favorites/list')
        //     .then((response) => {
        //         if (response.status === 200) {
        //             this.favorites = response.data;
        //         }
        //     })
        //     .catch((error) => {
        //         console.log(error);
        //     });
        // },
        
    },
    // mounted() {
    //     this.getFavorites(this.user.id);
    // }
}
</script>
