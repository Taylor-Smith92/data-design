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
			<li>userId (PK)</li>
			<li>userName</li>
			<li>userPassword</li>
			<li>userEmail</li>
		</ul>
		<h3>Posting</h3>
		<ul>
			<li>postingId (PK)</li>
			<li>postingUserId (FK)</li>
			<li>postingType</li>
			<li>postingDescription</li>
			<li>postingUploadDate</li>
			<li>postingUrl</li>
		</ul>
		<h3>Favorite</h3>
		<ul>
			<li>favoriteId (PK)</li>
			<li>favoriteUserId (FK)</li>
		</ul>
		<h2>Relationships</h2>
		<ul>
			<li>One user can have many postings.</li>
			<li>One user can have many favorites.</li>
		</ul>
	</body>
</html>