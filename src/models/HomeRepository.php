<?php

namespace App\Model;

use App\Libs\DatabaseConnection;

require("src/libs/DatabaseConnection.php");

class Home {
  public string $title;
  public string $subtitle;
  public string $subscriptionDuration;
  public string $subscriptionPrice;
  public string $videoQuality;
}

class HomeRepository {
  public DatabaseConnection $connection;

  public function getProducts() : array
  {
    $statement = $this->connection->getConnection()->prepare("SELECT * FROM homepage");
    $statement->execute();

    $lists = [];

    while ($row = $statement->fetch()) {
      $home = new Home;
      $home->title = $row["title"];
      $home->subtitle = $row["subtitle"];
      $home->subscriptionDuration = $row["subscription_duration"];
      $home->subscriptionPrice = $row["subscription_price"];
      $home->videoQuality = $row["video_quality"];
      $lists[] = $home;
    }

    return $lists;
  }
}