

<div class="deposit">
    <div class="clear"></div>
        <div class="inline-cell">
            <h4><?php echo __('Methods of FIAT funding'); ?></h4>
            <div class="img-responsive">
		        <a href="/<?=Configure::read('Config.language');?>/pages/payment-methods"><img class="img-responsive" src="/theme/Design/img/payments1.png" alt=""></a>
            </div>
        </div>
		        <div class="inline-cell">
            <h4><?php echo __('Methods of over 300 Crypto payment gateways'); ?></h4>
            <div class="img-responsive">
		        <a href="/<?=Configure::read('Config.language');?>/pages/coins-methods"><img class="img-responsive" src="/theme/Design/img/coins11.png" alt=""></a>
            </div>
        </div>
    <div class="clear"></div>
</div>
<div class="footer-menu">
    <div class="container">
        <div class="col">
            <h4><?php echo __('Support'); ?></h4>
            <ul class="support">
                <li><i class="fa fa-skype"></i> <a href="skype:SportsbookProjectManager?chat"><span>SportsbookProjectManager</span></a></li>
                <li><i class="fa fa-envelope-o"></i> <span>info@betscheme.com</span></li>
                <li><i class="fa fa-phone"></i> <span>+370 67 031 965 (+all social apps)</span></li>
                <li><i class="fa fa-clock-o"></i>  <span>Support 24/7</span></li>
            </ul>
        </div>
        <div class="col">
            <h4><?php echo __('HELP'); ?></h4>
            <ul class="support">
                <li><a href="/<?=Configure::read('Config.language');?>/pages/payment-methods"><?php echo __('Payment Methods'); ?></a></li>
                <li><a href="/<?=Configure::read('Config.language');?>/pages/betting-rules"><?php echo __('Betting Rules'); ?></a></li>
                <li><a href="/<?=Configure::read('Config.language');?>/pages/responsible-gambling"><?php echo __('Responsible Gambling'); ?></a></li>
                <li><a href="http://betscheme.com/#contacts" target="_blank"><?php echo __('Contact Us'); ?></a></li>
            </ul>
        </div>
        <div class="col">
            <h4><?php echo __('About %s', Configure::read('Settings.defaultTitle')); ?></h4>
            <ul class="support">
                <li><a href="http://www.betscheme.com/" target="_blank"><?php echo __('Promotion Page'); ?></a></li>
                <li><a href="http://www.betscheme.com/#features" target="_blank"><?php echo __('Product Features'); ?></a></li>
                <li><a href="http://www.betscheme.com/#pricing" target="_blank"><?php echo __('Package Pricing'); ?></a></li>
                <li><a href="http://www.betscheme.com/#contacts" target="_blank"><?php echo __('Contact Us'); ?></a></li>
            </ul>
        </div>
        <div class="col">
            <h4><?php echo __('Intro'); ?></h4>
            <ul class="support">
                <li><span><?php echo Configure::read('Settings.defaultTitle'); ?> <?php echo __(' do not believe in hidden costs or ongoing fees. Here, what you see is what you get. Whether you are looking for a unique, customized or turnkey solution for hire or you want to buy the entire package to take your website to the next level, our pricing is clear and simple. Take a look below.'); ?></span></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="footer-txt">
    <div class="container">
        <?php echo Configure::read('Settings.defaultTitle'); ?> <?php echo __('online betting platform offers you the best odds in the market on football betting, and tennis betting as well as dozens of other sports and special events.'); ?>
    </div>
</div>
<div class="copyright">
    <div class="container">
        <?php echo Configure::read('Settings.defaultTitle'); ?> <?php echo __('2018 all rights reserved. Gambling under 18 is forbiden.'); ?> <img alt="18_mini" height="24" src="/theme/Design/img/18.png" class="toltips" data-toggle="tooltip" data-html="true" data-placement="top" title="<?php echo __('Participation in our sportbook gaming offer is only allowed to persons 18 years of age or older. In order to prevent any abuse, please keep your access data (user ID, password, question-answer combination) in a safe place.'); ?>" width="24" />
    </div>
</div>
<!--Begin Comm100 Live Chat Code-->
<div id="comm100-button-1759"></div>
<script type="text/javascript">
    var Comm100API = Comm100API || new Object;
    Comm100API.chat_buttons = Comm100API.chat_buttons || [];
    var comm100_chatButton = new Object;
    comm100_chatButton.code_plan = 1759;
    comm100_chatButton.div_id = 'comm100-button-1759';
    Comm100API.chat_buttons.push(comm100_chatButton);
    Comm100API.site_id = 37594;
    Comm100API.main_code_plan = 1759;

    var comm100_lc = document.createElement('script');
    comm100_lc.type = 'text/javascript';
    comm100_lc.async = true;
    comm100_lc.src = 'https://chatserver.comm100.com/livechat.ashx?siteId=' + Comm100API.site_id;
    var comm100_s = document.getElementsByTagName('script')[0];
    comm100_s.parentNode.insertBefore(comm100_lc, comm100_s);

    setTimeout(function() {
        if (!Comm100API.loaded) {
            var lc = document.createElement('script');
            lc.type = 'text/javascript';
            lc.async = true;
            lc.src = 'https://hostedmax.comm100.com/chatserver/livechat.ashx?siteId=' + Comm100API.site_id;
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(lc, s);
        }
    }, 5000)
</script>
<!--End Comm100 Live Chat Code-->