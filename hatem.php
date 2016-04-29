<html>
<head>
</head>
<body>
<form action="/cgi-bin/test.cgi" name="myForm"  xx="return(validate());">
 <table cellspacing="2" cellpadding="2" border="1">
 <tr>
   <td align="right">Name</td>
   <td><input type="text" name="Name" /></td>
 </tr>
 <tr>
   <td align="right">EMail</td>
   <td><input type="text" name="EMail" /></td>
 </tr>
 <tr>
   <td align="right">Zip Code</td>
   <td><input type="text" name="Zip" /></td>
 </tr>
 <tr>
 <td align="right">Country</td>
 <td>
 <select name="Country">
   <option value="-1" selected>[choose yours]</option>
   <option value="1">UAE</option>
   <option value="2">Canada</option>
   <option value="3">Sudan</option>
<option value="3">other</option> </select>
 </td> </tr> <tr>
 <td align="left"></td>
 <td><input type="submit" value="Submit" /></td>
 <td align="right"></td><td><input type="Reset" value="Reset" /></td> </tr> </table>
 </form>
</body>
</html>