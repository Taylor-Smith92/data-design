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
			<li>favoriteUserId (FK)</li>
			<li>favoritePostingId (FK)</li>
		</ul>
		<h3>Rating Value</h3>
		<ul>
			<li>ratingValueId (PK)</li>
			<li>ratingValueUserId (FK)</li>
			<li>ratingValuePostingId (FK)</li>
		</ul>
		<h2>Relationships</h2>
		<ul>
			<li>One user can have many postings. (1 to n)</li>
			<li>One user can have many favorites. </li>
			<li>One user can have many ratingValues.</li>
		</ul>
	</body>
</html>