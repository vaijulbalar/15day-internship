<html>
  <body>
     <form action="process.php" method="post">
        <table>
            <tr>
                <td>NAME</td>
                <td><input type="text" name="txt1" required/></td>
            </tr>

            <tr>
                <td>AGE</td>
                <td><input type="number" name="txt2" min="1" max="100" required/></td>
            </tr>

            <tr>
                <td>EMAIL</td>
                <td><input type="email" name="txt3" /></td>
            </tr>

            <tr>
                <td>GENDER</td>
                <td><input type="radio" name="txt4">male</input></td>
                <td><input type="radio" name="txt4">female</input></td>
            </tr>

            <tr>
                <td>PHONE</td>
                <td><input type="text" name="txt5" required/></td>
            </tr>

            <tr>
                <td>ADDRESS</td>
                <td><textarea name="txt6" rows="4"></textarea></td>
            </tr>

            
            

            <tr>
                <td><input type="submit"/></td>
                <td><input type="reset"/></td>
              
            </tr>
        </table>
     </form>
  </body>
</html>