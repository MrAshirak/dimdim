<?php

$connection = ssh2_connect('behemot.sytes.net', 13322);
ssh2_auth_password($connection, 'username', 'password');

$sftp = ssh2_sftp($connection);

$sftp->uploadFile("/tmp/to_be_sent", "/tmp/to_be_received");
