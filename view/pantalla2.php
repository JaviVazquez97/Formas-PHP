<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pantalla 2</h1>
    <a href="../index.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis, sapien non placerat varius, lectus odio maximus orci, quis fermentum turpis nisl et odio. Donec ut molestie eros. Duis at luctus sem, vel consequat magna. Etiam dui nisi, fringilla sit amet sapien eu, condimentum consequat lorem. Donec lectus elit, volutpat blandit convallis quis, consectetur ac quam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque facilisis sed ipsum sed rhoncus. Sed diam justo, blandit quis odio eu, tincidunt laoreet dui. Nam dignissim ipsum eget nulla convallis interdum. Etiam tincidunt suscipit consectetur.

Donec pharetra erat neque, a tempus elit hendrerit ut. Curabitur nec diam et leo volutpat tincidunt non nec augue. Nulla in nunc vitae magna gravida luctus. Curabitur quis ante sapien. Vivamus condimentum condimentum orci, a venenatis orci pulvinar eu. Nam facilisis, quam sed maximus pretium, metus massa vestibulum enim, at egestas erat enim interdum metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; In justo dui, dapibus ac est eget, ultrices pharetra neque. Proin purus velit, vestibulum id posuere vitae, venenatis id est. Morbi ac lorem non nunc pulvinar eleifend. Proin in justo fermentum, venenatis purus vitae, placerat arcu. Praesent sodales consequat nisl. Fusce felis est, facilisis et pellentesque in, euismod a odio. Etiam pretium turpis vitae commodo malesuada. Aliquam porttitor pretium cursus.

Duis a orci tempus, tincidunt enim eget, dapibus tellus. Proin eu varius ante, in efficitur velit. Ut pharetra eros id semper rutrum. Sed congue ornare dui eget viverra. Quisque eleifend arcu sit amet nibh gravida bibendum. Phasellus non cursus orci, vitae sollicitudin eros. Mauris fermentum urna quis augue vehicula, sit amet dignissim nibh eleifend. Mauris facilisis dui et tristique euismod. Nullam massa lectus, fringilla eu dapibus at, consequat nec nunc. Aliquam vel metus posuere, vestibulum quam in, suscipit lectus. Donec a volutpat neque. Curabitur pharetra mauris auctor nunc facilisis, et varius leo vestibulum. Maecenas pretium purus sed luctus feugiat. Morbi nibh lectus, commodo a congue ut, sagittis finibus felis.

Nunc non gravida justo. Etiam eget ex eu augue porttitor sollicitudin eu nec mauris. Sed vitae sem dictum, efficitur leo in, imperdiet elit. Curabitur cursus aliquam ex, ac mollis massa tempor nec. Phasellus nec lacus justo. Fusce volutpat, nulla ac aliquam consectetur, nibh tellus semper felis, non hendrerit urna mi vel risus. Maecenas sem mi, iaculis eu tortor ac, consectetur condimentum est. Mauris hendrerit ante lorem, at laoreet magna lacinia eu. Integer egestas eros eget ornare ultricies. Ut at tempus odio. Sed lacinia sem nec est placerat, a aliquet purus placerat. Fusce nisi lorem, malesuada cursus ipsum vitae, posuere volutpat enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. In rutrum vel justo sit amet gravida. Sed vel fermentum sapien, quis gravida risus.
Integer aliquam turpis quis justo posuere pharetra. Morbi porta consequat placerat. Cras aliquam leo ac ultrices lacinia. Suspendisse potenti. Duis id risus gravida, consequat mi tincidunt, facilisis velit. Cras vel aliquet eros. Praesent pharetra, nibh quis efficitur dignissim, ligula felis cursus justo, vel sagittis purus velit non tortor. Morbi quis finibus leo, vitae pellentesque lectus. Phasellus ut semper ipsum, eget maximus mauris. Suspendisse pulvinar ipsum eget lorem aliquet, a accumsan tellus ullamcorper. Curabitur pretium fringilla nisi eu bibendum.</a>
    <?php
        session_start();
        if(!($_SESSION['pantalla2']=='check'))
        {
            header("Location: ../index.php");
        }
    ?>
</body>
</html>