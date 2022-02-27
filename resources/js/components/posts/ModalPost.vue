<template>
    <div>
        
            <div class="relative w-auto my-6 mx-auto max-w-sm">
                <!--content-->
                <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                <!--header-->
                <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                    <h3 class="text-3xl font-semibold">
                        {{ titleLabel }}
                    </h3>
                    <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" v-on:click="toggleModal()">
                    <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                        ×
                    </span>
                    </button>
                </div>
                <!--body-->
                <div class="relative p-6 flex-auto">
                    <div class="mb-1">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Title
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username">
                    </div>
                
                    <div class="mb-1">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="content">Content
                        </label>
                        <input type="text" name="content" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="content">
                    </div>
                </div>
                <!--footer-->
                <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
                    <button class="text-red-500 bg-transparent border border-solid border-red-500 hover:bg-red-500 hover:text-white active:bg-red-600 font-bold uppercase text-sm px-6 py-3 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" @click="closeModal()">
                    Close
                    </button>
                    <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
                    Save Changes
                    </button>
                </div>
                </div>
            </div>

            </div>
</template>

<script>

export default {
    props: ['post'],
    data(){
        return {
            titleLabel: 'Create post',
            title: '',
            content: '',
        }
    },
    watch:{
        posts:{
            handler: function (value){
                this.title = value ? value.title : '',
                this.content = value ? value.content : '',
                this.titleLabel = value ? 'Edit Post' : 'Create Post'}
            },
            deep:true,
        }
    },
    methods:{
        closeModal(){
            this.$refs('closeModal');
        }
    }
}
</script>
