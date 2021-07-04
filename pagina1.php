<html>
    <head>
        <meta charset="UTF-8"> 
        <title>Ex1</title>
    </head>
    <body>
        <form>
            <input type="text" name="var1" value="<?php echo($_POST["var1"]);?>" />
            <input type="text" name="plus" value="+" size="1"/>
            <input type="text" name="var2" value="<?php echo($_POST["var2"]);?>" />
            <input type="submit" value="=" name="egal"/>
            <input type="text" name="rezultat" value="<?php echo($_POST["var1"]+$_POST["var2"]);?>"/> 
        </form>
    </body>
</html>