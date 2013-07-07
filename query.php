<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>R SoftTech :: Request Query</title>
</head>

<body bgcolor='#071907' style="color:white;">
Request your query:
<form action="sentmail.php" method="post" name="requestquote">
              <p>
                <label for="name">Name: </label>
                <input type="text" name="name" id="name" />
              </p>
              <p>
                <label for="org">Organization: </label>
                <input type="text" name="org" id="org" />
              </p>
              <p>
                <label for="email">Email: </label>
                <input type="text" name="email" id="email" />
              </p>
              <p>
                <label for="msg">Query:</label>
                <textarea name="msg" id="msg" cols="45" rows="5"></textarea>
              </p>
              <p>
                <input type="submit" name="submit" id="submit" value="Send Query" />
              </p>
</form>
</body>
</html>