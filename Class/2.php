<?php
$user=8;
if(isset($user))
{
    $user_info='기존 유저';
}
else
{
$user_info='새로운 유저';
}
echo $user_info;


if(empty($user))
{
    $user_info='em기존 유저';
}
else
{
$user_info='em새로운 유저';
}
echo $user_info;
?>
