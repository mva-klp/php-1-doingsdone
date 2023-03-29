<?php
function number_of_tasks(array $task_list, $task_title)
{
  $count_array = array_count_values(array_column($task_list, 'category'));
  if (array_key_exists($task_title, $count_array)) {
    return $count_array[$task_title];
  }
  return 0;
}

function get_diff_hours($date)
{
  $task_date = strtotime($date);
  $cur_date = time();
  $diff = $task_date - $cur_date;
  $hours = floor($diff / 3600);
  return $hours;
}
