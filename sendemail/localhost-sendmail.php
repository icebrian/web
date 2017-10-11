<form name="contactform" method="post" action="send_form_email.php">
<table width="450px">
<tr>
 <td valign="top">
  <label for="subject">Subject *</label>
 </td>
 <td valign="top">
  <input  type="text" name="subject" maxlength="100" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments">Body *</label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">
 </td>
</tr>
</table>
</form>
