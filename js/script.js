function abrePopUp() {

    URL = "editar.php?codigo= <?php echo $dado['idUsuario']; ?>";

    // URL = "editar.php";

    window.open(URL, 'Foto_Ampliada', 'toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=400,height=400');

}