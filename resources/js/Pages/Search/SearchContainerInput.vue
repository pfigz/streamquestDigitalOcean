<template>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-row justify-center p-2 bg-gray-800 overflow-hidden sm:rounded-lg">
                <input type="text"
                       class="border-black-100 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-5/6 mx-2 rounded-md shadow-sm"
                       v-model="query"
                       @keyup.enter="submitQuery()"
                >
                <button @click="submitQuery()"
                        class="inline-flex items-center px-4 py-2 bg-gray-100 border border-transparent rounded-md font-semibold text-xs text-gray-600 uppercase tracking-widest hover:bg-gray-700 hover:text-white active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                >
                    Quest!
                </button>
            </div>
        </div>
    </div>
</template>

<script>


export default {
    name: "SearchContainerInput",
    components: {

    },
    data() {
        return {
            query: ''
        }
    },
    methods: {
        submitQuery() {
            if (this.query === '') {
                return;
            }

            this.$emit('submitQuery', this.query);
            
        }
    }
}
</script>
