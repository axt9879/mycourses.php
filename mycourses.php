<?php
$cls1 = "686389";
$cls2 = "682607";
$cls3 = "680109";
$cls4 = "679561";
$cls5 = "677555";
$cls6 = "677119";

function printLinks($cls) {
	//Takes a class' number and
	// prints 7 links for that class
	echo "
	<ul>
	<li><a target='_blank' href='https://mycourses.rit.edu/d2l/home/$cls'>Hompage</a></li>
	<li><a target='_blank' href='https://mycourses.rit.edu/d2l/le/content/$cls/Home'>Content</a></li>
	<li><a target='_blank' href='https://mycourses.rit.edu/d2l/lms/classlist/classlist.d2l?ou=$cls'>Class List</a></li>
	<li><a target='_blank' href='https://mycourses.rit.edu/d2l/lms/group/group_list.d2l?ou=$cls'>Groups</a></li>
	<li><a target='_blank' href='https://mycourses.rit.edu/d2l/lms/dropbox/dropbox.d2l?ou=$cls'>Dropbox</a></li>
	<li><a target='_blank' href='https://mycourses.rit.edu/d2l/le/$cls/discussions/List?ou=$cls'>Discussions</a></li>
	<li><a target='_blank' href='https://mycourses.rit.edu/d2l/lms/grades/my_grades/main.d2l?ou=$cls'>Grades</a></li>
	</ul>
	";
}
?>
<html>

<head>

<script>

</script>

<style>
td{
	padding-right:25px;
}
table, td{
	border-style:solid;
	border-color:black;
}
.noStyle{
	border-style:none;
}
div{
	display:inline;
}
</style>
<title>MyCourses</title>
</head>

<body>
<iframe frameborder=0 height=0 width=0></iframe>
<table border=0>
<tr>
<td><ledgend><a target="_blank" href="https://cs.rit.edu/~csci142">Computer Science 2</a></ledgend><br><?php printLinks($cls1);  ?></td>
<td><ledgend>Discrete Math</ledgend><br><?php printLinks($cls2);  ?></td>
<td><ledgend>Routing and Switching</ledgend><br><?php printLinks($cls3);  ?></td>
<td rowspan="2" style="padding-right:0;"><iframe src="https://tigerbucks.rit.edu/tigerBucks/app/index.html#/tab/summary" height=420>
</iframe>
</td>
</tr>
<tr>
<td><ledgend>Moral</ledgend><br><?php printLinks($cls4);  ?></td>
<td><ledgend>Writing Seminar</ledgend><br><?php printLinks($cls5);  ?></td>
<td><ledgend>Aikido</ledgend><br><?php printLinks($cls6);  ?></td></tr>
<tr>
<td colspan="2" style="padding-right:0;"><div>
<table border="0" width="100%">
<tr><td class="noStyle">
<a target='_blank' href="https://csec-labops.igm.rit.edu/public/displayPublicLab/">Lab Hours</a><br>
<a target='_blank' href="http://www.istlabs.rit.edu/">ISTLabs</a><br>
</td>
<td class="noStyle">
<a target='_blank' href="https://tigerbuck.rit.edu">Bucks</a><br>
<a target='_blank' href="https://en.todoist.com/app?lang=en#start">Todoist</a><br>
</div>
</td></tr>
</table>

</body>

</html>
