CREATE DATABASE IF NOT EXISTS blog;

USE blog;

DROP TABLE IF EXISTS blog.articles;
DROP TABLE IF EXISTS blog.authors;
DROP TABLE IF EXISTS blog.categories;

CREATE TABLE IF NOT EXISTS blog.authors (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE (email)
);

CREATE TABLE IF NOT EXISTS blog.categories (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE (name)
);

CREATE TABLE IF NOT EXISTS blog.articles (
  id INT NOT NULL AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL,
  content TEXT NOT NULL,
  status VARCHAR(255) NOT NULL,
  author_id INT,
  category_id INT,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  FOREIGN KEY (author_id) REFERENCES authors(id) ON DELETE SET NULL,
  FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE SET NULL,
  UNIQUE (title)
);

INSERT INTO blog.authors (id, name, email) VALUES 
(1, 'James Cooper', 'jcooper@gmail.com'),
(2, 'Ali Adam', 'aliadam@gmail.com'),
(3, 'Aishat Ahmad', 'aishathahmad@gmail.com');

INSERT INTO blog.categories (id, name) VALUES 
(1, 'Programming'),
(2, 'Frontend'),
(3, 'Backend'),
(4, 'Gaming');


INSERT INTO blog.articles (id, title, content, status, author_id, category_id) VALUES 
(1, 'Learn TypeScript in 5 minutes', 'TypeScript is a typed superset of JavaScript, aimed at making the language more scalable and reliable.
It’s open-source and has been maintained by Microsoft since they created it in 2012. 
However, TypeScript got its initial breakthrough as the core programming language in Angular 2. 
It’s been continuing to grow ever since, also in the React and Vue communities.', 'Published', 1, 1),
(2, 'Complete Guide to CSS Media Queries', "Media queries are what make modern responsive design possible. 
With them you can set different styling based on things like a users screen size, device capabilities or user preferences. 
But how do they work, which ones are there and which ones should you use? Here's the complete guide to media queries.", 'Published', 2, 2),
(3, 'Tetris Tips for Beginners', 'Tetris skyrocketed in popularity in part because it is simple to play.
 Most people don’t need lengthy tutorials to make the Tetriminos fit. 
Of course, some tips wouldn’t hurt! With this in mind, below are some Tetris tips to help transform you into a better player.', 'Published', 1 , 4),
(4, 'An overview of SQL Join types with examples' , 'SQL JOIN is a clause that is used to combine multiple tables and retrieve data based 
on a common field in relational databases. Database professionals use normalizations 
for ensuring and improving data integrity. In the various normalization forms, data is distributed into multiple logical tables.','Published', 2, 3),
(5, '15 Best PHP Libraries Every Developer Should Know
' , "PHP is a powerful Web site scripting language that makes it easier for Web site developers to create dynamic and engaging Web pages. 
Developers can use PHP code with a number of Web site templates and frameworks for improved functionality and features. 
However, writing PHP code can be a tedious and time-consuming process. 
In order to reduce development time, developers can use PHP libraries instead of writing code to add features to the site.",'Published', 2, 3),
(6, 'JavaScript to Know for React', "One of the things I love most about React compared to other frameworks that I've used is how exposed you are to JavaScript when you're using it. 
There's no template DSL (JSX compiles to sensible JavaScript), 
the component API has only gotten simpler with the addition of React Hooks, 
and the framework offers you very little abstraction outside the core UI concerns it's intended to solve.", 'Published', 3, 1);