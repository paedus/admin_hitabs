<div id="wrap">
    <div id="adminmenuback"></div>
    <div id="adminmenuwrap">
        <ul id="adminmenu">
            <li><a href="/"><img src="<?= $opt->site_url() ?>/img/favicon.png" class="admin-logo" />Hitabs</a></li>
            <?php
                $menu_list = $opt -> menus();
                foreach($menu_list as $href => $label){
                    if( is_array($label) ) {
                        ?>
                        <li class="has-submenu <?= $href == $opt->folder() ? "oppened" : "" ?>">
                            <span class="under_li_span"><?= $label['name']; ?></span>
                            <ul class="submenu">
                                <?php
                                    foreach($label['submenus'] as $key => $value) {
                                        ?>
                                        <li class="<?= $value['page'] == $opt->file() ? "active" : "" ?>"><a href="<?= $opt->site_url() ?>/<?= $href ?>/<?= $value['page'] ?>"><?= $value['name'] ?></a></li>
                                        <?php
                                    }
                                ?>
                            </ul>
                        </li>
                        <?php
                    } else {
            ?>
                <li class="<?= $href == $opt->folder() ? "active" : "" ?>"><a href="<?= $opt->site_url() ?>/<?= $href ?>"><?= $label ?></a></li>
            <?php
                    }
                }
            ?>
        </ul>
    </div>
    <div id="content">
        <div id="admin-bar">
            <ul class="pull-right">
                <li><a href="<?= $opt->site_url() ?>/logout">Logout</a></li>
            </ul>
        </div>
        <?php
            if(file_exists("pages/".$opt->get().".php")){
                include("pages/".$opt->get().".php");
            } else {
                include('pages/'.$opt->folder()."/index.php");
            }
        ?>
    </div>
</div>

