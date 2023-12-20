<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Rfresh Comment</title>
</head>

<body>
    <div id="reg">
        <form id="frm">
            <h1>Auto Refrsh Comment</h1>
            <h2>Enter your comment</h2>
            <textarea type="text" id="text" name="text"></textarea>
            <button type="button" id="save">Send message</button>
        </form>
    </div>

    <div id="load">

    </div>

    <script src="js/jquery.js"></script>

    <script>
        $(document).ready(function(){

            $("#save").click(function(){

                $.ajax({
                    url:"04_02_insert.php",
                    type:"post",
                    data:$("#frm").serialize(),
                    success:function(){
                        $("#frm")[0].reset();
                    }
                });

            });

            setInterval(function(){
                    $("#load").load("04_03_select.php").fadeIn("slow");
                    
                }, 1000);
        });

    </script>
</body>

</html>