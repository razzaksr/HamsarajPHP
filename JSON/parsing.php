<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parsing</title>
</head>
<body>
    <script>
        let hi='{"tech":"python","varients":["django","flask"],"front":{"default":"Jinja","advance":"react"}}';
        alert(hi);
        let yet=JSON.parse(hi);
        alert(yet.tech);
        //alert(yet.varients[1])
        alert(yet['varients'][0])
        //alert(yet.front.default)
        alert(yet['front']['advance'])
    </script>
</body>
</html>