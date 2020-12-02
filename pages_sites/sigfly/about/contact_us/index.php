
<script>

var smFields = new formFields();
// first_name
// last_name
// email
// state
// phone
// 00N30000000x0Xx -- approximate monthly budget

</script>

<form id="contactform" name="loginform" action="<?=$_SERVER['SCRIPT_NAME'];?>" method="post" onSubmit="return smFields.validateForm(this);">
<input type=hidden name=page value="<?=htmlspecialchars(PAGE_C); ?>">

<h2>Please fill out this form:
<br><span>All fields are required.</span></h2>
			
	<table bgcolor="#ffffff" border="0">
			<tr>
				<td>Company Name:</td>
				<td><input class="text" name="company" id="company" type="text" size=20 maxlength=80><br></td>
			</tr>
			<tr>
				<td>Company URL:</td>
				<td><input class="text" name="URL" id="URL" type="text" size=20 maxlength=80><br></td>
			</tr>
			<tr>
				<td>Products/Services Offered:</td>
				<td><input class="text" name="products" id="00N30000000x0iL" type="text" size=20 maxlength=255></td>
			</tr>
			<tr>
				<td class="mainText">First Name:</td>
				<td><input class="text" name="first_name" id="first_name" type="text" size=20 maxlength=40></td>
			</tr>
			<tr>
				<td>Last Name:</td>
				<td><input class="text" name="last_name" id="last_name" type="text" size=20 maxlength=40><br></td>
			</tr>
			<tr>
				<td>Job Title:</td>
				<td><input class="text" name="title" id="title" type="text" size=20 maxlength=80></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input class="text" name="email" id="email" type="text" size=20 maxlength=80></td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><textarea name="street"></textarea><br></td>
			</tr>
			<tr>
				<td>City:</td>
				<td><input class="text" name="city" id="city" type="text" size=20 maxlength=40></td>
			</tr>
			<tr>
				<td>State/Province:</td>
					<td>
					<select class="text" name="state" id="state">
<option value="--">-- Please Select One --</option>
<option value="AK">Alaska</option>
<option value="AL">Alabama</option>
<option value="AR">Arkansas</option>
<option value="AZ">Arizona</option>
<option value="CA">California</option>

<option value="CO">Colorado</option>
<option value="CT">Connecticut</option>
<option value="DC">District of Columbia</option>
<option value="DE">Delaware</option>
<option value="FL">Florida</option>
<option value="GA">Georgia</option>

<option value="HI">Hawaii</option>
<option value="IA">Iowa</option>
<option value="ID">Idaho</option>
<option value="IL">Illinois</option>
<option value="IN">Indiana</option>

<option value="KS">Kansas</option>
<option value="KY">Kentucky</option>
<option value="LA">Louisiana</option>
<option value="MA">Massachusetts</option>
<option value="MD">Maryland</option>

<option value="ME">Maine</option>
<option value="MI">Michigan</option>
<option value="MN">Minnesota</option>
<option value="MO">Missouri</option>
<option value="MS">Mississippi</option>

<option value="MT">Montana</option>
<option value="NC">North Carolina</option>
<option value="ND">North Dakota</option>
<option value="NE">Nebraska</option>
<option value="NH">New Hampshire</option>

<option value="NJ">New Jersey</option>
<option value="NM">New Mexico</option>
<option value="NV">Nevada</option>
<option value="NY">New York</option>
<option value="OH">Ohio</option>

<option value="OK">Oklahoma</option>
<option value="OR">Oregon</option>
<option value="PA">Pennsylvania</option>
<option value="RI">Rhode Island</option>
<option value="SC">South Carolina</option>

<option value="SD">South Dakota</option>
<option value="TN">Tennessee</option>
<option value="TX">Texas</option>
<option value="UT">Utah</option>
<option value="VA">Virginia</option>

<option value="VT">Vermont</option>
<option value="WA">Washington</option>
<option value="WI">Wisconsin</option>
<option value="WV">West Virginia</option>
<option value="WY">Wyoming</option>

<option value="XX">-- Other (Not Listed)</option>
</select>
<!--<input class="text" name="state" id="state" type="text" size=20 maxlength=20>--></td>
			</tr>
			<tr>
				<td>Zip:</td>
				<td><input class="text" name="zip" id="zip" type="text" size=20 maxlength=20></td>
			</tr>
			<tr>
				<td>Country:</td>
				<td><input class="text" name="country" id="country" type="text" size=20 maxlength=40></td>
			</tr>
			<tr>
				<td>Phone:</td>
				<td><input class="text" name="phone" id="phone" type="text" size=20 maxlength=40></td>
			</tr>
			<tr>
				<td>What is your primary advertising objective?</td>
				<td>
<select name="objective" id="00N30000000x0fR">
<option value="--">-- Please Select One --</option>
<option value="Brand Awareness">Brand Awareness</option>
<option value="Direct Product Sales">Direct Product Sales</option>
<option value="Drive Traffic">Drive Traffic</option>
<option value="Lead Generation">Lead Generation</option>
<option value="Registration/Database Growth">Registration/Database Growth</option>
</select></td>
			</tr>
			<tr>
				<td>What is your primary target?</td>
				<td>
<select name="target" id="00N30000000x0ey">
<option value="--">-- Please Select One --</option>
<option value="Businesses">Businesses</option>
<option value="Consumers">Consumers</option>
</select></td>
			</tr>
			<tr>
				<td>What is your approximate monthly budget?</td>
				<td>
<select name="budget" id="00N30000000x0Xx">
<option value="--">-- Please Select One --</option>
<option value="$0-$5,000">$0-$5,000</option>
<option value="$5,000-$10,000">$5,000-$10,000</option>
<option value="$10,000-$30,000">$10,000-$30,000</option>
<option value="$30,000-$50,000">$30,000-$50,000</option>
<option value="$50,000-$100,000">$50,000-$100,000</option>
<option value="$100,000+">$100,000+</option>
</select></td>
			</tr>
<?php /*			<tr>
				<td>When are you ready to advertise?</td>
				<td>
<select name="advertise" id="00N30000000x0hd">
<option value="--">-- Please Select One --</option>
<option value="Immediately">Immediately</option>
<option value="1-2 Months">1-2 Months</option>
<option value="3 Months or more.">3 Months or more.</option>
</select></td>
			</tr> */ ?>
			<tr>
				<td>How did you hear about us?</td>
				<td>
<select name="lead_source" id="lead_source">
<option value="--">-- Please Select One --</option>
<option value="Advertisement">Advertisement</option>
<option value="Web">Web</option>
<option value="Banner">Banner</option>
<option value="Email">Email</option>
<option value="Google">Google</option>
<option value="Yahoo">Yahoo</option>
<option value="Trade Show">Trade Show</option>
<option value="Employee Referral">Employee Referral</option>
<option value="External Referral">External Referral</option>
<option value="Word of mouth">Word of mouth</option>
<option value="Other">Other</option>
</select></td>
			</tr>
			<tr>
				<td>Is there any other information that would help us better serve your needs?</td>
				<td><TEXTAREA wrap="SOFT" NAME="information" id="00N30000000x0iV" ROWS="6"></TEXTAREA></td>
			</tr>
			<tr>
				<td ></td>
				<td>
				<br>
				<ul><li class="buttons"><input type="submit" name="submit"></li></ul>
				</td>
			</tr>
	</table>

</form>

