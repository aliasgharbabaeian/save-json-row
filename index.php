<?php
  file_put_contents('logs/users.json',file_get_contents('http://webtrim.ir/json/users.json'));
  $user_list = file_get_contents('logs/users.json');
  $user_list = json_decode($user_list, false);
  $all_users = $user_list->data[0]->users->data;

  // Saving Method 

  foreach ($all_users as $user) {
    $uniq = $user->id . $user->cat;
    file_put_contents("logs/user_$uniq.json", json_encode($user));
  }
?>
