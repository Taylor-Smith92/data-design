<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Conceptual Model</title>
	</head>
	<body>
		<h1>Conceptual Model</h1>
		<h2>Entities & Attributes</h2>
		<h3>User</h3>
		<ul>
			<li>userId (primary key)</li>
			<li>userEmail</li>
			<li>userName</li>
			<li>userPassword</li>
		</ul>
		<h3>Post</h3>
		<ul>
			<li>postId (primary key)</li>
			<li>postUserId (foreign key)</li>
			<li>postDate</li>
			<li>postDescription</li>
			<li>postType</li>
			<li>postUrl</li>
		</ul>
		<h3>Rating</h3>
		<ul>
			<li>ratingId (primary key)</li>
			<li>ratingPostId (foreign key)</li>
			<li>ratingUserId (foreign key)</li>
			<li>ratingValue</li>
		</ul>
		<h3>Favorite (weak entity)</h3>
		<ul>
			<li>favoritePostId (foreign key)</li>
			<li>favoriteUserId (foreign key)</li>
		</ul>
		<h2>Relationships</h2>
		<ul>
			<li>One user can have many posts. (1 to n)</li>
			<li>One user can have many favorites. (1 to n)</li>
			<li>One user can have many ratings. (1 to n)</li>
			<li>One post can have many favorites. (1 to n)</li>
			<li>One post can have many ratings. (1 to n)</li>
		</ul>
	</body>
</html>