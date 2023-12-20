<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live search</title>
</head>
<body>

    <h1>Live search using jquery</h1>

    <form id="frm" autocomplete="off">
        <input type="text" id="txt">
        <button type="submit"><i class="fa fa-search">search</i></button>
    </form>

    <div id="box"></div>

    <script src="js/jquery.js"></script>

    <script>
        $(document).ready(function(){
            $("#txt").keyup(function(){
                var txt = $("#txt").val();

                if(txt != "")
                {
                    $.post("05_02_search.php",{s:txt},function(data){
                        $("#box").html(data);
                    });
                }
            });
        });
    </script>

</body>
</html>