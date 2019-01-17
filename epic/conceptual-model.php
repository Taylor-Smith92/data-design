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
			<li>userName</li>
			<li>userPassword</li>
			<li>userEmail</li>
		</ul>
		<h3>Posting</h3>
		<ul>
			<li>postingId (primary key)</li>
			<li>postingUserId (foreign key)</li>
			<li>postingType</li>
			<li>postingDescription</li>
			<li>postingUploadDate</li>
			<li>postingUrl</li>
		</ul>
		<h3>Favorite (weak entity)</h3>
		<ul>
			<li>favoriteUserId (foreign key)</li>
			<li>favoritePostingId (foreign key)</li>
		</ul>
		<h2>Relationships</h2>
		<ul>
			<li>One user can have many postings. (1 to n)</li>
			<li>Many postings can be favorites of many users. (m to n)</li>

		</ul>
	</body>
</html>