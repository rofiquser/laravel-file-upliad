<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3 mt-3">
         <div class="card">
                
                    <h5 class="card-title text-center">File Upload Laravel & Axios</h5>
                    <div class="card-body">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" placeholder="Pdf File title" class="form-control mt-2 mb-2">
                        <input type="file" name="file" class="form-control" id="file">
                    <button class="btn btn-primary mt-1" onclick="onUpload()">Upload</button>
                    <h5 class="bg-info text-center text-white mt-2 " id="success"></h5>
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script>
    
function onUpload(){

    let myFile=document.getElementById('file').files[0];

    let title=document.getElementById('title').value;

    let fileName=myFile.name;
    let fileSize=myFile.size;
    let fileExtention=fileName.split('.').pop();

    let FileData= new FormData();
    FileData.append('file',myFile);
    FileData.append('title',title);


    let config={
        headers:{'content-type':'multipart/form-data'},
        // percentage upload 
        onUploadProgress:function(progressEvent){
            let percentage=Math.round((progressEvent.loaded*100)/(progressEvent.total));
           let uploadedMB=(progressEvent.loaded)/(1024*1024);
           let TotalMB=(progressEvent.total)/(1024*1024);
           let dueMB=TotalMB-uploadedMB;
           $("#success").html("<b>Uploaded</b>: " + uploadedMB.toFixed(2) + " MB <b>dueMB</b>: " + dueMB.toFixed(2) +" MB TotalMB: "+ TotalMB.toFixed(2) + "MB");
        }

    }
    let url="/fileUp";
    axios.post(url,FileData,config).then(function(response){
        if (response.status===200) {

// percentage 
$("#success").html("Upload Success");
setTimeout(function(){
    $("#success").html(" ");
},2000);



// simple success message show start
//         $("#success").html("upload success");
//          setTimeout(function(){

// $("#success").html(" ");

//         },2000);
// simple success message show end
          
        }
     

    }).catch(function(error){
alert("file upload error");
    })

}
</script>
</head>
</body>
</html>