<template>
    <!--<button @click="showAlert">Hello world</button>-->
    <div>
        <div class="bg-white p-8 rounded-md w-full">
            <div class=" flex items-center justify-between pb-6">
                <div>
                    <h2 class="text-gray-600 font-semibold">Products Oder</h2>
                    <span class="text-xs">All products item</span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex bg-gray-50 items-center p-2 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                        <input class="bg-gray-50 outline-none ml-1 block " type="text" name="" id="" placeholder="search...">
                    </div>
                        <div class="lg:ml-40 ml-10 space-x-8">
                            <button class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">New Report</button>
                            <button class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">Create</button>
                        </div>
            </div>
        </div>
                <div>
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                            <table class="min-w-full table-auto">
                                <thead>
                                    <tr>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Title
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Content
                                        </th>
                                        
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(post,index) in arrayPosts" :key="index">
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <div class="flex items-center">
                                                    <div class="ml-3">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            {{ post.title }}
                                                        </p>
                                                    </div>
                                                </div>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm justify-center">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ post.content }}</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm justify-center">
                                            
                                            <button class="relative inline-block px-2 py-1 mx-1 font-semibold text-indigo-700 bg-indigo-50 rounded-full leading-tight"
                                                @click="showPostModal(post)"
                                            >
                                                <span class="material-icons">edit</span>   
                                            </button>

                                            <button class="relative inline-block px-2 py-1 mx-1 font-semibold text-yellow-500 bg-yellow-100 rounded-full leading-tight"
                                                @click="seePost(post)">
                                                <span class="material-icons-outlined">remove_red_eye</span>  
                                            </button>

                                            <button class="relative inline-block px-2 py-1 mx-1 font-semibold text-red-700 bg-red-100 rounded-full leading-tight"
                                                 @click="deletePost(post.id)">
                                                <span class="material-icons">delete</span>   
                                            </button>

                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                            <div
                                class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
                                <span class="text-xs xs:text-sm text-gray-900">
                                    Showing 1 to 4 of 50 Entries
                                </span>
                                <div class="inline-flex mt-2 xs:mt-0">
                                    <button
                                        class="text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-600 font-semibold py-2 px-4 rounded-l">
                                        Prev
                                    </button>
                                    &nbsp; &nbsp;
                                    <button
                                        class="text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-600 font-semibold py-2 px-4 rounded-r">
                                        Next
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div>
            <div v-if="showModal" class="overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center flex">
            <modal-post :post="post" @closeModal()="closeModal">

            </modal-post>
            </div>
            <div v-if="showModal" class="opacity-25 fixed inset-0 z-40 bg-black"></div>
        </div>
    </div>
    
</template>

<script>
    import ModalPost from './ModalPost.vue';
    export default {
        el:'#app',
        data(){
            return {
                //data
                //showSpan:true,
                //title: 'Esto es un titulo'
                arrayPosts:[],
                post:'',
                showModal:false,
                }
            },
        components:{
            ModalPost
        },
        //methods
        methods:{
            getPostList(){
                axios.get('/api/postList')
                .then(response=>{
                    this.arrayPosts = response.data
                })
            },
            showPostModal(data){
                this.post = data;
                this.showModal=true;
            },
            closeModal()
            {
                this.showModal=false;
            },
            seePost(data) {
            // Use sweetalert2
                this.$swal({
                    title: data.title,
                    icon: 'info',
                    html: data.content,
                    showCloseButton: true,
                    showCancelButton: true,
                    focusConfirm: false,
                    confirmButtonText: 'Ok',
                    cancelButtonText: 'Cancel',
                });
            },
            deletePost(id) {
                this.$swal({
                    title: 'Are you sure?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        let url='api/destroyPost/'+id
                        axios.post(url).then(response=>{
                            this.getPostList()
                            this.$swal(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                        )
                        })
                    }
                });
            },
        },
        mounted(){
            this.getPostList();
        }
        }
</script>

<style scoped>

</style>