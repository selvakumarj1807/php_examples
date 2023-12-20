<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JQuery with ajax POST</title>
</head>
<body>
    <h1>JQuery with ajax POST method with php</h1>

    <form id="frm">
        <label>Name</label>
        <input type="text" name="na" id="name">

        <label>Age</label>
        <input type="text" name="ag" id="age">

        <label>Mail</label>
        <input type="text" name="ma" id="mail">

        <button type="button" id="save">Save</button>
    </form>

    <script src="js/jquery.js"></script>

    <script>
        $("#save").click(function(){
            $.ajax({
                url:"02_02_db.php",
                type:"post",
                data:$("#frm").serialize(),
                success:function(){
                    alert("Saved successfully");
                }
            });
        });
        
    </script>
    
</body>
</html>