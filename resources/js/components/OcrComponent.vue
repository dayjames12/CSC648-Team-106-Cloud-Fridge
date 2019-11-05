<template>
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">OCR Receipt</div>

            <div class="panel-body">
                <!-- <form action="./ocr" method="POST" @submit="ocr()" enctype="multipart/form-data"> -->
                    <form>
                    <div class="file is-primary">
                        <label class="file-label">
                            <input class="file-input" type="file" ref="file" v-on:change="handleFile()"/>
                            <span class="file-cta">
                                <span class="file-label">
                                    Upload image...
                                </span>
                            </span>
                        </label>
                    </div>
                    <div class="field is-grouped">
                        <p class="control">
                            <input type="submit" value="Submit Image" class="button is-primary" >
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                file: ''
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            handleFile(){
                this.file = this.$refs.file.files[0];
            },
            ocr(){
                let formData = new formData();
                formData.append('file', this.file);
                
                axios.post( 'https://api.ocr.space/parse/image', '7930f4b52488957', formData,{
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }
                    }
                        ).then(function(){
                            console.log('SUCCESS!!');
                            })
                        .catch(function(){
                            console.log('FAILURE!!');
                });
            }
        }
    }
</script>