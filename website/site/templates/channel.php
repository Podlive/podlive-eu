
<?php snippet('header', array('context' => 'channel')) ?>

<?php
$name           = trim($channel->get("name"));
$followerCount  = $channel->get("followerCount");
$coverArtUrl    = $channel->get("coverartThumbnail200")->getURL();
$websiteUrl     = $channel->get("websiteUrl");
$description    = $channel->get("description");
$twitterUsername= $channel->get("twitterUsername");
$chatUrl        = $channel->get("chatUrl");
$creator        = $channel->get("creator");

$followerLabel = "";
if($followerCount == 1) {
    $followerLabel = $page->followerCountTextSingular()->text();
} else {
    $followerLabel = $page->followerCountTextPlural()->text();
}

?>

<section id="channel" class="content gradient">
    <div class="container">
        <div class="row clearfix">
            <div class="column full>"> 
                <img class="channel-logo" src="<?= $coverArtUrl ?>">
                <p></p>
                <h2><?= $name ?></h2>
                <p><?= $followerCount.' '.$followerLabel ?></p>
                <p><?= $description ?></p>
                <p><?= $creator ?></p>
                <p>
                    <a href="<?= $websiteUrl ?>">Webseite</a>, 
                    <a href="https://twitter.com/<?= $twitterUsername ?>">Twitter</a>, 
                    <a href="<?= $chatUrl ?>">Chat</a>
                </p>
                <h4>Podlive Button</h4>
                <p>Vielleicht wollt ihr ja auf eurer eigenen Webseite ein wenig Werbung für <?= $name ?> machen. Dafür gibt es den Podlive Button, den ihr auf eurer Seite embedden könnt. Er ist an das Design des iTunes Button angelehnt und öffnet bei einem Klick den Channel bei Podlive. Wenn die App installiert ist, sogar direkt in der App (ab Version 3.0)</p>
                <p><a href="https://podlive.io/channel/<?= $channel->getObjectId(); ?>" style="display:inline-block;overflow:hidden;background:url(https://podlive.io/assets/images/podlive-button.svg) no-repeat;width:133px;height:34px;background-size:contain;"></a></p>
                <code>
                    &lt;a href=&quot;https://podlive.io/channel/<?= $channel->getObjectId(); ?>&quot; style=&quot;display:inline-block;overflow:hidden;background:url(https://podlive.io/assets/images/podlive-button.svg) no-repeat;width:133px;height:34px;background-size:contain;&quot;&gt;&lt;/a&gt;
                </code>
            </div>
        </div>
    </div>
</section>

<?php snippet('footer') ?>
