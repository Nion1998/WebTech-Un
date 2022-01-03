const form=document.getElementById("reg");
const uname=document.getElementById("uname");
const pass=document.getElementById("pass");


form.addEventListener("submit",(e)=>{
	e.preventDefault();
	validate();
	
});

function validate(){
	var username=uname.value;
	var email=maili.value;
	var phone=phn.value;
	var password=pass.value;
	var nid=nidc.value;

	if(username=='')
	{
		setError(uname,'Username is blank');
		
	}
	else
	{
		setSuccess(uname);
	}

	if(email=='')
	{
		setError(maili,'Email is blank');
	
	}
	else
	{
		setSuccess(maili);
	}
	
	if(phn=='')
	{
		setError(phn,'Phone is blank');
	
	}
	else
	{
		setSuccess(phn);
	}

	if(pass=='')
	{
		setError(pass,'Passward is blank');
	
	}
	else
	{
		setSuccess(pass);
	}
	if(nidc=='')
	{
		setError(nidc,'NID is blank');
	
	}
	else
	{
		setSuccess(nidc);
	}



	
	
}
function setError(input,msg)
{
	
	const formcontrol=document.getElementById("form-control");
	const small=formcontrol.querySelector('small');
	const itag=formcontrol.querySelector('i');
	
	small.innerText=msg;
	small.style.color="red";
	small.style.visibility="visible";
	
	itag.style.color="red";
	itag.style.visibility="visible";
	uname.style.borderColor="red";
	
	
	
}
function setSuccess(input)
{
	const formcontrol=input.parent;
	
	formcontrol.className='form-control success';
}
