<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic JSON</title>
</head>
<body>
    <script>
        let hi={
            "name":"Razak Mohamed S",
            "skills":["Java","JAvascript","python"],
            "exp":{
                "2012":"Multicoreware",
                "2013":"Mazenet",
                "2015":"Zealous"
            },
            "ctc":21.4,
            "isForFulltime":false
        }

        alert(hi.name+" "+hi['ctc']);

        let hey=JSON.stringify(hi);

        alert(hey);
    </script>
</body>
</html>