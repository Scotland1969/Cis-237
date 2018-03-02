<?php

/**
 *
 */
interface MovieManagerInterface
{
  function create(Movie $movie);
  function read();
  function readOneById();
  function update();
}


?>
