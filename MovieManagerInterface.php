<?php

/**
 *
 */
interface MovieManagerInterface
{
  function create(string $file);
  function read(string $path);
  function readOneById();
  function update();
}


?>
