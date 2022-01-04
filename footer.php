    <footer class="footer section">
        <div class="footer__container container">
            <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
            <div class="footer__columns">
                <div class="footer__feedbacks">
                    <div class="footer__feedbacks__img-container">
                        <img src="http://disco.local/wp-content/uploads/2021/12/footer-picture.png" alt="footer picture">
                    </div>
                    <div class="footer__feedbacks__contact">
                        <p>Give us your feedback here:</p>
                        <a href="mailto:support@getdisco.com?subject=Feedback" target="_blank">support@getdisco.com</a>
                    </div>
                </div>
                <div class="footer__socials">
                    <p>Follow us:</p>
                    <ul class="footer__socials__list">
                        <li>
                            <a href="https://www.facebook.com/getdiscoapp" target="_blank" rel="external no-follow"><i class="fab fa-facebook-square"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/get.disco/" target="_blank" rel="external no-follow"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/DiscoHere" target="_blank" rel="external no-follow"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/getdisco" target="_blank" rel="external no-follow"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer__copyright">
                <p>© <?php the_time('Y'); ?> Based on the Disco extension's website <a href="https://www.getdisco.com/" target="_blank" rel="external no-follow">www.getdisco.com</a> | Made for fun by <a href="https://ludovic-lefieux.fr/" target="_blank" rel="external no-follow">Ludovic Lefieux</a></p>
            </div>
        </div>
        
    </footer>
    
    <?php wp_footer(); ?>
</body>
</html>