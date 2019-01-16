<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Use Case</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Use Case</h1>
		<ul>
			<li>Title: Brock Learns a Song on Ultimate-Guitar.com</li>
			<li>Description: A user wants to learn the chord progression to a popular song posted on Ultimate-Guitar and have a quick way to access it.</li>
			<li>Name of user & their role: Brock Lee; musician who recently created an Ultimate-Guitar account.</li>
			<li>Usage Pre-Conditions: Must have an internet capable device. Must have an account and be signed in.</li>
			<li>Usage Post-Conditions: Ultimate-Guitar saves favorite posting to user's "My Tabs" folder.</li>
			<li>Interaction Flow:
				<ul>
					<li>Brock enters ultimate-guitar.com into his web browser.</li>
					<li>Server returns the main page for the Ultimate Guitar site. Brock is already signed in.</li>
					<li>Brock sees that the counter for his "My Tabs" folder is 0.</li>
					<li>Brock selects the search field at the top of that page and begins typing "Bohemian Rhapsody".</li>
					<li>A drop down window attempts to autofill the search terms.</li>
					<li>Brock selects the song title he wants to search for from the autofill list.</li>
					<li>Server returns the results of that search.</li>
					<li>Brock reads through the results of user submitted postings and clicks the link for the one with the best rating.</li>
					<li>The server returns the page for the chosen posting.</li>
					<li>Brock begins looking over the page and notices that the heart in the "Favorite" button is not red, so he clicks it.</li>
					<li>Server completes the request to add this posting to user's "My Tabs" folder.</li>
					<li>Brock can see that heart in the "Favorite" button is now red and that the "My Tabs" counter has increased by one.</li>
				</ul>
			</li>
			<li>Frequency of Use: Everyday</li>
		</ul>
	</body>
</html>
