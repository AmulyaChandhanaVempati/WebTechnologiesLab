<?php   

$fs=fopen("source.txt", "r");
$ft=fopen("destination.txt", "w");

if ($fs==NULL)
{
    echo "Can't Open Source File ...";
    exit(0);
}

if ($ft==NULL)
{
    echo "Can't Open Destination File ...";
    fclose ($fs);
    exit(1);
}

else
{
    while ($ch=fgets($fs))
        fputs($ft, $ch);

    fclose ($fs);
    fclose ($ft);
}

echo "File Handling successfully ...";
?>