        <div class="wrap">
            <footer id="bottom">
                <small>&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?>. Tous droits réservés.</small>
                    
                <ul role="navigation">
                    <li><a href="<?php echo rss_url(); ?>">RSS</a></li>
                    <?php if(twitter_account()): ?>
                    <li><a href="<?php echo twitter_url(); ?>">@<?php echo twitter_account(); ?></a></li>
                    <?php endif; ?>
                    
                    <li><a href="<?php echo admin_url(); ?>" title="Administrer votre site !">Administration</a></li>
                   
                    <li><a href="/" title="Vers mon site.">Accueil</a></li>

                    <?php if(is_debug()): ?><a id="debug_toggle" href="#debug">Profil de la base</a><?php endif; ?>
                </ul>
                
                <a id="attribution" title="Propulsé par Roumpi" href="//julienbarrier.fr/roumpi">Propulsé par Roumpi</a>
            </footer>

            <?php if(is_debug()): ?>
            <?php echo db_profile(); ?>
            <script>
                (function() {
                    var g = function(i) {
                        var e = document.getElementById(i);
                        e.s = function(p, v) {
                            this.style[p] = v;
                        };
                        e.g = function(p) {
                            return this.style[p];
                        };

                        return e;
                    };

                    var a = g('debug_toggle'), t = g('debug_table');

                    var b = function(e) {
                        var d = (t.g('display') == '' || t.g('display') == 'none') ? 'block' : 'none';
                        t.s('display', d);
                        e.preventDefault();
                        e.stopPropagation();
                    };

                    a.addEventListener('click', b, false);
                }());
            </script>
            <?php endif; ?>
        </div>
    </body>
</html>
