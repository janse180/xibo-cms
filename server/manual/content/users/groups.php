<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php include('../../template.php'); ?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title><?php echo PRODUCT_NAME; ?> Documentation</title>
		<link rel=stylesheet type="text/css" href="../../css/doc.css">
		<meta http-equiv="Content-Type" content="text/html" />
		<meta name="keywords" content="digital signage, signage, narrow-casting, <?php echo PRODUCT_NAME; ?>, open source, agpl" />
		<meta name="description" content="<?php echo PRODUCT_NAME; ?> is an open source digital signage solution. It supports all main media types and can be interfaced to other sources of data using CSV, Databases or RSS." />

		<link href="img/favicon.ico" rel="shortcut icon"/>
		<!-- Javascript Libraries -->
		<script type="text/javascript" src="lib/jquery.pack.js"></script>
		<script type="text/javascript" src="lib/jquery.dimensions.pack.js"></script>
		<script type="text/javascript" src="lib/jquery.ifixpng.js"></script>
	</head>
	<body>
		
		<h1>User Groups and Group Permissions</h1>
		
		<h2>Group Admin</h2>
		<p>The Group Admin page can only be accessed from the "Administration > Groups" navigation menu. Below figure shows the Group Admin page.</p>
		
	  	<p><img alt="Group Administration Page" src="group_admin_page.png"
	   	style="display: block; text-align: center; margin-left: auto; margin-right: auto"
	   	width="795" height="246"></p>
	   
		<ul>
			<li>
				<h3>Group Name</h3>
				<p>The group name uniquely identifys the group. It can be seen against each user in the "User Admin" page.</p>
			</li>
			<li>
				<h3>Add Group Button</h3>
				<p>Opens up the Add User Group Form allowing a new group to be added.</p>
			</li>
			<li>
				<h3>Edit / Delete Buttons</h3>
				<p>The Edit button allows groups to be edited.</p>
			</li>
			<li>
				<h3>Group Members Button</h3>
				<p>Modify member list of the group.</p>
			</li>
			<li>
				<h3>Page Security Button</h3>
		 		<p>The components security that are assigned/unassigned to the group determine the permissions of the users belonging to that group.</p>
				<p>Refer to <a href="menu_page_security.php">Page &amp; Menu Security</a> for more information.</p>
			</li>
			<li>
				<h3>Menu Security Button</h3>
		 		<p>The components security that are assigned/unassigned to the group determine the permissions of the users belonging to that group.</p>
				<p>Refer to <a href="menu_page_security.php">Page &amp; Menu Security</a> for more information.</p>
			</li>
		</ul>

		<a name="Adding_Group" id="Adding_Group"></a><h2>Adding a Group</h2>
		<p>To add a group click on the "Add Group" button found at the top left of this page.</p>

	  	<p><img alt="Group Add" src="group_admin_add.png"
	   	style="display: block; text-align: center; margin-left: auto; margin-right: auto"
	   	width="410" height="190"></p>

	<blockquote>	
		<h3>When should a group be added?</h3>
		<p>A group should be added when there is a new set of components required for a particular group of users.
		It could be that you want certain users to only have access to certain components or that certain users 
		shouldnt be able to share their content, playlists and schedules with each other.</p>
	</blockquote>	

    	<a name="Edit_Group" id="Edit_Group"></a><h2>Edit a Group</h2>
		<p>To edit a group click on the edit button on the row belonging to the group you wish to edit.</p>
	
  	  	<p><img alt="Group Edit" src="group_admin_edit.png"
	   	style="display: block; text-align: center; margin-left: auto; margin-right: auto"
	   	width="410" height="190"></p>

    	<a name="Delete_Group" id="Delete_Group"></a><h2>Delete a Group</h2>
		<p>To delete a group click on the delete button on the row belonging to the group you wish to be deleted.</p>
	
  	  	<p><img alt="Group Delete" src="group_admin_delete.png"
	   	style="display: block; text-align: center; margin-left: auto; margin-right: auto"
	   	width="407" height="187"></p>

		<a name="Group_Member" id="Group_Member"></a><h2>Group Members</h2>
		<p>Click the Group Members button to manage the members of the group. You can drag of double click on the memeber to 
    	include or exclude from the current group.</p>

	  	<p><img alt="Group Member" src="group_member.png"
	   	style="display: block; text-align: center; margin-left: auto; margin-right: auto"
	   	width="408" height="383"></p>

		<?php include('../../template/footer.php'); ?>
	</body>
</html>