ALTER DATABASE tsmith179 CHARACTER SET utf8 COLLATE utf8_unicode_ci;
DROP TABLE IF EXISTS favorite;
DROP TABLE IF EXISTS rating;
DROP TABLE IF EXISTS post;
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
	userId BINARY(16) NOT NULL,
	userActivationToken CHAR(32),
	userAtHandle VARCHAR(32) NOT NULL,
	userEmail VARCHAR(128) NOT NULL,
	userHash CHAR(97) NOT NULL,
	userPhone VARCHAR(32),
	UNIQUE(userAtHandle),
	UNIQUE(userEmail),
	PRIMARY KEY(userId)
);
CREATE TABLE post (
	postId BINARY(16) NOT NULL,
	postUserId BINARY(16) NOT NULL,
	postContent TEXT(5000) NOT NULL,
	postDate DATETIME(6) NOT NULL,
	postDescription TEXT(50) NOT NULL,
	postType CHAR(5) NOT NULL,
	postUrl VARCHAR(128) NOT NULL,
	INDEX(postUserId),
	FOREIGN KEY(postUserId) REFERENCES `user`(userId),
	PRIMARY KEY(postId)
);
CREATE TABLE rating (
	ratingPostId BINARY(16) NOT NULL,
	ratingUserId BINARY(16) NOT NULL,
	ratingDate DATETIME(6) NOT NULL,
	ratingValue TINYINT(1) NOT NULL,
	INDEX(ratingPostId),
	INDEX(ratingUserId),
	FOREIGN KEY(ratingPostId) REFERENCES post(postId),
	FOREIGN KEY(ratingUserId) REFERENCES `user`(userId),
	PRIMARY KEY(ratingPostId, ratingUserId)
);
CREATE TABLE favorite (
	favoritePostId BINARY(16) NOT NULL,
	favoriteUserId BINARY(16) NOT NULL,
	favoriteDate DATETIME(6) NOT NULL,
	INDEX(favoritePostId),
	INDEX(favoriteUserId),
	FOREIGN KEY(favoritePostId) REFERENCES post(postId),
	FOREIGN KEY(favoriteUserId) REFERENCES `user`(userId),
	PRIMARY KEY(favoritePostId, favoriteUserId)
);
