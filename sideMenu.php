<?php
class sideMenu
{
    public $name;
    public $url;
    public function __construct($name, $url)
    {
        $this->name = $name;
        $this->url = $url;
    }
}
class Menu
{
    private $listItems = [];
    public function AddMenuItem($name, $url)
    {
        $sideMenu = new sideMenu($name, $url);
        $this->listItems[] = $sideMenu;
    }
    public function PrintMenu()
    {
        echo "<ul style='list-style: none; padding: 0; margin: 0;'>";
        foreach ($this->listItems as $item)
        {
            echo "<li style='background-color: #33acff; width: 300px; height: 70px; float: left; margin-right: 10px;'>";
            echo "<a href='{$item->url}' style='display: block; height: 100%; text-decoration: none;'>";
            echo "<p style='color: blue; margin: 0; padding-left: 30%; font-size: 30px; padding-top: 20px;'>{$item->name}</p>";
            echo "</a>";
            echo "</li>";
        }
        echo "</ul>";
    }
}
$menu = new Menu();
$menu->AddMenuItem("Home", "menuHome.php");
$menu->AddMenuItem("About", "menuAbout.php");
$menu->AddMenuItem("Photo", "menuPhoto.php");
$menu->AddMenuItem("Contact Us", "menuContact.php");
$menu->AddMenuItem("Login", "menuLogin.php");
$menu->PrintMenu(300, 400, "#f4f4f4", "#333333");
