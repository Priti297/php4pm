<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <script type="text/javascript">
        var p=50000;
        var n=2;
        var r=3;
        //compound interest

        var ci=p*(pow((1+r/100),n));
        
        document.write("compound interest is:"+ci);
        

        //simple interest
       var si=p*r*n/100;
       document.write("simple interest is:"+si);
    </script>
</body>
</html>