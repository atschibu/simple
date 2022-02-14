# simple
.php, Bilder, .css für meine Webseite
2 mögliche Wege:
1. die einzelnen Dateien hochladen wie in simple und commands
2. gezipptes Verzeichnis (tar) von html ausgehend
3. auf remote lade ich nur 1 oder 2 files rauf und runter, Zugriff von überall,
4. aber fall-back für rclone wäre gut. 
5. Erstmal würde HauptCommand.php und create_text.php schon reichen.
6. Da ich sowieso lamp auf beamer neu installieren muss, werde ich ein neues .tar anlegen und die Schritte für docker festlegen 
You will need to save the Docker image as a tar file:
docker save -o <path for generated tar file> <image name>
Then copy your image to a new system with regular file transfer tools such as cp, scp or rsync(preferred for big files). After that you will have to load the image into Docker:
docker load -i <path to image tar file>
Transferring a Docker image via SSH, bzipping the content on the fly:
docker save <image> | bzip2 | ssh user@host docker load
Note that docker load automatically decompresses images for you. It supports gzip, bzip2 and xz.
