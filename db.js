<html>
<head>
<head>
<body>
const mysql = require("mysql2");
  
const connection = mysql.createConnection({
  host: "localhost",
  user: "root",
  database: "literaturegide"
});
 
connection.execute("SELECT * FROM books",
  function(err, results, fields) {
    console.log(err);
    console.log(results); // собственно данные
});
connection.end();

</body>
</html>