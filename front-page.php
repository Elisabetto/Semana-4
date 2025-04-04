<?php
get_header();
?>

<div class="front-page-seccion">
    <?php if ( has_post_thumbnail() ) : ?>
        <div class="front-page-imagen">
            <?php the_post_thumbnail( 'medium_large' ); ?>
        </div>
    <?php endif; ?>
    
    <section class="contenido-box">
        <h2>Bienvenidos a Restaurante Sakura</h2>
        <p>En el corazón de la ciudad, el restaurante Sakura se presenta como un rincón lleno de tradición y modernidad, donde la exquisita cocina japonesa se fusiona con la calidez de un ambiente acogedor y elegante. El nombre «Sakura», que significa «cerezo en flor» en japonés, refleja nuestra filosofía de ofrecer una experiencia única: delicadeza, frescura y belleza en cada plato, como los pétalos de un cerezo que caen suavemente al suelo.</p>
        <br>    
        <p>Cada ingrediente que utilizamos en Restaurante Sakura es seleccionado cuidadosamente para asegurar que nuestros clientes disfruten de lo mejor de la gastronomía japonesa. Desde el sushi más fresco hasta los ramen más sabrosos, todos nuestros platos son preparados con técnicas tradicionales, pero con un toque contemporáneo que sorprende a nuestros comensales.</p>
        <br>
        <p>Nuestro chef, formado en Japón, tiene una pasión por la cocina que se refleja en cada creación. Su destreza en el arte del sushi es solo una de las muchas delicias que podrás encontrar en nuestro menú. Además, en Restaurante Sakura ofrecemos una variedad de opciones para todos los gustos, incluyendo platos vegetarianos y opciones sin gluten, para que todos puedan disfrutar de la auténtica cocina japonesa.</p>
        <br>
        <p>El ambiente del restaurante está inspirado en la serenidad de los jardines japoneses. Con una decoración minimalista, en tonos de madera y detalles florales, cada rincón de Restaurante Sakura está pensado para crear una atmósfera tranquila, perfecta para compartir con amigos, familiares o disfrutar de una velada romántica.</p>
    </section>

</div>

<?php
get_footer();
?>