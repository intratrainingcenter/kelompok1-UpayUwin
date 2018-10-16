function ShowPassword()
{
	if(document.getElementById("password1").value!="" || document.getElementById("password2").value!="")
	{
		document.getElementById("password1").type="text";
		document.getElementById("password2").type="text";
		document.getElementById("show").style.display="none";
		document.getElementById("hide").style.display="block";
	}
}

function HidePassword()
{
	if(document.getElementById("password1").type == "text" || document.getElementById("password2").value!="")
	{
		document.getElementById("password1").type="password"
		document.getElementById("password2").type="password"
		document.getElementById("show").style.display="block";
		document.getElementById("hide").style.display="none";
	}
}
