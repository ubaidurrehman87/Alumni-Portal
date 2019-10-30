function confirm_del(baseURL){
	var con = confirm("Are you Sure you want to delete?");
	if (con){  window.location= baseURL; }else{}
}

window.onload = function roleDisplay(){
	var division1,division2,color,tablink;
	
	tablink = document.getElementById('defaultOpen');
	color = "#7dd0b2";
	division1  = document.getElementById('Admins');
	division2  = document.getElementById('donor_js');
	
	division1.style.display = "block";
	division2.style.backgroundColor = "#999";
	tablink.style.backgroundColor = color;
}

function toggleRole(RoleName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "#999";
    }
    document.getElementById(RoleName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();