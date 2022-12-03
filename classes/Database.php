<?php
class Database
{
  public function connect()
  {
    return new PDO(
      'mysql:host=localhost; dbname=blog; charset=utf8mb4',
      'root',
      ''
    );
  }
}