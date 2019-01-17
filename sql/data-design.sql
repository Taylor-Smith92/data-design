ALTER DATABASE tsmith179 CHARACTER SET utf8 COLLATE utf8_unicode_ci;
DROP TABLE IF EXISTS `user`;
DROP TABLE IF EXISTS post;
DROP TABLE IF EXISTS rating;
DROP TABLE IF EXISTS favorite;
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
