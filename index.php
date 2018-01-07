<html>
<head>
    <title>Form handler</title>
    <script type="text/javascript" src="ajax-handler.js"></script>
</head>
<body>
<form action="complete.php" method="post">
    <div class="inputs">
        <label></label>
        <p>Input email</p>
        <input  type="email" name="email"><br>
        <p>Input name</p>
        <input type="text" name="name"><br>
        <p>Input phone</p>
        <input type="text" name="phone"><br>
    </div>
    <div class="buttons">
        <input type="button" value="Confirm">
    </div>
    <div class="response" >
        <p class="response-text"></p>
    </div>
</form>
</body>
</html>