<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin | <?php echo $this->blog_title; ?></title>
<?php
echo $this->style('Foresmo/default/styles/admin.css')."\n";
echo $this->script('Foresmo/default/scripts/mootools-1.2.2-core.js')."\n";
echo $this->script('Foresmo/default/scripts/mootools-1.2.2.2-more.js')."\n";
echo $this->script('Foresmo/default/scripts/tiny_mce/tiny_mce.js')."\n";
echo $this->script('Foresmo/default/scripts/admin.js')."\n";
?>
</head>
<body>
    <div id="top_nav">
        <ul class="nav main">
            <li>
                <a href="/admin">Home</a>
            </li>
            <li>
                <a href="/admin/pages">Pages</a>
                <ul>
                    <li><a href="/admin/pages/new">Create New Page</a></li>
                    <li><a href="/admin/pages/manage">Manage Pages</a></li>
                </ul>
            </li>
            <li>
                <a href="/admin/posts">Posts</a>
                <ul>
                    <li><a href="/admin/posts/new">Create New Post</a></li>
                    <li><a href="/admin/posts/manage">Manage Posts</a></li>
                </ul>
            </li>
            <li>
                <a href="/admin/comments">Comments</a>
                <ul>
                    <li><a href="/admin/comments/spam">Spam</a></li>
                </ul>
            </li>
            <li>
                <a href="/admin/modules">Modules</a>
                <ul>
                    <li><a href="/admin/modules/manage">Manage Modules</a></a></li>
                </ul>
            </li>
            <li>
                <a href="/admin/users">Users</a>
                <ul>
                    <li><a href="/admin/users/add">Add user</a></li>
                    <li><a href="/admin/users/manage">Manage users</a></li>
                    <li><a href="/admin/roles/add">Add role</a></li>
                    <li><a href="/admin/roles/manage">Manage roles</a></li>
                </ul>
            </li>
            <li>
                <a href="/admin/settings">Settings</a>
            </li>
        </ul>
        <ul class="nav right">
            <li>
                <a href="/logout">Logout</a>
            </li>
            <li>
                <a href="#"><?php echo $this->session->get('Foresmo_username'); ?></a>
                <ul>
                    <li><a href="/admin/preferences">Preferences</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div id="main_content" class="container_16">
        <?php
            if (isset($this->message)) {
                echo '<div class="admin_message">';
                echo $this->message;
                echo '</div>';
            }
        ?>
        <?php echo $this->layout_content; ?>
    </div>
    <div id="footer">
        <span class="footer-left">Theme: Redlink, using <a href="http://designinfluences.com/fluid960gs/" target="_blank">Fluid 960</a> and <a href="http://splashyfish.com/icons/" target="_blank">Splashy Icons</a></span>
        <span class="footer-right"><a href="http://redlinktech.com" target="_blank">Redlink Technology Solutions, LLP</a></span>
    </div>
</body>
</html>
