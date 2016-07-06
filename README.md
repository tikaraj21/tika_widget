# tika_widget
tika_widget
Simple widget for yii2-based applications

Installation

The preferred way to install extension is via composer. Check the composer.json for this extension's requirements and dependencies.

To install, either run

$ php composer.phar require tikaraj21/tika_widget "*"
or add

"tikaraj21/tika_widget": "*"
to the require section of your composer.json.

Usage

Upload all necessary components and prepare widget

<?php
use yii\tika_widget\Tika;
?>
<?= Tika::widget(['message' => 'Good Morning']) ?>


License

tika_widget is released under the BSD 3-Clause License. See the bundled LICENSE.md for details.
