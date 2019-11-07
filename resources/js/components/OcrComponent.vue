<template>
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">OCR Receipt</div>

            <div class="panel-body">
                <form @submit="ocr()" enctype="multipart/form-data">
                    <input class="file" type="file" name="Select file" v-on:change="onFileSelected()"/>
                    <button class="button is-primary" v-on:change="ocr()">Upload</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
    export default {
        data(){
            return{
                selectedFile:null
            }
            
        },
        methods:{
            onFileSelected(event){
                this.selectedFile = event.target.files[0];
            },
            ocr(){
                let formData = new formData();
                formData.append('file', this.selectedFile);
                
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