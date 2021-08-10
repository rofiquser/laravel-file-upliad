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
        <div class="col-md-8 offset-2 mt-3">
     <h4>সকল নোটিস</h4>
     <table class="table table-responsive table-bordered">

             <tbody id="data">
               
                
             </tbody>

             <img src="{{asset('storage/tQs2e1XnQZ84AAfH7bFyZGNYpKMPwfZoHZMBSRBM.jpg')}}" alt="img">
     </table>       
     
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

  axios.get('/getData').then(function(response){
    if (response.status===200) {
        let jsonData=response.data;
        $.each(jsonData,function(i){
             $("<tr>").html(
        "<td>"+jsonData[i].date+"</td>"+
        "<td>"+jsonData[i].title+"</td>"+
        "<td> <a href='/download/"+jsonData[i].file_name+"' class='btn downloadbtn btn-primary btn-sm'>Download</a> <td>"

        ).appendTo('#data');

             // $(".downloadbtn").click(function(){
             // let dataPath=$(this).data('path');
             // axios.get('/download').
             // })

        })


    }

  }).catch(function(error){

  })

}

onUpload();
</script>
</head>
</body>
</html>