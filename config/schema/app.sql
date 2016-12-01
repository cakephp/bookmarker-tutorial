-- Reset state
DROP TABLE IF EXISTS bookmarks_tags;
DROP TABLE IF EXISTS bookmarks;
DROP TABLE IF EXISTS tags;
DROP TABLE IF EXISTS users;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created DATETIME,
    modified DATETIME
);

CREATE TABLE bookmarks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    title VARCHAR(50),
    description TEXT,
    url TEXT,
    created DATETIME,
    modified DATETIME,
    FOREIGN KEY user_key (user_id) REFERENCES users(id)
);

CREATE TABLE tags (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    created DATETIME,
    modified DATETIME,
    UNIQUE KEY (title)
);

CREATE TABLE bookmarks_tags (
    bookmark_id INT NOT NULL,
    tag_id INT NOT NULL,
    PRIMARY KEY (bookmark_id, tag_id),
    FOREIGN KEY tag_key(tag_id) REFERENCES tags(id),
    FOREIGN KEY bookmark_key(bookmark_id) REFERENCES bookmarks(id)
);

-- Insert Sample Data
INSERT INTO `users` VALUES (1,'user@example.com','$2y$10$mC71iGlr.MzYoueQDoOmcOHIq3621JHfUhLy.jT2fvH2fx.6ACwou','2016-12-01 03:10:35','2016-12-01 03:10:35');

INSERT INTO `tags` VALUES (1,'php','2016-12-01 03:12:11','2016-12-01 03:12:11'),(2,'cakephp','2016-12-01 03:12:11','2016-12-01 03:12:11'),(3,'development','2016-12-01 03:12:11','2016-12-01 03:12:11'),(4,'opensource','2016-12-01 03:13:03','2016-12-01 03:13:03'),(5,'firefox','2016-12-01 03:13:03','2016-12-01 03:13:03'),(6,'rust','2016-12-01 03:13:03','2016-12-01 03:13:03'),(7,'servo','2016-12-01 03:13:03','2016-12-01 03:13:03'),(8,'ssl','2016-12-01 03:14:08','2016-12-01 03:14:08'),(9,'security','2016-12-01 03:14:08','2016-12-01 03:14:08'),(10,'documentation','2016-12-01 03:14:53','2016-12-01 03:14:53');

INSERT INTO `bookmarks` VALUES (1,1,'CakePHP','Build Fast, Grow Solid','http://cakephp.org','2016-12-01 03:12:11','2016-12-01 03:12:11'),(2,1,'Mozilla','Internet for People, Not Profit','http://mozilla.org','2016-12-01 03:13:03','2016-12-01 03:13:03'),(3,1,'LetsEncrypt','Free open Certificate Authority','https://letsencrypt.org','2016-12-01 03:14:08','2016-12-01 03:14:08'),(4,1,'CakePHP API','API for CakePHP','http://api.cakephp.org','2016-12-01 03:14:53','2016-12-01 03:14:53'),(5,1,'Mozilla Developer Network','MDN','https://developer.mozilla.org/en-US/','2016-12-01 03:15:22','2016-12-01 03:15:22');

INSERT INTO `bookmarks_tags` VALUES (1,1),(1,2),(4,2),(1,3),(2,4),(3,4),(5,4),(2,5),(2,6),(2,7),(3,8),(3,9),(4,10),(5,10);
