<template>
    <div :class="[!selection.poster ? 'hidden' : '', '']">
        <div class="flex justify-center mx-auto mb-10">
            <div
                class="flex flex-col md:flex-row md:max-w-xl rounded-lg bg-gray-900 shadow-xl"
            >
                <img
                    class="w-full mr-2 object-fill md:w-48 rounded-t-lg md:rounded-none md:rounded-l-lg"
                    :src="`${selection.poster}`"
                    alt=""
                />
                <div class="flex flex-col justify-start w-64">
                    <h5 class="text-gray-100 text-xl font-medium mb-2">
                        {{ selection.title }} |
                        {{ selection.year }} 
                    </h5>
                    <p class="text-gray-100 text-base mb-4">
                        Now Streaming On:
                    </p>
                    <template v-for="source in selection.sources" :key="source">
                        <div v-if="`${source.type}` == 'sub'">
                            <p class="text-gray-100 text-sm mb-1">
                                {{ source.name }}
                            </p>
                        </div>
                    </template>
                    <div v-if="selection.sources == ''">
                        <p class="text-white text-sm">This title is not streaming in your region</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "GuestSearchContainerSelection",
    data () {
        return {
            favorite: [
                this.selection
            ]
        }
    },
    props: {
        selection: Object,
    }
}
</script>
