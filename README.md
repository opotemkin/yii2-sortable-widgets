# Yii2 Sortable widgets

Implementation Rubaxa/Sortable for Yii2 widgets. Position starts with 1.

Supported:

- GridView widget.

![demo](https://hsto.org/files/60e/e7a/ced/60ee7aced7794a638d0a6365062397ad.gif)

## Usage

Create a new migration, change a parent to the migration class from the extension and specify the table name property:

```php
class m140811_131705_Models_order extends \beatep\sortable\migrations\Migration
{
    protected $tableName = 'models';
}
```

Add the sortable behavior to your model and specify the query property:

```php
public function behaviors()
{
    return [
        'sortable' => [
            'class' => \beatep\sortable\behaviors\Sortable::className(),
            'query' => self::find(),
        ],
    ];
}
```

Add the sorting action to your controller and specify the query property:

```php
public function actions()
{
    return [
        'sorting' => [
            'class' => \beatep\sortable\actions\Sorting::className(),
            'query' => \vendor\namespace\Model::find(),
        ],
    ];
}
```

Add the column to your grid view and specify the sorting url like here:

```php
echo \yii\grid\GridView::widget([
    'dataProvider' => $model->search(),
    'rowOptions' => function ($model, $key, $index, $grid) {
        return ['data-sortable-id' => $model->id];
    },
    'columns' => [
        [
            'class' => \beatep\sortable\grid\Column::className(),
        ],
        'id',
        'title',
        'order',
    ],
    'options' => [
        'data' => [
            'sortable-widget' => 1,
            'sortable-url' => \yii\helpers\Url::toRoute(['sorting']),
        ]
    ],
]);
```
