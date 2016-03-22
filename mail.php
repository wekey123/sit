
<form action="sendmail.php" method="post" >
        <table cellpadding="3" cellspacing="3" border="0" align="center">
           
            <tr>
            	<td align="right" valign="middle">To :</td>
                <td align="left" valign="middle"><input type="text" id="toNewEmail" style="width:500px;" class="validate[required]" value="" name="to"></td>
            </tr>
           <tr>
            	<td align="right" valign="middle">Subject :</td>
                <td align="left" valign="middle"><input type="text" id="subject" style="width:500px;" class="validate[required]" value="" name="subject"></td>
            </tr>
            <tr>
            	<td align="right" valign="middle">Message :</td>
                <td align="left" valign="middle"><textarea cols="70" rows="10" class="validate[required]" name="message" id="message"></textarea></td>
            </tr>
            <tr>
                <td align="center" colspan="2" valign="middle"><input type="submit" id="loginsub" name="Submit" value="Send Message">&nbsp;<input type="reset" name="cancel" value="Cancel" /></td>
            </tr>
        </table>
    </form>