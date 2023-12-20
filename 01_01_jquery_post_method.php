<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JQuery POST</title>
</head>
<body>
    <h1>JQuery POST method with php</h1>

    <form id="frm">
        <label>Name</label>
        <input type="text" id="name">

        <label>Age</label>
        <input type="text" id="age">

        <label>Mail</label>
        <input type="text" id="mail">

        <button type="button" id="save">Save</button>
    </form>

    <script src="js/jquery.js"></script>

    <script>
        $("#save").click(function(){
            var name = $("#name").val();
            var age = $("#age").val();
            var mail = $("#mail").val();

            $.post("01_02_db.php",{na:name,ag:age,ma:mail},
            function(data)
            {
                alert(data);
                $("#frm")[0].reset();
            });
        });
    </script>
    
</body>
</html>