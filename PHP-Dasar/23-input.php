<?php

//stream_set_blocking(STDIN, 0);

while (false !== ($line = fgets(STDIN))) {
  echo $line;
}
