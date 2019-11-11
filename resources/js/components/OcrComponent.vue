<template>
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">OCR Receipt</div>

            <div class="panel-body">
                <input type="file" @change="onFileSelected" name="" id="">
                <button @click="onUpload">Upload</button>
            </div>
            <div>
                <ul>
                    <li v-for="(item, index) in results" :key="index"> {{ item.LineText }} </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                selectedFile:null,
                results:null
            }
        },
        methods:{
            onFileSelected(event){
                this.selectedFile = event.target.files[0];
            },
            onUpload(){
                const fd = new FormData();
                fd.append("apikey","7930f4b52488957");
                fd.append("isTable",'true');
                fd.append("language","eng");
                fd.append("detectOrientation","true");
                fd.append("scale","true");
                fd.append("isCreateSearchablePdf","true");
                fd.append('image', this.selectedFile, this.selectedFile.name)
                axios.post('https://api.ocr.space/parse/image', fd, {
                })
                .then(res => {
                    console.log(res.data.ParsedResults[0].TextOverlay.Lines);
                    this.results = res.data.ParsedResults[0].TextOverlay.Lines;
                    }
                )
            }
        }
    }
</script>
