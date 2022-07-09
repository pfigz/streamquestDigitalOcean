<template>
  This is an item in the favorites container.
  {{ favorites }}
</template>

<script>
export default {
    name: "FavoritesContainerItem",
    props: {
        favorites: Object
    }
}
</script>