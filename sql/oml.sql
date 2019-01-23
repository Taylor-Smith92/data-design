INSERT INTO `user` (userId, userActivationToken, userAtHandle, userEmail, userHash, userPhone)
VALUES (UNHEX("59d7a4512f5a45ee80142dad438528f1"), "nananananananananananananananana", "myAtHandle", "email@email.com",
	"nanananananananananananananananananananananananananananananananananananananananananananananananaa", "505-555-5555");

INSERT INTO `user` (userId, userActivationToken, userAtHandle, userEmail, userHash, userPhone)
VALUES (UNHEX("ea781c7050ad485ea8bba6db34d54ce0"), "nananananananananananananananana", "Guitar Guy", "otheremail@email.com",
	"nanananananananananananananananananananananananananananananananananananananananananananananananaa", "505-505-5555");

INSERT INTO `user` (userId, userActivationToken, userAtHandle, userEmail, userHash, userPhone)
VALUES (UNHEX("c5df619447b74d10bbb28e544e62e439"), "nananananananananananananananana", "Guitar_Gal", "guitargal@email.com",
	"nanananananananananananananananananananananananananananananananananananananananananananananananaa", "505-595-5555");

INSERT INTO post (postId, postUserId, postContent, postDate, postDescription, postType, postUrl)
VALUES (UNHEX("7a0c82c2f1c24f87a8392771fd53c454"), UNHEX("59d7a4512f5a45ee80142dad438528f1"),
	"lots of content", NOW(), "that great song you like by that band you love", "TAB", "ultGuitar.fake/thatGreatSong")

UPDATE `user` SET userAtHandle = "Music Lover", userEmail = "myemail@email.com" WHERE userId = UNHEX("59d7a4512f5a45ee80142dad438528f1");

DELETE FROM `user` WHERE userId = UNHEX("ea781c7050ad485ea8bba6db34d54ce0");

SELECT userAtHandle, userEmail, userPhone  FROM `user` WHERE userId = UNHEX("c5df619447b74d10bbb28e544e62e439");

SELECT user.userAtHandle, post.postDescription, post.postType, post.postContent, post.postDate
FROM post INNER JOIN `user` on post.postUserId = user.userId WHERE postDescription = "that great song you like by that band you love";

# `count the number of favorites`