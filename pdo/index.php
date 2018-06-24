<?php

  // pdo = php data object
  // a php extension to connect with one or more databases
  // provides a data access layer (same functions for different dbs)
  // is completely oop
  // security granted through prepared statements

  // 3 main classes:
  //  PDO → connection between php and db
  //  PDOStatement → prepared statement and once executed, an associated result
  //  PDOExceptions → error raised by PDO

  $host     = 'localhost';
  $user     = 'root';
  $password = '123456';
  $dbname   = 'pdoposts';

  // 1 - set the dsn (data source name)
  $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

  // 2 - create pdo instance (connection)
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

  // 3 - make queries
  // query method - if there's no user input or any kind of variable
  // ---------------------------------------------------------------
  // $stmt = $pdo->query('SELECT * FROM posts');

  // fetching data as associative arrays
  // http://php.net/manual/en/pdostatement.fetch.php
  // while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  //   echo ($row['title']) . '</br>';
  // }

  // fetching data as objects
  // http://php.net/manual/en/pdostatement.fetch.php
  // while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
  //   echo ($row->title) . '</br>';
  // }

  // defining a fetch option default and fetching data
  // http://php.net/manual/en/pdo.setattribute.php
  // $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  // while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
  //   echo ($row->title) . '</br>';
  // }


  // prepared statements (prepare and execute) - in all other cases
  // --------------------------------------------------------------
  // → multiple posts - positional parameters
  // $author = 'Carmen';
  // $sql = 'SELECT * FROM posts WHERE author = ?';
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute([$author]);
  // $posts = $stmt->fetchAll();

  // foreach($posts as $post) {
  //   echo $post->title . '</br>';
  // }

  // → multiple posts - named parameters
  // $author = 'Fab';
  // $is_published = true;
  // $sql = 'SELECT * FROM posts WHERE author = :author && is_published = :is_published';
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute(['author' => $author, 'is_published' => $is_published]);
  // $posts = $stmt->fetchAll();

  // foreach($posts as $post) {
  //   echo $post->title . '</br>';
  // }

  // → get single post
  // $id = 1;
  // $author = 'Fab';
  // $is_published = true;
  // $sql = 'SELECT * FROM posts WHERE id = :id';
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute(['id' => $id]);
  // $post = $stmt->fetch();

  // echo $post->body;

  // → get row count
  // $author = 'Fab';
  // $is_published = true;
  // $stmt = $pdo->prepare('SELECT * FROM posts WHERE author = ? && is_published = ?');
  // $stmt->execute([$author, $is_published]);
  // $postCount = $stmt->rowCount();

  // echo $postCount;

  // → insert a nwe post
  // $title = 'Post Five';
  // $author = 'Fab';
  // $body = 'This is post five';
  // $is_published = true;

  // $sql = 'INSERT INTO posts(title, author, body, is_published) VALUES(:title, :author, :body, :is_published)';
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute(['title' => $title, 'author' => $author, 'body' => $body, 'is_published' => $is_published]);
  // echo 'Post Added';

  // → update a post
  // $id = 1;
  // $body = 'This is the updated post one';
  // $sql = 'UPDATE posts SET body = :body WHERE id = :id';
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute(['body' => $body, 'id' => $id]);
  // echo 'Post Updated';

  // → delete a post
  // $id = 3;
  // $sql = 'DELETE FROM posts WHERE id = :id';
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute(['id' => $id]);
  // echo 'Post Deleted';

  // → like operator
  // $search = '%f%';
  // $sql = 'SELECT * FROM posts WHERE title LIKE ?';
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute([$search]);
  // $posts = $stmt->fetchAll();

  // foreach($posts as $post) {
  //   echo $post->title . '</br>';
  // }

  // → limit the number of posts
  // set the emulation mode to false for this 
  // otherwise it's not going to work
  // https://michaelseiler.net/2016/07/04/dont-emulate-prepared-statements-pdo-mysql/
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $author = 'Fab';
  $is_published = 1;
  $limit = 1;
  $sql = 'SELECT * FROM posts WHERE author = ? && is_published = ? LIMIT ?';
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$author, $is_published, $limit]);
  $posts = $stmt->fetchAll();

  foreach($posts as $post) {
    echo $post->title . '</br>';
  }


