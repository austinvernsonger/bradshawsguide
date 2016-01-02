<? snippet('_header') ?>

<section>
    <? snippet('page/header', array('title' => "Search results for ‘".esc($query)."’")) ?>

<? if($results): ?>
    <ul>
    <? foreach($results as $result): ?>
        <?
        $type = $result->parent()->title();
        if($type == "Stations"):
            $type = "Station";
        elseif($type == "Routes"):
            $type = "Route";
        elseif($type == "Regions"):
            $type = "Region";
        elseif($type == "Railway Companies"):
            $type = "Railway Company";
        endif
        ?>
        <li>
            <h2><a href="<?= $result->url() ?>"><?= html($result->title()); ?></a> <em><?= $type ?></em></h2>
            <p><?= excerpt($result->text(), $length=140); ?></p>
            <a href="<?= $result->url() ?>"><?= server::get('server_name'); ?><?= $result->url() ?></a>
        </li>
    <? endforeach ?>
    </ul>

    <? snippet('pagination', array('pagination' => $results->pagination())) ?>

<? elseif($search->query()): ?>
    <p>No results for <strong><?= html($search->query()) ?></strong></p>
<? endif ?>
</section>

<? snippet('_footer') ?>
