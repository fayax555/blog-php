USE blog;

DROP TABLE blog.articles;
DROP TABLE blog.authors;
DROP TABLE blog.categories;


CREATE TABLE blog.authors (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE (email)
);

CREATE TABLE blog.categories (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE blog.articles (
  id INT NOT NULL AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL,
  content VARCHAR(255) NOT NULL,
  status VARCHAR(255) NOT NULL,
  author_id INT,
  category_id INT,
  PRIMARY KEY (id),
  FOREIGN KEY (author_id) REFERENCES authors(id) ON DELETE CASCADE,
  FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE
);

INSERT INTO blog.authors (id, name, email) VALUES 
(1, 'James Cooper', 'jcooper@gmail.com'),
(2, 'Ali Adam', 'aliadam@gmail.com');

INSERT INTO blog.categories (id, name) VALUES 
(1, 'Programming'),
(2, 'Frontend');

INSERT INTO blog.articles (id, title, content, status, author_id, category_id) VALUES 
(1, 'Learn TypeScript in 5 minutes', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.', 'Published', 1, 2),
(2, 'Complete Guide to CSS Media Queries', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.', 'Draft', 2, 1);

SELECT * FROM blog.authors;
SELECT * FROM blog.categories;
SELECT * FROM blog.articles;


describe articles;
describe `blog`.`authors`;


show tables;