<?php get_header(); ?>
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    <article class="post">
      <?php the_post_thumbnail(); ?>

      <h1><?php the_title(); ?></h1>

      <div class="post__meta">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
        <p>
          Publié le <?php the_date(); ?>
          par <?php the_author(); ?>
          Dans la catégorie <?php the_category(); ?>
          Avec les étiquettes <?php the_tags(); ?>
        </p>
      </div>

      <div class="post__content">
        <?php the_content(); ?>
        <p>
            <strong>Avis :</strong> 
            <?php echo get_post_meta( get_the_ID(), 'avis', true ); ?>
        </p>

        <p>
            <strong>Note :</strong>
            <?php echo get_post_meta( get_the_ID(), 'note', true ); ?> / 10
        </p>

        <div class="plus-moins">
            <div class="plus">
                <?php echo get_post_meta( get_the_ID(), 'plus', true ); ?>
            </div>
            <div class="plus">
                <?php echo get_post_meta( get_the_ID(), 'moins', true ); ?>
            </div>
        </div>
        <?php if( has_category( 'jeux-video' ) ): ?>

            <div class="review">
                <div class="review__score">Note : <?php the_field( 'note' ); ?> / 10</div>

                <div class="review__cols">
                    <div class="review__pros">Les plus : <?php the_field( 'les_plus' ); ?></div>
                    <div class="review__cons">Les moins : <?php the_field( 'les_moins' ); ?></div>
                </div>

                <div class="review__date">Sortie le <?php the_field( 'date_de_sortie' ); ?></div>

                
                    <div class="review__picture">
                        <?php 
                          $image_id = get_field( 'pochette' ); // On récupère cette fois l'ID
                          if( $image_id ) {	
                            echo wp_get_attachment_image( $image_id, 'full' );
                          }
                        ?>
                    </div>
              </div>

        <?php endif; ?>
      </div>

      <?php comments_template(); // Par ici les commentaires ?>
    </article>

  <?php endwhile; endif; ?>

  <div class="site__navigation">
    <div class="site__navigation__prev">
      <?php previous_post_link( 'Article Précédent<br>%link' ); ?>
      </div>
      <div class="site__navigation__next">
          <?php next_post_link( 'Article Suivant<br>%link' ); ?> 
      </div>
  </div>
<?php get_footer(); ?>