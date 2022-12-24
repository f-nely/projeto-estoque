<?php include TEMPLATES . '/includes/header.php' ?>
    <?php foreach (PRODUTOS as $produto): ?> 
        <?php echo $produto['nome']?> - <?php echo $produto['preco'] ?>
        
        <a href="<?php echo HOME ?>?pagina=/produto&codigo=<?php echo $produto['codigo']?> ">Ver Produto</a>
        
        <br>  
    <?php endforeach; ?>
<?php include TEMPLATES . '/includes/footer.php' ?>
