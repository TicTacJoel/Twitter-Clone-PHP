<?php

function is_post_requested()
{
  return $_SERVER["REQUEST_METHOD"] === "POST";
}
