<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Team 06</title>

<body>
    <form action="team06.php" method="POST">
        <fieldset>
            <legend>Core 01</legend>
            <p>Name: <input type="text" name="username"> <br></p>
            <p> Email: <input type="text" name="email"> </p></br>
            <p>Majors: </p>
            <input type="radio" name="major" id="majorID" value="Computer Science" checked="">
            <label>Computer Science</label>
            <br>
            <input type="radio" name="major" id="majorID" value="Web Design" checked="">
            <label >Web Design and Development</label>
            <br>
            <input type="radio" name="major" id="majorID" value="Computer information Technology" checked="">
            <label>Computer information Technology</label>
            <br>
            <input type="radio" name="major" id="majorID" value="Computer Engineering" checked="">
            <label>Computer Engineering</label>
            <br>
            <p>Text</p><textarea name="comment" id="#" cols="30" rows="10"></textarea>
<br>
            <select name="continent[]"  size="7" multiple>
                <option value="NA">North America</option>
                <option value="SA">South America</option>
                <option value="EU">Europe</option>
                <option value="As">Asia</option>
                <option value="Au">Australia</option>
                <option value="Af">Africa</option>
                <option value="An">Antarctica</option>
            </select>
          <br><input type="submit">
        </fieldset>
    </form>

</body>

</html>