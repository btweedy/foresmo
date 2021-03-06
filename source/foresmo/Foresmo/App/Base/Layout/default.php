<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->page_title; ?></title>
<?php echo $this->style("Foresmo/{$this->blog_theme}/styles/{$this->blog_theme}.css");?>
</head>
<body>
    <div id="container">
        <div id="topbar">
        </div>
        <div id="header">
            <span class="title_text"><a href="/"><?php echo $this->blog_title; ?></a></span>
        </div>

        <div id="content-container">
            <div id="content-bar">
            </div>
            <div id="content">
                <?php echo $this->layout_content; ?>
            </div>
            <div id="content-right">
                <?php
                    foreach($this->enabled_modules_data as $module) {
                        echo $module['output'];
                    }
                ?>
            </div>
        </div>
    </div>
    <div id="footer">
        <div id="bottom-bar">
        </div>
    </div>
</body>
</html>
