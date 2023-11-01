<!DOCTYPE html>
<html>
<head>
    <title>New Student Registration Form | SMKN 7 Coding</title>
</head>

<body>
    <header>
        <h3>New Student Registration Form</h3>
    </header>

    <form action="regisProcess.php" method="POST">

        <fieldset>

        <p>
            <label for="name">Name: </label>
            <input type="text" name="name" placeholder="Full Name" />
        </p>
        <p>
            <label for="address">Address: </label>
            <textarea name="address"></textarea>
        </p>
        <p>
            <label for="gender">Gender: </label>
            <label><input type="radio" name="gender" value="male"> Male</label>
            <label><input type="radio" name="gender" value="female"> Female</label>
        </p>
        <p>
            <label for="religion">Religion: </label>
            <select name="religion">
                <option>Islam</option>
                <option>Christian</option>
                <option>Catholic</option>
                <option>Hindu</option>
                <option>Buddhist</option>
            </select>
        </p>
        <p>
            <label for="schoolOrigin">School Origin: </label>
            <input type="text" name="schoolOrigin" placeholder="school name" />
        </p>
        <p>
            <input type="submit" value="Register" name="register" />
        </p>

        </fieldset>

    </form>

    </body>
</html>