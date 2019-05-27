<html>
<head>
    <style>
        em{
            font-weight: bold;
            font-family: cursive;
            color: mediumvioletred;
        }
    </style>
</head>
<body>
<form action="/action_page.php">
    First name: <input type="text" name="fname"><br>
    Last name: <input type="text" name="lname"><br>
    <input type="submit" value="Submit"><br>
    <input type="submit" formaction="/action_page2.php"
           value="Submit as admin">
    <p>submit as admin has a different action than action defined in <em>form</em> tag</p>
    <p>we can use formaction attribute of input element to define another action for the input type of
        <em>submit</em> and <em>image</em></p>
</form>
</body>
</html>
