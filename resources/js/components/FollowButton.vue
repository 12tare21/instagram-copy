<template>
    <div>
         <button class="btn btn-primary ml-4" @click="followUser" v-text="btnText"></button>
    </div>
</template>

<script>
    export default {
        props:['userid','follows'],
        mounted() {
            console.log('Component mounted.')
        },
        data:function(){
            return{
                status:this.follows
            }
        },
        methods:{
            followUser(){
                axios.post('/follow/'+this.userid).then(res=>{
                    this.status=!this.status;   
                    console.log(this.status);
                }).catch(error=>{
                    if(error.response.status=401){
                        window.location='/login'
                    }
                });
            }
        },
        computed:{
            btnText(){
                return (this.status)?'Unfollow':'Follow';
            }
        }
    }
</script>
