#!/usr/bin/env php

<?php

// Change to the directory of this script so that all shell commands run here
chdir(__DIR__);

exec("git clone https://github.com/jgonzalez28/itflow.git ./itflow 2>&1", $output, $return_var);

echo implode("\n", $output);
