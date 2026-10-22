<?php 
$menu = get_menu_by_slug('main');
$logo = get_globals_logo();
?>

<header data-layout="header">
    <nav class="nav-container">
        <ul class="nav">
            <?php foreach ($menu as $item): ?>
                <?php if ($item['title'] === 'Projekte'): ?>
                    <li class="nav-item">
                        <a target="<?= esc_attr($item['target']) ?>"
                           href="<?= esc_url($item['url']) ?>">
                            <?= esc_html($item['title']) ?>
                        </a>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </nav>

    <a class="logo-link" href="<?= esc_url(home_url('/')) ?>">
        <img
            class="logo"
            src="<?= esc_url($logo['src']) ?>"
            alt="<?= esc_attr($logo['alt']) ?>"
        >
    </a>

    <nav class="nav-container">
        <ul class="nav">
            <?php foreach ($menu as $item): ?>
                <?php if ($item['title'] === 'Über mich'): ?>
                    <li class="nav-item">
                        <a target="<?= esc_attr($item['target']) ?>"
                           href="<?= esc_url($item['url']) ?>">
                            <?= esc_html($item['title']) ?>
                        </a>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>

