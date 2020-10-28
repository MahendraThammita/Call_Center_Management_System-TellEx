var index = 0;


function nextimg(x) 
{
  show(index = index + x);
}

function show(n) 
{
  var a;
  var slides = document.getElementsByClassName("change");
  
  if (n > slides.length) 
  {
	  index = 1;
	  
  } 
  if (n < 1) 
  {
	  index = slides.length;
	  
  }
  for (a = 0; a < slides.length; a++) 
  {
      slides[a].style.display = "none"; 
  }
  
  slides[index-1].style.display = "block";
  
  
}


/*var slideIndex = 0;
showS();

function showS() {
  var i;
  var slides = document.getElementsByClassName("change");
 
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  
  slides[slideIndex-1].style.display = "block";  

  setTimeout(showS, 2000); // Change image every 2 seconds
}


*/

function dial(name)			//this function used for the dialing pad
{
	
	
	if(name == "AA1")
	{
		
		document.getElementById("vatnum").value =  document.getElementById("vatnum").value + "1" ;
	}
	if(name == "AA2")
	{
		
		document.getElementById("vatnum").value =  document.getElementById("vatnum").value + "2"  ;
	}
	if(name == "AA3")
	{
		document.getElementById("vatnum").value =  document.getElementById("vatnum").value + "3"  ;
	}
	if(name == "AA4")
	{
		document.getElementById("vatnum").value =  document.getElementById("vatnum").value + "4"  ;
	}
	if(name == "AA5")
	{
		document.getElementById("vatnum").value =  document.getElementById("vatnum").value + "5"  ;
	}if(name == "AA6")
	{
		document.getElementById("vatnum").value =  document.getElementById("vatnum").value + "6"  ;
	}
	if(name == "AA17")
	{
		document.getElementById("vatnum").value =  document.getElementById("vatnum").value + "7"  ;
	}
	if(name == "AA8")
	{
		document.getElementById("vatnum").value =  document.getElementById("vatnum").value + "8"  ;
	}
	if(name == "AA9")
	{
		document.getElementById("vatnum").value =  document.getElementById("vatnum").value + "9"  ;
	}
	if(name == "AA0")
	{
		document.getElementById("vatnum").value =  document.getElementById("vatnum").value + "0"  ;
	}
	if(name == "AA*")
	{
		document.getElementById("vatnum").value =  document.getElementById("vatnum").value + "*"  ;
	}
	if(name == "AA#")
	{
		document.getElementById("vatnum").value =  document.getElementById("vatnum").value + "#"  ;
	}
	
	
}

function showform() 		//to validate the dialing pad this funcyion is used.
{
	if(document.getElementById("vatnum").value >= 100000000 && document.getElementById("vatnum").value <= 9999999999  ) 
	{
		document.getElementById("dialing").style.display = "block";
		document.getElementById("numsub2").style.display = "block";
	}
	else if(document.getElementById("vatnum").value == "")
	{
		alert("please enter the phone number again");
		return false;
	}
	else
	{
		alert("You entered an invalid phone number");
		return false;
	}
	
}

function hideform() 		//to hide the customer data gathering form this function is used.
{
	document.getElementById("dialing").style.display = "none";
	alert("Record is successfully saved");
}

function addagent() 
{
	if(document.forms["agefrm"]["agid"].value == "")
	{
		alert("please enter the Agent Id ");
		return false;
	}
	if(document.forms["agefrm"]["fphone"].value == "")
	{
		alert("please enter the phone number");
		return false;
	}
	
	if(document.forms["agefrm"]["fname"].value == "")
	{
		alert("please enter the First name ");
		return false;
	}
	
	if(document.forms["agefrm"]["atype"].value == "")
	{
		alert("please mention the agent type ");
		return false;
	}
	
	else
	{
		alert("Agent added successfully ");
		location.replace("add agent.html");
	}
	
}
function onbtn()
{
	if(document.getElementById("testchck").checked)
	{
		document.getElementById("addagacc").disabled = false;
	}
	else
	{
		document.getElementById("addagacc").disabled = true;
	}
}

function custchck() 
{
	if(document.forms["dialform"]["First name"].value == "")
	{
		alert("please enter the first name ");
		return false;
	}
	if(document.forms["dialform"]["telephone"].value == "")
	{
		alert("please enter the phone number");
		return false;
	}
	
	if(document.forms["dialform"]["NIC"].value == "")
	{
		alert("please enter the NIC number ");
		return false;
	}
	
	if(document.forms["dialform"]["solve"].value == "")
	{
		alert("please mention the solving status ");
		return false;
	}
	
	else
	{
		document.getElementById("submbtn").disabled = false;
		alert("call ended successfully");
		
		var time = new Date();
		var etime = time.getHours() + ":" + time.getMinutes() + ":" + time.getSeconds();
		
		document.getElementById("cllend").value = etime;
	}
	
}



