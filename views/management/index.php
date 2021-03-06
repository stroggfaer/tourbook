<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Nav;
use yii\widgets\Menu;
/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Management');
$this->params['breadcrumbs'][] = $this->title;
?>


<?php

if(\Yii::$app->user->can('GodMode') || \Yii::$app->user->can('admin')){

echo "<h2>Welcome to administrator's home page</h2>";

echo Menu::widget([
    'items' => [
        // Important: you need to specify url as 'controller/action',
        // not just as 'controller' even if default action is used.
        ['label' => 'Home', 'url' => ['site/index']],
        // 'Products' menu item will be selected as long as the route is 'product/index'
        ['label' => 'Booking management', 'url' => ['booking/index'], 'items' => [
            ['label' => 'New sightseeing', 'url' => ['booking/index', 'tag' => 'new']],
            ['label' => 'New tour', 'url' => ['booking/index', 'tag' => 'popular']],
            ['label' => 'New rent', 'url' => ['booking/index', 'tag' => 'popular']],
            ['label' => 'New hotel booking', 'url' => ['booking/index', 'tag' => 'popular']],
        ]],
        ['label' => 'Country management', 'url' => ['country/index'], 'items' => [
            ['label' => 'New country', 'url' => ['country/index', 'tag' => 'new']],
        ]],
        ['label' => 'Cities management', 'url' => ['city/index'], 'items' => [
            ['label' => 'New city', 'url' => ['city/index', 'tag' => 'new']],
        ]],
        ['label' => 'Orders management', 'url' => ['orders/index'], 'items' => [
        ]],
        ['label' => 'Transactions management', 'url' => ['transactions/index'], 'items' => [
            ['label' => 'New transaction', 'url' => ['transactions/index', 'tag' => 'new']],
            ['label' => 'New bonus transaction', 'url' => ['transactions/index', 'tag' => 'new']],
        ]],
        ['label' => 'Users management', 'url' => ['user/index'], 'items' => [
            ['label' => 'New user', 'url' => ['user/create', 'tag' => 'new']],
        ]],
        ['label' => 'Reports', 'url' => ['reports/index']],
        ['label' => 'Logout', 'url' => ['site/logout']],
    ],
]);

}
if(\Yii::$app->user->can('operator')){

echo "<h2>Welcome to operators's home page</h2>";

echo Menu::widget([
    'items' => [
        // Important: you need to specify url as 'controller/action',
        // not just as 'controller' even if default action is used.
        ['label' => 'Home', 'url' => ['site/index']],
        // 'Products' menu item will be selected as long as the route is 'product/index'
        ['label' => 'Booking management', 'url' => ['booking/index'], 'items' => [
            ['label' => 'New sightseeing', 'url' => ['booking/index', 'tag' => 'new']],
            ['label' => 'New tour', 'url' => ['booking/index', 'tag' => 'popular']],
            ['label' => 'New rent', 'url' => ['booking/index', 'tag' => 'popular']],
            ['label' => 'New hotel booking', 'url' => ['booking/index', 'tag' => 'popular']],
        ]],
        ['label' => 'Country management', 'url' => ['country/index'], 'items' => [
            ['label' => 'New country', 'url' => ['country/index', 'tag' => 'new']],
        ]],
        ['label' => 'Cities management', 'url' => ['city/index'], 'items' => [
            ['label' => 'New city', 'url' => ['city/index', 'tag' => 'new']],
        ]],
        ['label' => 'Orders management', 'url' => ['orders/index'], 'items' => [
        ]],
        ['label' => 'Logout', 'url' => ['site/logout']],
    ],
]);

}

if(\Yii::$app->user->can('user')){

echo "<h2>Welcome to user's account home page</h2>";

echo Menu::widget([
    'items' => [
        // Important: you need to specify url as 'controller/action',
        // not just as 'controller' even if default action is used.
        ['label' => 'My Account', 'url' => ['site/index']],
        ['label' => 'Booking', 'url' => ['site/index']],
        ['label' => 'Wish list', 'url' => ['site/index']],
        ['label' => 'Credits', 'url' => ['site/index']],
        ['label' => 'Invite friends', 'url' => ['site/index']],
        ['label' => 'Previews', 'url' => ['site/index']],
        ['label' => 'Settings', 'url' => ['site/index']],
        ['label' => 'Logout', 'url' => ['site/logout']],
    ],
]);

}

?>